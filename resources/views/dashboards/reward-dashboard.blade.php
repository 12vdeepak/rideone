<x-master-layout>
    <div class="container-fluid content-body-block">
        <div class="row">
            <div class="col-lg-12 mb-3">
                <div class="d-flex align-items-center justify-content-between welcome-content">
                    <div class="navbar-breadcrumb">
                        <!-- <h4 class="mb-0 font-weight-700">Welcome To Dashboard</h4> -->
                    </div>
                    <div class="">
                        
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="card card-block card-stretch card-height border">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="mm-cart-image text-primary">
                                        <svg class="svg-icon svg-danger" width="40" height="40" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                            <circle cx="9" cy="7" r="4" />
                                            <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                                            <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                                            <path d="M21 21v-2a4 4 0 0 0 -3 -3.85" />
                                        </svg>
                                    </div>
                                    <div class="mm-cart-text">
                                        <h5 class="font-weight-700">{{ $data['dashboard']['total_activation'] }}</h5>
                                        <p class="mb-0">{{ __('message.total_activation') }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="card card-block card-stretch card-height border">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="mm-cart-image text-primary">
                                        <svg class="svg-icon svg-danger" width="40" height="40" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                            <circle cx="9" cy="7" r="4" />
                                            <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                                            <line x1="19" y1="7" x2="19" y2="10" />
                                            <line x1="19" y1="14" x2="19" y2="14.01" />
                                        </svg>
                                    </div>
                                    <div class="mm-cart-text">
                                        <h5 class="font-weight-700">{{ $data['dashboard']['pending_activation'] }}</h5>
                                        <p class="mb-0">{{ __('message.pending_activation') }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="card card-block card-stretch card-height border">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="mm-cart-image text-primary">
                                        <svg class="svg-icon svg-danger" width="40" height="40" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                            <path d="M17 8v-3a1 1 0 0 0 -1 -1h-10a2 2 0 0 0 0 4h12a1 1 0 0 1 1 1v3m0 4v3a1 1 0 0 1 -1 1h-12a2 2 0 0 1 -2 -2v-12" />
                                            <path d="M20 12v4h-4a2 2 0 0 1 0 -4h4" />
                                        </svg>
                                    </div>
                                    <div class="mm-cart-text">
                                        <h5 class="font-weight-700">{{ getPriceFormat($data['dashboard']['today_activation']) }}</h5>
                                        <p class="mb-0">{{ __('message.today_activation') }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="card card-block card-stretch card-height border">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="mm-cart-image text-primary">
                                        <svg class="svg-icon svg-danger" width="40" height="40" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                            <path d="M17 8v-3a1 1 0 0 0 -1 -1h-10a2 2 0 0 0 0 4h12a1 1 0 0 1 1 1v3m0 4v3a1 1 0 0 1 -1 1h-12a2 2 0 0 1 -2 -2v-12" />
                                            <path d="M20 12v4h-4a2 2 0 0 1 0 -4h4" />
                                        </svg>
                                    </div>
                                    <div class="mm-cart-text">
                                        <h5 class="font-weight-700">{{ getPriceFormat($data['dashboard']['monthly_activation']) }}</h5>
                                        <p class="mb-0">{{ __('message.monthly_activation') }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-12">
                <div class="card card-block card-stretch card-height">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">{{ __('message.recent_request') }}</h4>
                        </div>
                        <div class="card-header-toolbar d-flex align-items-center">
                        </div>
                    </div>
                    <div class="card-body align-items-center">
                        <div class="table-responsive">
                            <table class="table mb-1 table-bordered text-center">
                                <thead>
                                    <tr>
                                        <th scope='col'>#</th>
                                        <th scope='col'>{{ __('message.user') }}</th>
                                        <th scope='col'>{{ __('message.requested_date') }}</th>
                                        <th scope='col'>{{ __('message.amount') }}</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @if( count($recent_activation) > 0 )
                                        @foreach ($recent_activation as $riderequest)
                                        @php
                                        $userName = App\Models\User::where('id',$riderequest->user_id)->first();
                                        @endphp
                                            <tr>
                                                <td>{{ $riderequest->user_id }}</td>
                                                
                                                <td>{{ $userName->first_name ?? '-' }}</td>
                                                <td>{{ dateAgoFormate($riderequest->activated_at, true) }}</td>
                                                <td>{{ $riderequest->amount ?? '-' }}</td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <tr>
                                            <td colspan="5">{{ __('message.no_record_found') }}</td>
                                        </tr>
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page end  -->
    </div>
</x-master-layout>
