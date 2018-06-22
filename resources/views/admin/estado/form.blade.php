<div class="form-group {{ $errors->has('descripcion') ? 'has-error' : ''}}">
    <label for="descripcion" class="col-md-4 control-label">{{ 'Descripcion' }}</label>
    <div class="col-md-6">
        <select name="descripcion" class="form-control" id="descripcion" required>
    @foreach (json_decode('{"Libre":"Libre","Reserva":"Reserva"}', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($estado->descripcion) && $estado->descripcion == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
        {!! $errors->first('descripcion', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <input class="btn btn-primary" type="submit" value="{{ $submitButtonText or 'Create' }}">
    </div>
</div>
