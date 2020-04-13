<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <title>@yield('title',config('template.brand.name',config('app.name','AdminLte')))</title>
    <x-lte-styles></x-lte-styles>
</head>
<body class="hold-transition @yield('bodyClasses')">

@yield('body')

<x-lte-scripts></x-lte-scripts>

</body>
</html>
