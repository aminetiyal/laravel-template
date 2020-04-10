@extends('template::lte.master')

@section('bodyClasses','login-page')
@section('body')
    <div class="login-box">
        <div class="login-logo">
            <a href="{{route(config('template.routes.dashboard','home'))}}"><b>{{config('app.name','AdminLte')}}</b></a>
        </div>
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">@lang('template::template.verify_message') </p>
                @if (session('resent'))
                    <div class="alert alert-success" role="alert">
                        @lang('template::template.verify_email_sent')
                    </div>
                @endif

                @lang('template::template.verify_check_your_email')
                @lang('template::template.verify_if_not_recieved') ,

                <form class="d-inline" method="POST"
                      action="{{route(config('template.routes.verification_resend','verification.resend'))}}">
                    @csrf
                    <button type="submit"
                            class="btn btn-link p-0 m-0 align-baseline">@lang('template::template.verify_request_another') </button>
                    .
                </form>
            </div>
        </div>
    </div>
@endsection
