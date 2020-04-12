@extends('template::lte.main')

@section('pageTitle', __('template::template.profile'))

@section('content')
    <div class="row">
        <div class="col-12 col-md-6">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">@lang('template::template.profile')</h3>
                </div>
                <div class="card-body">
                    <form action="{{route(config('template.routes.profile.update','profile.update'))}}" method="post">
                        @csrf
                        @method('put')
                        <x-lte-field-input type="text" :label="__('template::template.full_name')" name="name"
                                           :value="$user->name" required></x-lte-field-input>
                        <x-lte-field-input type="email" :label="__('template::template.email')" name="email"
                                           :value="$user->email" required></x-lte-field-input>
                        <button type="submit" class="btn btn-primary float-right">@lang('template::template.update')</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-6">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">@lang('template::template.password')</h3>
                </div>
                <div class="card-body">
                    <form action="{{route(config('template.routes.profile.updatePassword','profile.updatePassword'))}}" method="post">
                        @csrf
                        @method('put')
                        <x-lte-field-password :label="__('template::template.old_password')" name="old_password" icon="fas fa-lock"
                                              required></x-lte-field-password>
                        <x-lte-field-password :label="__('template::template.new_password')" name="password" icon="fas fa-lock"
                                              required></x-lte-field-password>
                        <x-lte-field-password :label="__('template::template.confirmation')" name="password_confirmation" icon="fas fa-lock"
                                              required></x-lte-field-password>
                        <button type="submit" class="btn btn-primary float-right">@lang('template::template.update')</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
