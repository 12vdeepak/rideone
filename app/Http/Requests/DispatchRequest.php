<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;


class DispatchRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'rider_id'          => 'required|exists:users,id', // Ensure rider exists in the 'users' table
            'driver_id'         => 'required|exists:users,id,user_type,driver', // Ensure driver exists in the 'drivers' table
            'service_id'        => 'required|exists:services,id', // Ensure service exists in the 'services' table
            'start_latitude' => 'required|numeric',
            'start_longitude' => 'required|numeric',
            'end_latitude' => 'required|numeric',
            'end_longitude' => 'required|numeric',
        ];
    }


    // public function messages()
    // {
    //     return [
    //         'rider_id.required' => __('validation.required', ['attribute' => 'Rider ID']),
    //         'driver_id.required' => __('validation.required', ['attribute' => 'Driver ID']),
    //         'service_id.required' => __('validation.required', ['attribute' => 'Service ID']),
    //         'start_latitude.required' => __('validation.required', ['attribute' => 'Start Latitude']),
    //         'start_longitude.required' => __('validation.required', ['attribute' => 'Start Longitude']),
    //         'end_latitude.required' => __('validation.required', ['attribute' => 'End Latitude']),
    //         'end_longitude.required' => __('validation.required', ['attribute' => 'End Longitude']),

    //     ];
    // }


    /**
     * @param Validator $validator
     */
    protected function failedValidation(Validator $validator)
    {
        $data = [
            'status' => false,  // Set to false since validation failed
            'message' => $validator->errors()->first(),
            'all_message' =>  $validator->errors()
        ];

        // For API requests, return JSON with status 422 (Unprocessable Entity)
        if (request()->is('api*')) {
            throw new HttpResponseException(response()->json($data, 422));
        }

        // For AJAX requests, return a JSON response
        if ($this->ajax()) {
            $data['status'] = false;
            $data['event'] = 'validation';
            throw new HttpResponseException(response()->json($data, 200));
        } else {
            // For non-AJAX requests, redirect back with input and validation errors
            throw new HttpResponseException(redirect()->back()->withInput()->with('errors', $validator->errors()));
        }
    }
}
