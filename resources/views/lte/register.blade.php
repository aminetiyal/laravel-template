@extends('template::lte.master')

@section('bodyClasses','register-page')
@section('body')
    <div class="login-box">
        <div class="login-logo">
            <a href="{{route(config('template.routes.dashboard','home'))}}"><b>{{config('app.name','AdminLte')}}</b></a>
        </div>
        <div class="card">
            <div class="card-body register-card-body">
                <p class="login-box-msg">@lang('template::template.register_a_new_membership')</p>
                <form action="{{route(config('template.routes.register','register'))}}" method="post">
                    @csrf

                    <x-lte-field-input type="text" :placeholder="__('template::template.full_name')"
                                       name="name" icon="fas fa-user" required></x-lte-field-input>
                    <x-lte-field-input type="email" :placeholder="__('template::template.email')" icon="fas fa-envelope" required></x-lte-field-input>
                    <x-lte-field-password :placeholder="__('template::template.password')" icon="fas fa-lock" required></x-lte-field-password>
                    <x-lte-field-password :placeholder="__('template::template.confirmation')" icon="fas fa-lock" required></x-lte-field-password>

                    <div class="row mb-2">
                        <div class="col-12 mx-auto">
                            <button type="submit"
                                    class="btn btn-primary btn-block">@lang('template::template.register')</button>
                        </div>
                    </div>
                </form>
                @if(Route::has(config('templates.routes.login','login')))
                    <p class="mb-1">
                        <a href="{{route(config('template.routes.login','login'))}}">@lang('template::template.i_already_have_a_membership')</a>
                    </p>
                @endif
            </div>
        </div>
    </div>
@endsection

