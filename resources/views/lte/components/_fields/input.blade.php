<div class="input-group mb-3 {{ $class }}">
    <input type="{{ $type }}" name="{{ $name }}"
           class="form-control @error($name) is-invalid @enderror" placeholder="{{ $label }}" @if($required) required @endif
           value="{{$value}}" @if($readonly) readonly @endif>
    @isset($icon)
        <div class="input-group-append">
            <div class="input-group-text"><i class="{{ $icon }} fa-fw"></i></div>
        </div>
    @endisset
    @error($name) <span class="error invalid-feedback">{{$message}}</span> @enderror
</div>