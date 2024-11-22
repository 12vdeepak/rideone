<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\RideRequest;
use App\Models\RideRequestRating;
use App\Models\Coupon;
use App\Http\Resources\RideRequestResource;
use App\Http\Resources\ComplaintResource;
use Carbon\Carbon;
use App\Models\Payment;
use App\Jobs\NotifyViaMqtt;
use App\Models\Reward;
use App\Models\RewardHistory;
use App\Models\User;
use Illuminate\Support\Facades\Http;
use Validator;

class RideRequestController extends Controller
{
    public function getList(Request $request)
    {
        $riderequest = RideRequest::query();

        $riderequest->when(request('service_id'), function ($q) {
            return $q->where('service_id', request('service_id'));
        });

        $riderequest->when(request('is_schedule'), function ($q) {
            return $q->where('is_schedule', request('is_schedule'));
        });

        $riderequest->when(request('rider_id'), function ($q) {
            return $q->where('rider_id',request('rider_id'));
        });

        $riderequest->when(request('driver_id'), function ($query) {
            return $query->whereHas('driver',function ($q) {
                $q->where('driver_id',request('driver_id'));
            });
        });
        $order = 'desc';
        $riderequest->when(request('status'), function ($query) {
            if( request('status') == 'upcoming' ) {
                return $query->where('datetime', '>=', Carbon::now()->format('Y-m-d H:i:s'));
            } else if( request('status') == 'canceled' ) {
                return $query->whereIn('status',['canceled']);
            } else {
                return $query->where('status', request('status'));
            }
        });

        if( request('from_date') != null && request('to_date') != null ){
            $riderequest = $riderequest->whereBetween('datetime',[ request('from_date'), request('to_date')]);
        }

        $per_page = config('constant.PER_PAGE_LIMIT');
        if( $request->has('per_page') && !empty($request->per_page)){
            if(is_numeric($request->per_page))
            {
                $per_page = $request->per_page;
            }
            if($request->per_page == -1 ){
                $per_page = $riderequest->count();
            }
        }
        if( request('status') == 'upcoming' ) {
            $order = 'asc';
        }
        $riderequest = $riderequest->orderBy('datetime',$order)->paginate($per_page);
        $items = RideRequestResource::collection($riderequest);

        $response = [
            'pagination' => json_pagination_response($items),
            'data' => $items,
        ];
        
        return json_custom_response($response);
    }

    public function getDetail(Request $request)
    {
        $id = $request->id;
        $riderequest = RideRequest::where('id', $id)->first();
        
        if ($riderequest == null) {
            return json_message_response(__('message.not_found_entry', ['name' => __('message.riderequest')]));
        }        
        $total_amount = $riderequest->total_amount;
    
        $riderequest->total_amount = $total_amount;
            
        $ride_detail = new RideRequestResource($riderequest);
    
        $ride_history = optional($riderequest)->rideRequestHistory;
        $rider_rating = optional($riderequest)->rideRequestRiderRating();
        $driver_rating = optional($riderequest)->rideRequestDriverRating();
    
        $current_user = auth()->user();
        if ($current_user->unreadNotifications->count() > 0) {
            $current_user->unreadNotifications->where('data.id', $id)->markAsRead();
        }
    
        $complaint = null;
        if ($current_user->hasRole('driver')) {
            $complaint = optional($riderequest)->rideRequestDriverComplaint();
        }
    
        if ($current_user->hasRole('rider')) {
            $complaint = optional($riderequest)->rideRequestRiderComplaint();
        }
    
        $response = [
            'data' => $ride_detail,
            'ride_history' => $ride_history,
            'rider_rating' => $rider_rating,
            'driver_rating' => $driver_rating,
            'complaint' => isset($complaint) ? new ComplaintResource($complaint) : null,
            'payment' => optional($ride_detail)->payment,
        ];
    
        return json_custom_response($response);
    }

    public function completeRideRequest(Request $request)
    {
        $id = $request->id;
        $ride_request = RideRequest::find($id);
        
        if (!$ride_request) {
            return json_message_response(__('message.not_found_entry', ['name' => __('message.riderequest')]));
        }
    
        if ($ride_request->status == 'completed') {
            return json_message_response(__('message.ride.completed'));
        }
    
        $ride_request->update([
            'end_latitude' => $request->end_latitude,
            'end_longitude' => $request->end_longitude,
            'end_address' => $request->end_address,
            'extra_charges' => $request->extra_charges,
            'extra_charges_amount' => $request->extra_charges_amount
        ]);
    
        $distance_unit = $ride_request->distance_unit ?? 'km';
        $distance = $request->distance;
    
        if ($distance_unit == 'mile') {
            $distance = km_to_mile($distance);
        }
    
        $service = $ride_request->service;
        $start_datetime = $ride_request->rideRequestHistory()->where('history_type', 'in_progress')->pluck('datetime')->first();
        $duration = calculateRideDuration($start_datetime);
        $arrived_datetime = $ride_request->riderequest_history_data('arrived');
        $waiting_time = calculateRideDuration($start_datetime, $arrived_datetime);
        
        // Adjust waiting time
        $waiting_time = max($waiting_time - ($service->waiting_time_limit ?? 0), 0);
    
        // Update ride request status to completed
        $ride_request->update([
            'status' => 'completed',
            'distance' => $distance,
            'duration' => $duration,
            'service_data' => $service,
        ]);
    
        // Calculate fare
        $current_date = Carbon::today()->toDateTimeString();
        $coupon = Coupon::where('id', $ride_request->coupon_code)
                        ->where('start_date', '<=', $current_date)
                        ->where('end_date', '>=', $current_date)
                        ->first();
    
        $extra_charges_amount = $request->has('extra_charges_amount') ? $request->extra_charges_amount : 0;
        $ridefee = $this->calculateRideFares($service, $distance, $duration, $waiting_time, $extra_charges_amount, $coupon);
    
        // Reward Deduction
        $reward = Reward::where('user_id', $ride_request->rider_id)->first();
        $reward_balance = $reward ? $reward->total_amount : 0;
        $reward_deduction_amount = min($ridefee['total_amount'] * 0.50, $reward_balance); // Deduct only up to the balance available
    
        $final_total_amount = $ridefee['total_amount'] - $reward_deduction_amount;
        $new_balance = $reward_balance - $reward_deduction_amount;
    
        // Update Reward Table
        if ($reward) {
            $reward->update(['total_amount' => $new_balance]);
        }
    
        // Log Reward Deduction
        RewardHistory::create([
            'user_id' => $ride_request->rider_id,
            'amount' => $reward_deduction_amount,
            'type' => 'debit',
            'description' => 'Ride fare deduction',
            'balance' => $new_balance, 
            'datetime' => now(), 
            'ride_request_id' => $ride_request->id
        ]);
    
        // Update ride request with fare details
        $ride_request->update(array_merge($ridefee, [
            'total_amount' => $final_total_amount,
            'reward_amount' => $reward_deduction_amount
        ]));
    
        // Create payment record
        $payment_data = [
            'rider_id' => $ride_request->rider_id,
            'ride_request_id' => $ride_request->id,
            'payment_type' => $ride_request->payment_type ?? 'cash',
            'datetime' => now(),
            'payment_status' => 'pending',
            'total_amount' => $final_total_amount,
        ];
    
        Payment::create($payment_data);
    
        // Save ride history
        $history_data = [
            'history_type' => 'completed',
            'ride_request_id' => $ride_request->id,
            'ride_request' => $ride_request,
        ];
    
        saveRideHistory($history_data);
    
        // Mark driver as available
        $ride_request->driver->update(['is_available' => 1]);
    
        // Return response
        return json_message_response(__('message.ride.completed'), [
            'total_amount' => $final_total_amount,
            'reward_deduction_amount' => $reward_deduction_amount
        ]);
    }
    
    
    
    public function calculateRideFares($service, $distance, $duration, $waiting_time, $extra_charges_amount, $coupon)
    {
        $per_minute_drive_charge = $duration * $service->per_minute_drive;
    
        if ($distance > $service->minimum_distance) {
            $distance -= $service->minimum_distance;
        }
    
        $per_distance_charge = $distance * $service->per_distance;
        $per_minute_waiting_charge = $waiting_time * $service->per_minute_wait;
    
        $base_fare = $service->base_fare;
        $minimum_fare = $service->minimum_fare;
    
        $total_amount = $base_fare + $per_distance_charge + $per_minute_drive_charge + $per_minute_waiting_charge;
    
        if ($total_amount < $minimum_fare) {
            $total_amount = $minimum_fare;
        }
    
        $total_amount += $extra_charges_amount;
    
        if ($service->commission_type == 'fixed') {
            $commission = $service->admin_commission + $service->fleet_commission;
            if ($total_amount <= $commission) {
                $total_amount += $commission;
            }
        }
    
        $subtotal = $total_amount;
    
        // Check for coupon data
        $discount_amount = 0;
        if ($coupon && $coupon->minimum_amount < $total_amount) {
            if ($coupon->discount_type == 'percentage') {
                $discount_amount = $total_amount * ($coupon->discount / 100);
            } else {
                $discount_amount = $coupon->discount;
            }
    
            if ($coupon->maximum_discount > 0 && $discount_amount > $coupon->maximum_discount) {
                $discount_amount = $coupon->maximum_discount;
            }
            $subtotal = $total_amount - $discount_amount;
        }
    
        return [
            'base_fare' => $base_fare,
            'minimum_fare' => $minimum_fare,
            'base_distance' => $service->minimum_distance,
            'per_distance' => $service->per_distance,
            'per_distance_charge' => $per_distance_charge,
            'per_minute_drive_charge' => $per_minute_drive_charge,
            'waiting_time' => $waiting_time,
            'per_minute_waiting_charge' => $per_minute_waiting_charge,
            'subtotal' => $subtotal,
            'total_amount' => $total_amount,
            'extra_charges_amount' => $extra_charges_amount,
            'coupon_discount' => $discount_amount,
        ];
    }
    
    public function verifyCoupon(Request $request)
    {
        $coupon_code = $request->coupon_code;

        $coupon = Coupon::where('code', $coupon_code)->first();
        $status = isset($coupon_code) ? 400 : 200;
        
        if($coupon != null) {
            $status = Coupon::isValidCoupon($coupon);
        }
        
        $response = couponVerifyResponse($status);

        return json_custom_response($response,$status);
    }

    public function rideRating(Request $request)
    {
        $ride_request = RideRequest::where('id',request('ride_request_id'))->first();

        $message = __('message.not_found_entry', ['name' => __('message.riderequest')]);

        if($ride_request == '') {
            return json_message_response( $message );
        }
        $data = $request->all();

        $data['rider_id'] = auth()->user()->user_type == 'driver' ? $ride_request->rider_id : null;
        $data['driver_id'] = auth()->user()->user_type == 'rider' ? $ride_request->driver_id : null;

        $data['rating_by'] = auth()->user()->user_type;
        RideRequestRating::updateOrCreate([ 'id' => $request->id ], $data);
        
        if(auth()->user()->hasRole('rider')) {
            $ride_request->update(['is_rider_rated' => true]);
            $msg = __('message.rated_successfully', ['form' => __('message.rider')]);
        }
        if(auth()->user()->hasRole('driver')) {
            $ride_request->update(['is_driver_rated' => true]);
            $msg = __('message.rated_successfully', ['form' => __('message.driver')]);
        }
        if($ride_request->payment->payment_status == 'pending' && $request->has('tips') && request('tips') != null) {
            $ride_request->update(['tips' => request('tips')]);
        }

        $notify_data = new \stdClass();
        $notify_data->success = true;
        $notify_data->success_type = 'rating';
        $notify_data->success_message = $msg;
        $notify_data->result = new RideRequestResource($ride_request);

        if( auth()->user()->hasRole('driver') ) {
            dispatch(new NotifyViaMqtt('ride_request_status_'.$ride_request->rider_id, json_encode($notify_data)));
        }

        if( auth()->user()->hasRole('rider') ) {
            dispatch(new NotifyViaMqtt('ride_request_status_'.$ride_request->driver_id, json_encode($notify_data)));
        }

        $message = __('message.save_form',[ 'form' => __('message.rating') ] );
        
        return json_message_response($message);
    }

    public function placeAutoComplete(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'search_text' => 'required',
            'language' => 'required'
        ]);

        if ( $validator->fails() ) {
            $data = [
                'status' => 'false',
                'message' => $validator->errors()->first(),
                'all_message' =>  $validator->errors()
            ];

            return json_custom_response($data,400);
        }
        
        $google_map_api_key = env('GOOGLE_MAP_KEY');
        
        $response = Http::withHeaders([
            'Accept-Language' => request('language'),
        ])->get('https://maps.googleapis.com/maps/api/place/autocomplete/json?input='.request('search_text').'&key='.$google_map_api_key);

        return $response->json();
    }

    public function placeDetail(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'placeid' => 'required',
        ]);

        if ( $validator->fails() ) {
            $data = [
                'status' => 'false',
                'message' => $validator->errors()->first(),
                'all_message' =>  $validator->errors()
            ];

            return json_custom_response($data,400);
        }
        
        $google_map_api_key = env('GOOGLE_MAP_KEY');
        $response = Http::get('https://maps.googleapis.com/maps/api/place/details/json?placeid='.$request->placeid.'&key='.$google_map_api_key);

        return $response->json();
    }
}
