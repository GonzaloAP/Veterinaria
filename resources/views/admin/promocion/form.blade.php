<div class="form-group {{ $errors->has('descripcion') ? 'has-error' : ''}}">
    <label for="descripcion" class="col-md-4 control-label">{{ 'Descripcion' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="descripcion" type="text" id="descripcion"
               value="{{ $promocion->descripcion or ''}}" required>
        {!! $errors->first('descripcion', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('descuento') ? 'has-error' : ''}}">
    <label for="descuento" class="col-md-4 control-label">{{ 'Descuento' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="descuento" type="number" id="descuento" step="any"
               value="{{ $promocion->descuento or ''}}" required>
        {!! $errors->first('descuento', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('idservicio') ? 'has-error' : ''}}">
    <label for="idservicio" class="col-md-4 control-label">idservicio</label>
    <div class="col-md-6">
        <select name="idservicio" class="form-control">
            @foreach($servicios as $item)
                <option value="{{$item->id}}">{{$item->descripcion}}</option>
            @endforeach
        </select>
        {!! $errors->first('idservicio', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <input class="btn btn-primary" type="submit" value="{{ $submitButtonText or 'Create' }}">
    </div>
</div>
