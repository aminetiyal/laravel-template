
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 3 | Log in</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <x-lte-styles></x-lte-styles>
</head>
<body class="hold-transition login-page">
<div class="login-box">
    <div class="login-logo">
        <a href="{{url('/')}}"><b>{{config('app.name','AdminLte')}}</b></a>
    </div>
    <!-- /.login-logo -->
    <div class="card">
        <div class="card-body login-card-body">
            <p class="login-box-msg">@lang('template::template.login_message')</p>

            <form action="{{url('/login')}}" method="post">
                {{ csrf_field() }}

                <x-lte-field-input type="email" :label="__('template::template.email')" name="email" icon="fas fa-envelope" required></x-lte-field-input>
                <x-lte-field-password :label="__('template::template.Password')" name="password" icon="fas fa-lock" required></x-lte-field-password>

                <div class="row">
                    <div class="col-8">
                        <div class="icheck-primary">
                            <input type="checkbox" id="remember">
                            <label for="remember">
                                @lang('template::template.remember_me')
                            </label>
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-4">
                        <button type="submit" class="btn btn-primary btn-block">@lang('template::template.sign_in')</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>

            <p class="mb-1">
                <a href="forgot-password.html">@lang('template::template.i_forgot_my_password')</a>
            </p>
            <p class="mb-0">
                <a href="register.html" class="text-center">@lang('template::template.register_a_new_membership')</a>
            </p>
        </div>
        <!-- /.login-card-body -->
    </div>
</div>
<!-- /.login-box -->

<x-lte-scripts></x-lte-scripts>

</body>
</html>
