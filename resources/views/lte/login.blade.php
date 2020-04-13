@extends('template::lte.master')

@section('bodyClasses','login-page')
@section('body')
    <div class="login-box">
        <div class="login-logo">
            <a href="{{route(config('template.routes.dashboard','home'))}}"><b>{{config('app.name','AdminLte')}}</b></a>
        </div>
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">@lang('template::template.login_message')</p>
                <form action="{{route(config('template.routes.login','login'))}}" method="post">
                    @csrf

                    <x-lte-field-input type="email" :placeholder="__('template::template.email')" name="email"
                                       icon="fas fa-envelope" required></x-lte-field-input>
                    <x-lte-field-password :placeholder="__('template::template.password')" name="password" icon="fas fa-lock"
                                          required></x-lte-field-password>

                    <div class="row mb-2">
                        <div class="col-12 mx-auto">
                            <button type="submit"
                                    class="btn btn-primary btn-block">@lang('template::template.sign_in')</button>
                        </div>
                    </div>
                </form>
                @if(Route::has(config('templates.routes.password_request','password.request')))
                    <p class="mb-1">
                        <a href="{{route(config('template.routes.password_request','password.request'))}}">@lang('template::template.i_forgot_my_password')</a>
                    </p>
                @endif
                @if(Route::has(config('template.routes.register','register')))
                    <p class="mb-0">
                        <a href="{{route(config('template.routes.register','register'))}}"
                           class="text-center">@lang('template::template.register_a_new_membership')</a>
                    </p>
                @endif
            </div>
        </div>
    </div>
@endsection
