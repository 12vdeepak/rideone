<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Region;
use Grimzy\LaravelMysqlSpatial\Types\Point;
use App\Http\Resources\ServiceResource;
use App\Http\Resources\EstimateServiceResource;
use App\Http\Requests\ETARequest;
use App\Models\Coupon;
use App\Models\Reward;
use App\Models\User;

class ServiceController extends Controller
{
    public function getList(Request $request)
    {
        $service = Service::query();

        $service->when(request('region_id'), function ($q) {
            return $q->where('region_id', request('region_id'));
        });

        $service->when(request('name'), function ($q) {
            return $q->where('name', 'LIKE', '%' . request('name') . '%');
        });

        if( $request->has('latitude') && isset($request->latitude) && $request->has('longitude') && isset($request->longitude) )
        {
            $point = new Point($request->latitude, $request->longitude);
            
            $service->whereHas('region',function ($q) use($point) {
                $q->where('status', 1)->contains('coordinates', $point);
            });
        }

        $per_page = config('constant.PER_PAGE_LIMIT');
        if( $request->has('per_page') && !empty($request->per_page)){
            if(is_numeric($request->per_page))
            {
                $per_page = $request->per_page;
            }
            if($request->per_page == -1 ){
                $per_page = $service->count();
            }
        }

        $service = $service->orderBy('name','asc')->paginate($per_page);
        $items = ServiceResource::collection($service);

        $response = [
            'pagination' => json_pagination_response($items),
            'data' => $items,
        ];
        
        return json_custom_response($response);
    }
    public function estimatePriceTime(ETARequest $request)
    {
        $serviceQuery = Service::query();
        $serviceQuery->when($request->input('region_id'), function ($query) use ($request) {
            return $query->where('region_id', $request->input('region_id'));
        });
        $serviceQuery->when($request->input('id'), function ($query) use ($request) {
            return $query->where('id', $request->input('id'));
        });
        
        if ($request->has('pick_lat') && $request->has('pick_lng')) {
            $point = new Point($request->pick_lat, $request->pick_lng);
            $serviceQuery->whereHas('region', function ($query) use ($point) {
                $query->where('status', 1)->contains('coordinates', $point);
            });
        }
        
        if ($request->has('coupon_code')) {
            $response = verify_coupon_code($request->input('coupon_code'));
            if ($response['status'] != 200) {
                return json_custom_response($response, $response['status']);
            }
        }

        $user = User::find($request->input('user_id'));
        if (!$user) {
            return json_custom_response(['message' => 'User not found'], 404);
        }

        $reward = Reward::where('user_id', $user->id)->first();
        $reward_amount = $reward ? $reward->total_amount : 0;
    
        $perPage = config('constant.PER_PAGE_LIMIT');
        if ($request->has('per_page') && is_numeric($request->per_page)) {
            $perPage = ($request->per_page == -1) ? $serviceQuery->count() : $request->per_page;
        }
        
        $services = $serviceQuery->orderBy('name', 'asc')->paginate($perPage);
        $placeDetails = taxi_get_distance_matrix($request->pick_lat, $request->pick_lng, $request->drop_lat, $request->drop_lng);
        $dropoffDistanceInMeters = distance_value_from_distance_matrix($placeDetails);
        $distanceInUnit = $dropoffDistanceInMeters ? $dropoffDistanceInMeters / 1000 : 0;
        $dropoffTimeInSeconds = duration_value_from_distance_matrix($placeDetails);
        $couponCode = $request->input('coupon_code');
        $coupon = Coupon::where('code', $couponCode)->first();
        $status = $coupon ? Coupon::isValidCoupon($coupon) : 200;
    
        if ($status != 200) {
            $response = couponVerifyResponse($status);
            return json_custom_response($response, $status);
        }
    
        $request->merge([
            'distance_in_unit' => $distanceInUnit,
            'dropoff_distance_in_meters' => $dropoffDistanceInMeters,
            'dropoff_time_in_seconds' => $dropoffTimeInSeconds,
            'coupon' => $coupon,
            'user' => $user,
            'reward_amount' => $reward_amount,
        ]);
    
        $items = EstimateServiceResource::collection($services);
    
        // Calculate reward-based discount for the response
        $firstItem = $items->first();
        $rideFee = calculateRideFares($distanceInUnit, $dropoffTimeInSeconds, $firstItem ? $firstItem->toArray() : [], $coupon, $reward_amount);
        $rewardBasedDiscount = $rideFee['reward_amount'];
    
        $response = [
            'pagination' => json_pagination_response($items),
            'data' => $items,
            'reward_amount' => $rewardBasedDiscount,
            'message' => $items->total()
        ];
        return json_custom_response($response);
    }
    

}