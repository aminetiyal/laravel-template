@if(is_null($label))

    <div class="input-group mb-3 {{ $class }}">
        <input type="password" name="{{ $name }}"
               class="form-control @error($name) is-invalid @enderror" placeholder="{{ $placeholder }}" @if($required) required @endif>
        @isset($icon)
            <div class="input-group-append">
                <div class="input-group-text"><i class="{{ $icon }} fa-fw"></i></div>
            </div>
        @endisset
        @error($name) <span class="error invalid-feedback">{{$message}}</span> @enderror
    </div>

@else

    <div class="form-group {{ $class }}">
        <label>{{ $label }}</label>
        <input type="password" name="{{ $name }}" class="form-control @error($name) is-invalid @enderror"
               placeholder="{{ $placeholder }}" @if($required) required @endif>
        @error($name) <span class="error invalid-feedback">{{$message}}</span> @enderror
    </div>

@endif
