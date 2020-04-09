<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.0.3/js/adminlte.min.js"></script>

@foreach($scripts as $script)
    <script src="{{$script}}"></script>
@endforeach

@if (file_exists(public_path('vendor/laravel-template/lte/js/lte.js')))
    <script src="{{asset('vendor/laravel-template/lte/js/lte.js')}}"></script>
@endif

@stack('scripts')
