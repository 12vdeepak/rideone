<html>
<head>
    <title>{{__('message.invoice')}}</title>
    <style>
        body {
            color: #555;
            margin: 0;
            padding: 0;
            font-family: "DejaVu Sans", sans-serif;
        }
        .invoice-container {
            max-width: 800px;
            margin: auto;
            padding: 20px;
            border: 1px solid #eee;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
            background-color: #ffffff;
            font-size:13px;
        }
        .myheader {
           display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 2px solid #ddd;
            padding-bottom: 10px;
            margin-bottom: 20px;
        }
        .mydetails h2 {
            margin: 0;

            font-size: 28px;
            color: #333;
        }
        .mydetails .invoice-details {
            vertical-align: text-top;
            text-align: right;

        }

        .addresspickupdetails  {
            text-align: left;
        }
        .addressdetails  {
            text-align: right;
        }
        .mydetails {
            width: 100%;
            margin-bottom: 20px;
        }
        .details, .items, .totals {
            width: 100%;
            margin-bottom: 0px;
        }
        .details td, .items td, .items th, .totals td {
            padding: 8px;
            border: 1px solid #ddd;
        }
        .details td {
            width: 50%;
        }
        .items th {
            background-color: #f0f0f0;
        }
        .totals {
            text-align: right;
        }
        .totalsfinal {
            text-align: right;
            font-weight: bold;
            font-size: 20px;
        }
        .totals td:last-child {
            font-weight: bold;
        }
        .note {
            margin-top: 20px;
            font-size: 12px;
            color: #777;
        }
        .address {
            text-align: center;
            font-size: 12px;
            color: #555;
        }
    </style>
</head>
<body>
    @php
        $fixed_charge = 0;
    @endphp
    <div class="invoice-container">
        <table class="mydetails">
            <tr>
                <td>
                    <img src="{{ getSingleMediaSettingImage($app_setting,'site_logo') }}" width="80px">
                </td>
                <td class="invoice-details">
                    <strong>{{__('message.invoice_no')}}</strong> {{ optional($ride_detail)->id }}<br>
                    <strong>{{ __('message.title_date',['title' => __('message.invoice')]) }}</strong> {{ $today }}<br>
                     <strong>{{ __('message.title_date',['title' => __('message.booked')]) }}</strong> {{ date('d/m/Y', strtotime($ride_detail->created_at)) }}
                </td>
            </tr>
        </table>
         <table class="mydetails">
            <tr>
                <td class="addresspickupdetails">
                    <strong>{{__('message.pickup_address')}}</strong><br>
                    {{ $ride_detail->start_address }}
                </td>
                <td class="addressdetails">
                    <strong>{{__('message.drop_address')}}</strong><br>
                    {{ $ride_detail->end_address }}
                </td>
            </tr>
        </table>

        <table class="details">
            <thead>
                <tr>
                    <th style="text-align: left">{{ __('message.detail_form_title',['form' => __('message.driver')]) }}</th>
                    <th style="text-align: left">{{ __('message.detail_form_title',['form' => __('message.rider')]) }}</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        {{ __('message.name') }}: {{ $ride_detail->driver->display_name }}<br>
                        {{ __('message.contact') }}: {{ $ride_detail->driver->contact_number }}
                    </td>
                    <td>
                        {{ __('message.name') }}: {{ $ride_detail->rider->display_name }}<br>
                        {{ __('message.contact') }}: {{ $ride_detail->rider->contact_number }}
                    </td>
                </tr>
            </tbody>
        </table>

        <table class="mydetails">
            <tr>
                <td class="addresspickupdetails"><strong>{{__('message.payment_via').''.':'}}</strong> {{ ucfirst(optional($ride_detail->payment)->payment_type) }}</td>
                <td class="addressdetails"><strong>{{__('message.title_date',['title' => __('message.payment')]).''.':'}}</strong> {{ date('d/m/Y', strtotime($ride_detail->payment->created_at)) }}</td>
            </tr>
        </table>

        <table class="items">
            <thead>
                <tr>
                    <th class="addresspickupdetails">{{ __('message.description') }}</th>
                    <th class="addressdetails">{{ __('message.detail_form_title',['form' => '']) }}</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ __('message.total_distance') }}</td>
                    <td class="addressdetails">{{ $ride_detail->distance ?? 0 }} {{ $ride_detail->distance_unit }}</td>
                </tr>
                <tr>
                    <td>{{ __('message.total_duration') }}</td>
                    <td class="addressdetails">{{ $ride_detail->duration }} {{ __('message.min') }}</td>
                </tr>

                @if ($ride_detail->ride_has_bid == 1)
                    <tr>
                        <td>{{ __('message.sub_total') }}</td>
                        <td class="addressdetails">{{ getPriceFormat($ride_detail->approvedBids->bid_amount) }}</td>
                    </tr>
                @else
                    @php
                        $distance_unit = $ride_detail->distance_unit;
                        $extra_charges_values = [];
                        $extra_charges_texts = [];
                        $sub_total = $ride_detail->subtotal;
                        $grand_total = $sub_total;

                        // Calculate extra charges
                        if (is_array($ride_detail->extra_charges)) {
                            foreach ($ride_detail->extra_charges as $item) {
                                if (isset($item['value_type'])) {
                                    $formatted_value = ($item['value_type'] == 'percentage') ? $item['value'] . '%' : getPriceFormat($item['value']);
                                    if ($item['value_type'] == 'percentage') {
                                        $data_value = $sub_total * $item['value'] / 100;
                                        $key = str_replace('_', ' ', ucfirst($item['key']));
                                        $extra_charges_texts[] = $key . ' (' . $formatted_value . ')';
                                        $extra_charges_values[] = getPriceFormat($data_value);
                                        $grand_total += $data_value;
                                    } else {
                                        $key = str_replace('_', ' ', ucfirst($item['key']));
                                        $extra_charges_texts[] = $key . ' (' . $formatted_value . ')';
                                        $extra_charges_values[] = $formatted_value;
                                        $grand_total += $item['value'];
                                    }
                                }
                            }
                        }

                        // Add tips if available
                        //if (isset($ride_detail->tips)) {
                        //    $grand_total += $ride_detail->tips;
                        //}
                    @endphp

                    @if($ride_detail->minimum_fare == ($ride_detail->subtotal - $ride_detail->extra_charges_amount))
                        <tr>
                            <td>{{ __('message.minimum_fare') }}</td>
                            <td class="addressdetails">{{ getPriceFormat($ride_detail->minimum_fare) }}</td>
                        </tr>
                    @else
                        <tr>
                            <td>{{ __('message.base_fare') }}</td>
                            <td class="addressdetails">{{ getPriceFormat($ride_detail->base_fare) }}</td>
                        </tr>
                        <tr>
                            <td>{{ __('message.distance') }}</td>
                            <td class="addressdetails">{{ getPriceFormat($ride_detail->per_distance_charge) }}</td>
                        </tr>
                        <tr>
                            <td>{{ __('message.duration') }}</td>
                            <td class="addressdetails">{{ getPriceFormat($ride_detail->per_minute_drive_charge) }}</td>
                        </tr>
                        <tr>
                            <td>{{ __('message.wait_time') }}</td>
                            <td class="addressdetails">{{ getPriceFormat($ride_detail->per_minute_waiting_charge) }}</td>
                        </tr>
                    @endif
            
                    <tr>
                        <td>{{ __('message.extra_charges') }}</td>
                        <td class="addressdetails">
                            @if(count($ride_detail->extra_charges) > 0)
                                @php
                                    $extra_charges = collect($ride_detail->extra_charges)->pluck('value')->sum();
                                @endphp
                                {{ $extra_charges }}
                            @else
                            {{ getPriceFormat($ride_detail->extra_charges_amount) }}
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <td>{{ __('message.coupon_discount') }}</td>
                        <td class="addressdetails">{{ getPriceFormat($ride_detail->coupon_discount) }}</td>
                    </tr>
                    <tr>
                        <td>{{ __('message.fixed_charges') }}</td>
                        <td class="addressdetails">
                            {{ getPriceFormat($fixed_charge) }}
                        </td>
                    </tr>
                @endif
            </tbody>
        </table>
        
        <table class="totals">
            @if ($ride_detail->ride_has_bid == 1)
                <tr class="totalsfinal">
                    <td>{{ __('message.total') }}</td>
                    <td>
                        {{ getPriceFormat($ride_detail->approvedBids->bid_amount) }}</td>
                    </td>
                </tr>
            @else
                <tr>
                    <td>{{ __('message.sub_total') }}</td>
                    <td class="addressdetails">
                        @php
                            $subTotal  = $sub_total + ($fixed_charge ? $fixed_charge : 0)
                        @endphp
                        {{ getPriceFormat($subTotal) }}
                </tr>
                @if($ride_detail->extra_charges)
                    @foreach ($extra_charges_texts as $index => $text)
                        <tr>
                            <td>{{ $text }}</td>
                            <td class="addressdetails">{{ $extra_charges_values[$index] }}</td>
                        </tr>
                    @endforeach
                @endif
                <tr class="totalsfinal">
                    <td>{{ __('message.total') }}</td>
                    <td>
                        @php
                            $grandTotal  = $grand_total + ($fixed_charge ? $fixed_charge : 0)
                        @endphp
                        {{ getPriceFormat($grandTotal) }}</td>
                    </td>
                </tr>
            @endif
        </table>        
        <p class="note">{{ __('message.note_pdf_report') }}</p>
    </div>
</body>
</html>
