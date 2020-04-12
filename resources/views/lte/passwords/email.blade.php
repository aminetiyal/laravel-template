@extends('template::lte.master')

@section('bodyClasses','login-page')
@section('body')
    <div class="login-box">
        <div class="login-logo">
            <a href="{{route(config('template.routes.dashboard','home'))}}"><b>{{config('app.name','AdminLte')}}</b></a>
        </div>
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">@lang('template::template.password_reset_message')</p>
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                <form action="{{route(config('template.routes.password_email','password.email'))}}" method="post">
                    {{ csrf_field() }}

                    <x-lte-field-input type="email" :placeholder="__('template::template.email')" name="email"
                                       icon="fas fa-envelope" required></x-lte-field-input>

                    <div class="row mb-2">
                        <div class="col-12">
                            <button type="submit"
                                    class="btn btn-primary btn-block">@lang('template::template.send_password_reset_link')</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
