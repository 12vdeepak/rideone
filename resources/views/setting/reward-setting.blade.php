{{ Form::open(['method' => 'POST','route' => ['rewardSettingsUpdate'],'data-toggle'=>'validator']) }}
{{ Form::hidden('page', $page, ['class' => 'form-control'] ) }}
    
    <div class="col-md-12 mt-20">
        <div class="row">
        @foreach($reward_setting as $key => $value)
            <div class="col-md-6 form-group">
                
                    {{ Form::label($key, __('message.'.$key).' <span data-toggle="tooltip" data-placement="right" title="'.__('message.wallet_activation_charge_info').'"><i class="fas fa-question-circle"></i></span>', ['class' => 'form-control-label'], false) }}
                    {{ Form::number($key, $value ?? null, ['placeholder' => __('message.'.$key), 'min' => 0, 'step' => 'any', 'class' => 'form-control']) }}
             
            </div>
        @endforeach

        </div>
    </div>
{{ Form::submit(__('message.save'), ['class'=>"btn btn-md btn-primary float-md-right"]) }}
{{ Form::close() }}
