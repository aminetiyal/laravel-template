@extends('template::lte.master')

@section('bodyClasses','sidebar-mini')

@section('body')
    <div class="wrapper">
        <x-lte-navbar></x-lte-navbar>
        <x-lte-sidebar></x-lte-sidebar>

        <div class="content-wrapper">
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>@yield('pageTitle', 'Page')</h1>
                        </div>
                        <div class="col-sm-6">
                            <x-lte-breadcrumb></x-lte-breadcrumb>
                        </div>
                    </div>
                </div>
            </section>
            <section class="content">
                <div class="container-fluid">
                    @yield('content')
                </div>
            </section>
        </div>

        <x-lte-footer></x-lte-footer>
    </div>
@endsection
