<div class="form-group {{ $errors->has('nombre') ? 'has-error' : ''}}">
    <label for="nombre" class="col-md-4 control-label">{{ 'Nombre' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="nombre" type="text" id="nombre" value="{{ $personal->nombre or ''}}" required>
        {!! $errors->first('nombre', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('apellido') ? 'has-error' : ''}}">
    <label for="apellido" class="col-md-4 control-label">{{ 'Apellido' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="apellido" type="text" id="apellido" value="{{ $personal->apellido or ''}}" required>
        {!! $errors->first('apellido', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('ci') ? 'has-error' : ''}}">
    <label for="ci" class="col-md-4 control-label">{{ 'Ci' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="ci" type="number" id="ci" value="{{ $personal->ci or ''}}" required>
        {!! $errors->first('ci', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('telefono') ? 'has-error' : ''}}">
    <label for="telefono" class="col-md-4 control-label">{{ 'Telefono' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="telefono" type="number" id="telefono" value="{{ $personal->telefono or ''}}" required>
        {!! $errors->first('telefono', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <input class="btn btn-primary" type="submit" value="{{ $submitButtonText or 'Create' }}">
    </div>
</div>
