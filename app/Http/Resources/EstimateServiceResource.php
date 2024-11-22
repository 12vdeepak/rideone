<?php

namespace App\Http\Resources;

use App\Models\Reward;
use Illuminate\Http\Resources\Json\JsonResource;

class EstimateServiceResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request|null  $request
     * @return array
     */
    public function toArray($request = null)
    {
        $distanceUnit = optional($this->region)->distance_unit ?? 'km';
        $distanceInUnit = optional($request)->input('distance_in_unit', 0);
        $dropoffDistanceInMeters = optional($request)->input('dropoff_distance_in_meters', 0);
        $dropoffTimeInSeconds = optional($request)->input('dropoff_time_in_seconds', 0);
        $coupon = optional($request)->input('coupon');
        $user = optional($request)->input('user');
        // $final_base_fare = request('final_base_fare');

        $dataRewad = Reward::where('user_id', optional($request)->user_id)->first();
        $rewardAmount = $dataRewad ? $dataRewad->total_amount : 0;

        $serviceData = [
            'id'                => $this->id,
            'service_id'        => $this->id,
            'name'              => $this->name,
            'region_id'         => $this->region_id,
            'distance_unit'     => $distanceUnit,
            'dropoff_distance_in_km' => $dropoffDistanceInMeters / 1000,
            'duration'          => $dropoffTimeInSeconds / 60,
            'capacity'          => $this->capacity,
            
            'base_fare'         => $this->base_fare ?? 0, // Ensure base fare is initialized
            'minimum_fare'      => $this->minimum_fare,
            'minimum_distance'  => $this->minimum_distance,
            'per_distance'      => $this->per_distance,
            'per_minute_drive'  => $this->per_minute_drive,
            'per_minute_wait'   => $this->per_minute_wait,
            'waiting_time_limit'=> $this->waiting_time_limit,
            'cancellation_fee'  => $this->cancellation_fee,
            'payment_method'    => $this->payment_method,
            'service_image'     => getSingleMedia($this, 'service_image', null),
            'status'            => $this->status,
            'created_at'        => $this->created_at,
            'updated_at'        => $this->updated_at,
            'description'       => $this->description,
            'commission_type'   => $this->commission_type,
            'admin_commission'  => $this->admin_commission,
            'fleet_commission'  => $this->fleet_commission,
        ];
                
        // Calculate ride fee
        $rideFee = calculateRideFares($distanceInUnit, $dropoffTimeInSeconds, $serviceData, $coupon, $rewardAmount);

        return array_merge($serviceData, $rideFee);
    }
}
