<x-master-layout :assets="$assets ?? []">
    <div class="content-body-block">
        <?php $id = $id ?? null; ?>
        @if (isset($id))
            {!! Form::model($data, ['route' => ['dispatch.update', $id], 'method' => 'patch', 'data-toggle' => 'validator']) !!}
        @else
            {!! Form::open(['route' => ['dispatch.store'], 'method' => 'post', 'data-toggle' => 'validator']) !!}
        @endif
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">{{ $pageTitle }}</h4>
                        </div>

                        <?php echo $button; ?>
                    </div>

                    <div class="card-body">
                        <div class="new-user-info">
                            <div class="row">

                                <div class="form-group col-md-4">
                                    {{ Form::label('rider_id', __('message.rider') . ' <span class="text-danger">*</span>', ['class' => 'form-control-label'], false) }}
                                    {{ Form::select(
                                        'rider_id',
                                        isset($id) ? [optional($data->rider)->id => optional($data->rider)->display_name] : [],
                                        old('rider_id'),
                                        [
                                            'data-ajax--url' => route('ajax-list', ['type' => 'rider']),
                                            'class' => 'form-control select2js',
                                            'data-placeholder' => __('message.select_field', ['name' => __('message.rider')]),
                                            'required',
                                        ],
                                    ) }}
                                </div>


                                <div class="form-group col-md-4">
                                    {{ Form::label('start_address', __('message.start_address') . ' <span class="text-danger">*</span>', ['class' => 'form-control-label'], false) }}
                                    {{ Form::text('start_address', old('start_address'), ['placeholder' => __('message.start_address'), 'class' => 'form-control', 'id' => 'start_address', 'required']) }}
                                </div>

                                <div class="form-group col-md-4">
                                    {{ Form::label('end_address', __('message.end_address') . ' <span class="text-danger">*</span>', ['class' => 'form-control-label'], false) }}
                                    {{ Form::text('end_address', old('end_address'), ['placeholder' => __('message.end_address'), 'class' => 'form-control', 'id' => 'end_address', 'required']) }}
                                </div>

                                {{ Form::hidden('start_latitude', null, ['id' => 'start_latitude']) }}
                                {{ Form::hidden('start_longitude', null, ['id' => 'start_longitude']) }}
                                {{ Form::hidden('end_latitude', null, ['id' => 'end_latitude']) }}
                                {{ Form::hidden('end_longitude', null, ['id' => 'end_longitude']) }}


                                <div class="form-group col-md-4">
                                    {{ Form::label('service_id', __('message.service') . ' <span class="text-danger">*</span>', ['class' => 'form-control-label'], false) }}
                                    <a class="float-right serviceList" href="javascript:void(0)"><i
                                            class="ri-refresh-line"></i></a>
                                    {{ Form::select(
                                        'service_id',
                                        [], // Leave this empty for dynamic population
                                        old('service_id'),
                                        [
                                            'data-ajax--url' => route('ajax-list', ['type' => 'service_for_ride']), // Correct AJAX route for services
                                            'class' => 'select2js form-group service',
                                            'required',
                                            'data-placeholder' => __('message.select_name', ['select' => __('message.service')]),
                                        ],
                                    ) }}
                                </div>


                                <div class="form-group col-md-4">
                                    {{ Form::label('driver_id', __('message.driver'), ['class' => 'form-control-label'], false) }}
                                    <a class="float-right driverList" href="#"><i class="ri-refresh-line"></i></a>
                                    {{ Form::select(
                                        'driver_id',
                                        [], // Leave this empty for dynamic population
                                        old('driver_id'),
                                        [
                                            'data-ajax--url' => route('ajax-list', ['type' => 'driver']), // Correct AJAX route for drivers
                                            'class' => 'select2js form-group driver',
                                            'required',
                                            'data-placeholder' => __('message.select_name', ['select' => __('message.driver')]),
                                        ],
                                    ) }}
                                </div>

                            </div>

                            <hr>
                            {{ Form::submit(__('message.book_now'), ['class' => 'btn btn-md btn-primary float-right', 'data-form' => 'ajax']) }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {!! Form::close() !!}
    </div>
    @section('bottom_script')
        {{--  <script
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDXyZtLEccN-pzon49eQgd1EJT9XJQLBZE&libraries=places&callback=initialize"
            async defer></script>  --}}

        {{--  <script>
            var googleMapsApiKey = @json(env('GOOGLE_MAP_KEY'));

            // Now you can use the googleMapsApiKey variable in your script
            function initialize() {
                var start_address_input = document.getElementById('start_address');
                var start_address = new google.maps.places.Autocomplete(start_address_input);

                start_address.addListener('place_changed', function() {
                    var place = start_address.getPlace();
                    if (!place.geometry) {
                        alert('No details available for the input address');
                        return;
                    }
                    // Do something with place.geometry.location (lat, lng)
                    var lat = place.geometry.location.lat();
                    var lng = place.geometry.location.lng();
                    console.log('Latitude: ' + lat + ', Longitude: ' + lng);
                });

                var end_address_input = document.getElementById('end_address');
                var end_address = new google.maps.places.Autocomplete(end_address_input);

                end_address.addListener('place_changed', function() {
                    var place = end_address.getPlace();
                    if (!place.geometry) {
                        alert('No details available for the input address');
                        return;
                    }
                    // Do something with place.geometry.location (lat, lng)
                    var lat = place.geometry.location.lat();
                    var lng = place.geometry.location.lng();
                    console.log('Latitude: ' + lat + ', Longitude: ' + lng);
                });
            }

            // Load Google Maps API dynamically with the API key from the .env file
            function loadGoogleMapsAPI() {
                var script = document.createElement('script');
                script.src = "https://maps.googleapis.com/maps/api/js?key=" + googleMapsApiKey +
                    "&libraries=places&callback=initialize";
                script.async = true;
                script.defer = true;
                document.head.appendChild(script);
            }

            // Call the function to load the Google Maps API
            loadGoogleMapsAPI();
        </script>  --}}


        {{--  <script>
            $(function() {

                $(document).ready(function() {
                    $('#start_address').val('');
                    $('#end_address').val('');
                });

                if (window.google || window.google.maps) {
                    initialize();
                }

                function initialize() {
                    var start_address_input = document.getElementById('start_address');
                    var start_address = new google.maps.places.Autocomplete(start_address_input);

                    start_address.addListener('place_changed', function() {
                        var place = start_address.getPlace();
                        if (!place.geometry) {
                            alert(
                                "{{ __('message.address_autocomplete_error', ['address' => __('message.start_address')]) }}"
                            );
                            $('#start_address').focus();
                            return;
                        }
                        start_latitude = place.geometry['location'].lat();
                        start_longitude = place.geometry['location'].lng();
                        $('#start_latitude').val(start_latitude);
                        $('#start_longitude').val(start_longitude);
                        $('#start_address').val(place.formatted_address);
                        serviceList(start_latitude, start_longitude);
                    });

                    var end_address_input = document.getElementById('end_address');
                    var end_address = new google.maps.places.Autocomplete(end_address_input);

                    end_address.addListener('place_changed', function() {
                        var endplace = end_address.getPlace();
                        if (!endplace.geometry) {
                            alert(
                                "{{ __('message.address_autocomplete_error', ['address' => __('message.end_address')]) }}"
                            );
                            $('#end_address').focus();
                            return;
                        }
                        end_latitude = endplace.geometry['location'].lat();
                        end_longitude = endplace.geometry['location'].lng();
                        $('#end_latitude').val(end_latitude);
                        $('#end_longitude').val(end_longitude);
                        $('#end_address').val(endplace.formatted_address);
                    });
                }

                $(document).on('change', '.service', function() {
                    var service_id = $(this).val();
                    $('.driver').empty();
                    if (service_id != null) {
                        driverList(service_id);
                    }
                })
            });

            $('.serviceList').on('click', function() {
                start_latitude = $('#start_latitude').val();
                start_longitude = $('#start_longitude').val();

                if (start_latitude != '' && start_longitude != '') {
                    serviceList(start_latitude, start_longitude);
                } else {
                    $('.service').empty();
                }
            });

            function serviceList(latitude, longitude) {
                var route = "{{ route('ajax-list', ['type' => 'service_for_ride']) }}&latitude=" + latitude + "&longitude=" +
                    longitude;
                route = route.replaceAll('amp;', '');

                $.ajax({
                    url: route,
                    success: function(result) {
                        $('.service').select2({
                            width: '100%',
                            placeholder: "{{ __('message.select_name', ['select' => __('message.service')]) }}",
                            data: result.results
                        });

                        $(".service").val(latitude).trigger('change');
                    }
                })
            }

            $('.driverList').on('click', function() {
                service_id = $('#service_id').val();
                if (service_id != null) {
                    driverList(service_id);
                } else {
                    $('.driver').empty();
                }
            });

            function driverList(service_id) {
                latitude = $('#start_latitude').val();
                longitude = $('#start_longitude').val();

                var route = "{{ route('ajax-list', ['type' => 'driver_for_ride']) }}&service_id=" + service_id + "&latitude=" +
                    latitude + "&longitude=" + longitude;
                route = route.replaceAll('amp;', '');

                $.ajax({
                    url: route,
                    success: function(result) {
                        $('.driver').select2({
                            width: '100%',
                            placeholder: "{{ __('message.select_name', ['select' => __('message.driver')]) }}",
                            data: result.results
                        });

                        $(".driver").val(service_id).trigger('change');
                    }
                })
            }







            $('.select2js').select2({
                ajax: {
                    url: function(params) {
                        return "{{ route('ajax-list', ['type' => 'service_for_ride']) }}",
                    },
                    dataType: 'json',
                    delay: 250,
                    processResults: function(data) {
                        return {
                            results: data.results
                        };
                    },
                    cache: true
                },
                minimumInputLength: 1, // Optionally define the minimum input length before making an AJAX request
                placeholder: '{{ __('message.select_name', ['select' => __('message.service')]) }}',
                theme: 'bootstrap4',
            });



            $('.select2js').select2({
                ajax: {
                    url: function(params) {
                        return "{{ route('ajax-list', ['type' => 'driver']) }}"; // Ensure the correct endpoint is used
                    },
                    dataType: 'json',
                    delay: 250, // Optional: delay to avoid making a request too quickly
                    processResults: function(data) {
                        return {
                            results: data.results // Expecting the `results` in the JSON response
                        };
                    },
                    cache: true
                },
                minimumInputLength: 1, // Optional: minimum characters before an AJAX request is triggered
                placeholder: '{{ __('message.select_name', ['select' => __('message.driver')]) }}',
                theme: 'bootstrap4',
            });
        </script>  --}}

        {{--  <script>
            function serviceList(latitude, longitude) {
                var route = "{{ route('ajax-list', ['type' => 'service_for_ride']) }}&latitude=" + latitude +
                    "&longitude=" + longitude;
                route = route.replaceAll('amp;', '');

                $.ajax({
                    url: route,
                    success: function(result) {
                        $('.service').select2({
                            width: '100%',
                            placeholder: "{{ __('message.select_name', ['select' => __('message.service')]) }}",
                            data: result.results
                        });
                        $(".service").val(latitude).trigger('change');
                    }
                });
            }

            var googleMapsApiKey = @json(env('GOOGLE_MAP_KEY'));



            // Initialize Google Maps API and Autocomplete for addresses
            function initialize() {
                var start_address_input = document.getElementById('start_address');
                var start_address = new google.maps.places.Autocomplete(start_address_input);

                start_address.addListener('place_changed', function() {
                    var place = start_address.getPlace();
                    if (!place.geometry) {
                        alert('No details available for the input address');
                        return;
                    }
                    // Populate latitude, longitude, and address fields
                    var lat = place.geometry.location.lat();
                    var lng = place.geometry.location.lng();
                    $('#start_latitude').val(lat);
                    $('#start_longitude').val(lng);
                    $('#start_address').val(place.formatted_address);

                    // Remove the "required" attribute once the address is filled
                    $('#start_address').prop('required', false);

                    // Disable the fields so the user doesn't need to enter it again
                    $('#start_address').prop('disabled', true);
                    $('#start_latitude').prop('disabled', true);
                    $('#start_longitude').prop('disabled', true);

                    // Trigger service list update based on selected address
                    serviceList(lat, lng);
                });

                var end_address_input = document.getElementById('end_address');
                var end_address = new google.maps.places.Autocomplete(end_address_input);

                end_address.addListener('place_changed', function() {
                    var place = end_address.getPlace();
                    if (!place.geometry) {
                        alert('No details available for the input address');
                        return;
                    }
                    // Populate latitude, longitude, and address fields
                    var lat = place.geometry.location.lat();
                    var lng = place.geometry.location.lng();
                    $('#end_latitude').val(lat);
                    $('#end_longitude').val(lng);
                    $('#end_address').val(place.formatted_address);

                    // Remove the "required" attribute once the address is filled
                    $('#end_address').prop('required', false);

                    // Disable the fields so the user doesn't need to enter it again
                    $('#end_address').prop('disabled', true);
                    $('#end_latitude').prop('disabled', true);
                    $('#end_longitude').prop('disabled', true);
                });
            }

            // Load Google Maps API dynamically with the API key from the .env file
            function loadGoogleMapsAPI() {
                var script = document.createElement('script');
                script.src = "https://maps.googleapis.com/maps/api/js?key=" + googleMapsApiKey +
                    "&libraries=places&callback=initialize";
                script.async = true;
                script.defer = true;
                document.head.appendChild(script);
            }

            // Call the function to load the Google Maps API
            loadGoogleMapsAPI();

            // Handling service and driver selection
            $(function() {
                $(document).ready(function() {
                    // Initially clear address fields and remove "required" from address
                    $('#start_address').val('');
                    $('#end_address').val('');
                    $('#start_address').prop('required', true); // Re-apply required to start_address
                    $('#end_address').prop('required', true); // Re-apply required to end_address
                });

                // Update service list based on the selected start address
                $(document).on('change', '.service', function() {
                    var service_id = $(this).val();
                    $('.driver').empty();
                    if (service_id != null) {
                        driverList(service_id);
                    }
                });

                // Trigger service list when the button is clicked
                $('.serviceList').on('click', function() {
                    var start_latitude = $('#start_latitude').val();
                    var start_longitude = $('#start_longitude').val();

                    if (start_latitude != '' && start_longitude != '') {
                        serviceList(start_latitude, start_longitude);
                    } else {
                        $('.service').empty();
                    }
                });

                // Fetch and display service list

                // Trigger driver list when the button is clicked
                $('.driverList').on('click', function() {
                    var service_id = $('#service_id').val();
                    if (service_id != null) {
                        driverList(service_id);
                    } else {
                        $('.driver').empty();
                    }
                });

                // Fetch and display driver list
                function driverList(service_id) {
                    var latitude = $('#start_latitude').val();
                    var longitude = $('#start_longitude').val();

                    var route = "{{ route('ajax-list', ['type' => 'driver_for_ride']) }}&service_id=" + service_id +
                        "&latitude=" + latitude + "&longitude=" + longitude;
                    route = route.replaceAll('amp;', '');

                    $.ajax({
                        url: route,
                        success: function(result) {
                            $('.driver').select2({
                                width: '100%',
                                placeholder: "{{ __('message.select_name', ['select' => __('message.driver')]) }}",
                                data: result.results
                            });
                            $(".driver").val(service_id).trigger('change');
                        }
                    });
                }
            });
        </script>  --}}

        <script>
            var googleMapsApiKey = @json(env('GOOGLE_MAP_KEY'));

            function initialize() {
                var start_address_input = document.getElementById('start_address');
                var start_address = new google.maps.places.Autocomplete(start_address_input);

                start_address.addListener('place_changed', function() {
                    var place = start_address.getPlace();
                    if (!place.geometry) {
                        alert('No details available for the input address');
                        return;
                    }

                    // Capture latitude and longitude from the place
                    var lat = place.geometry.location.lat();
                    var lng = place.geometry.location.lng();

                    // Set the latitude and longitude input fields
                    $('#start_latitude').val(lat);
                    $('#start_longitude').val(lng);
                    $('#start_address').val(place.formatted_address);

                    console.log('Start Address:', place.formatted_address);
                    console.log('Start Latitude:', lat, 'Start Longitude:', lng);

                    // Remove required attribute from start address once selected
                    $('#start_address').prop('required', false);

                    // Disable the fields after the address is selected
                    $('#start_address').prop('disabled', true);
                    $('#start_latitude').prop('disabled', true);
                    $('#start_longitude').prop('disabled', true);

                    // Trigger the service list based on latitude and longitude
                    serviceList(lat, lng);
                });

                var end_address_input = document.getElementById('end_address');
                var end_address = new google.maps.places.Autocomplete(end_address_input);

                end_address.addListener('place_changed', function() {
                    var place = end_address.getPlace();
                    if (!place.geometry) {
                        alert('No details available for the input address');
                        return;
                    }

                    // Capture latitude and longitude from the place
                    var lat = place.geometry.location.lat();
                    var lng = place.geometry.location.lng();

                    // Set the latitude and longitude input fields
                    $('#end_latitude').val(lat);
                    $('#end_longitude').val(lng);
                    $('#end_address').val(place.formatted_address);

                    console.log('End Address:', place.formatted_address);
                    console.log('End Latitude:', lat, 'End Longitude:', lng);

                    // Remove required attribute from end address once selected
                    $('#end_address').prop('required', false);

                    // Disable the fields after the address is selected
                    $('#end_address').prop('disabled', true);
                    $('#end_latitude').prop('disabled', true);
                    $('#end_longitude').prop('disabled', true);
                });
            }

            // Dynamically load the Google Maps API with the API key from your .env file
            function loadGoogleMapsAPI() {
                var script = document.createElement('script');
                script.src = "https://maps.googleapis.com/maps/api/js?key=" + googleMapsApiKey +
                    "&libraries=places&callback=initialize";
                script.async = true;
                script.defer = true;
                document.head.appendChild(script);
            }

            // Load the Google Maps API when the document is ready
            loadGoogleMapsAPI();
        </script>
    @endsection
</x-master-layout>
