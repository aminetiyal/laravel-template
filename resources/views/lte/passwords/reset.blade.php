@extends('template::lte.master')

@section('bodyClasses','login-page')
@section('body')
    <div class="login-box">
        <div class="login-logo">
            <a href="{{route(config('template.routes.dashboard','home'))}}"><b>{{config('app.name','AdminLte')}}</b></a>
        </div>
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">@lang('template::template.reset_password')</p>
                <form action="{{route(config('template.routes.password_update','password.update'))}}" method="post">
                    {{ csrf_field() }}

                    <x-lte-field-password :placeholder="__('template::template.password')"
                                       icon="fas fa-lock" required></x-lte-field-password>

                    <x-lte-field-password :placeholder="__('template::template.confirmation')"
                                       icon="fas fa-lock" required></x-lte-field-password>

                    <div class="row mb-2">
                        <div class="col-12">
                            <button type="submit"
                                    class="btn btn-primary btn-block">@lang('template::template.reset_password')</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
