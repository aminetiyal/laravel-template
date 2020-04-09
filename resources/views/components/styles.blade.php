@foreach($styles as $style)
    <link rel="stylesheet" href="{{$style}}">
@endforeach

@foreach($fonts as $font)
    <link href="{{$font}}" rel="stylesheet">
@endforeach

@stack('styles')
