@if(is_null($label))

    <div class="input-group mb-3 {{ $class }}">
        <textarea name="{{ $name }}" cols="{{ $cols }}" rows="{{ $rows }}"
                  class="form-control @error($name) is-invalid @enderror" placeholder="{{ $placeholder }}"
                  @if($required) required @endif @if($readonly) readonly @endif>{{$slot}}</textarea>
        @isset($icon)
            <div class="input-group-append">
                <div class="input-group-text"><i class="{{ $icon }} fa-fw"></i></div>
            </div>
        @endisset
        @error($name) <span class="error invalid-feedback">{{$message}}</span> @enderror
    </div>

@else
    <div class="form-group {{ $class }}">
        <label class="input-label">{{ $label }}</label>
        <textarea name="{{ $name }}" cols="{{ $cols }}" rows="{{ $rows }}"
                  class="form-control @error($name) is-invalid @enderror" placeholder="{{ $placeholder }}"
                  @if($required) required @endif @if($readonly) readonly @endif>{{$slot}}</textarea>
        @error($name) <span class="error invalid-feedback">{{$message}}</span> @enderror
    </div>
@endif
