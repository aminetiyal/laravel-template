<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{config('template.brand.name',config('app.name','AdminLte'))}}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <x-lte-styles></x-lte-styles>
</head>
<body class="hold-transition @yield('bodyClasses')">

@yield('body')

<x-lte-scripts></x-lte-scripts>

</body>
</html>
