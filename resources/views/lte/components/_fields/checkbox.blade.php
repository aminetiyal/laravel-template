<div class="icheck-primary">
    <input type="checkbox" id="{{$id}}" name="{{$name}}" value="{{$value}}">
    <label for="{{$id}}">
        {{$label}}
    </label>
    @error($name) <small class="form-text text-danger error">{{$messages}}</small> @enderror
</div>
