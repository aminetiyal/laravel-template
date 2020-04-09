<div class="icheck-primary">
    <input type="checkbox" class="form-control is-invalid @error($name) is-invalid @enderror" id="{{$id}}" name="{{$name}}" value="{{$value}}">
    <label for="{{$id}}">
        {{$label}}
    </label>
    @error($name) <span class="error invalid-feedback">{{$messages}} </span>@enderror
</div>
