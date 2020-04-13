@extends('template::lte.master')

@section('bodyClasses','login-page')
@section('body')
    <div class="login-box">
        <div class="login-logo">
            <a href="{{route(config('template.routes.dashboard','home'))}}"><b>{{config('app.name','AdminLte')}}</b></a>
        </div>
        <div class="card">
            <div class="card-body login-card-body">
                <form action="{{route(config('template.routes.password_confirm','password.confirm'))}}" method="post">
                    @csrf

                    <x-lte-field-password :placeholder="__('template::template.password')" name="email"
                                       icon="fas fa-lock" required></x-lte-field-password>

                    <div class="row mb-2">
                        <div class="col-12">
                            <button type="submit"
                                    class="btn btn-primary btn-block">@lang('template::template.confirm')</button>
                        </div>
                    </div>
                    @if(Route::has(config('templates.routes.password_request','password.request')))
                        <p class="mb-1">
                            <a href="{{route(config('template.routes.password_request','password.request'))}}">@lang('template::template.i_forgot_my_password')</a>
                        </p>
                    @endif
                </form>
            </div>
        </div>
    </div>
@endsection
