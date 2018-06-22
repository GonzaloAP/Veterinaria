<div class="form-group {{ $errors->has('nombre') ? 'has-error' : ''}}">
    <label for="nombre" class="col-md-4 control-label">{{ 'Nombre' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="nombre" type="text" id="nombre" value="{{ $mascotum->nombre or ''}}" required>
        {!! $errors->first('nombre', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('especie') ? 'has-error' : ''}}">
    <label for="especie" class="col-md-4 control-label">{{ 'Especie' }}</label>
    <div class="col-md-6">
        <select name="especie" class="form-control" id="especie" required>
    @foreach (json_decode('{"canina":"canina","felina":"felina","bovino":"bovino","equino":"equino","ovino":"ovino","porcino":"porcino","ave":"ave"}', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($mascotum->especie) && $mascotum->especie == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
        {!! $errors->first('especie', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('raza') ? 'has-error' : ''}}">
    <label for="raza" class="col-md-4 control-label">{{ 'Raza' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="raza" type="text" id="raza" value="{{ $mascotum->raza or ''}}" required>
        {!! $errors->first('raza', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('sexo') ? 'has-error' : ''}}">
    <label for="sexo" class="col-md-4 control-label">{{ 'Sexo' }}</label>
    <div class="col-md-6">
        <select name="sexo" class="form-control" id="sexo" required>
    @foreach (json_decode('{"macho":"macho","hembra":"hembra"}', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($mascotum->sexo) && $mascotum->sexo == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
        {!! $errors->first('sexo', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('edad') ? 'has-error' : ''}}">
    <label for="edad" class="col-md-4 control-label">{{ 'Edad' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="edad" type="number" id="edad" value="{{ $mascotum->edad or ''}}" required>
        {!! $errors->first('edad', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('idCliente') ? 'has-error' : ''}}">
    <label for="idCliente" class="col-md-4 control-label">{{ 'Id Cliente' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="idCliente" type="number" id="idCliente" value="{{ $mascotum->idCliente or ''}}" >
        {!! $errors->first('idCliente', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <input class="btn btn-primary" type="submit" value="{{ $submitButtonText or 'Create' }}">
    </div>
</div>
