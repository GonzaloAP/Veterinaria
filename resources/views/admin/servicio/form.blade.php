<div class="form-group {{ $errors->has('descripcion') ? 'has-error' : ''}}">
    <label for="descripcion" class="col-md-4 control-label">{{ 'Descripcion' }}</label>
    <div class="col-md-6">
        <select name="descripcion" class="form-control" id="descripcion" required>
    @foreach (json_decode('{"Consulta":"Consulta","Vacuna":"Vacuna","Desparacitacion":"Desparacitacion","Peluqueria":"Peluqueria","Cirugia":"Cirugia"}', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($servicio->descripcion) && $servicio->descripcion == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
        {!! $errors->first('descripcion', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('precio') ? 'has-error' : ''}}">
    <label for="precio" class="col-md-4 control-label">{{ 'Precio' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="precio" type="number" id="precio" value="{{ $servicio->precio or ''}}" required>
        {!! $errors->first('precio', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('precioTotal') ? 'has-error' : ''}}">
    <label for="precioTotal" class="col-md-4 control-label">{{ 'Preciototal' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="precioTotal" type="number" id="precioTotal" value="{{ $servicio->precioTotal or ''}}" required>
        {!! $errors->first('precioTotal', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('idPersonal') ? 'has-error' : ''}}">
    <label for="idPersonal" class="col-md-4 control-label">{{ 'Idpersonal' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="idPersonal" type="number" id="idPersonal" value="{{ $servicio->idPersonal or ''}}" >
        {!! $errors->first('idPersonal', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <input class="btn btn-primary" type="submit" value="{{ $submitButtonText or 'Create' }}">
    </div>
</div>
