<div class="form-group {{ $errors->has('idFicha') ? 'has-error' : ''}}">
    <label for="idFicha" class="col-md-4 control-label">{{ 'Idficha' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="idFicha" type="number" id="idFicha" value="{{ $detalle->idFicha or ''}}" >
        {!! $errors->first('idFicha', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('idServicio') ? 'has-error' : ''}}">
    <label for="idServicio" class="col-md-4 control-label">{{ 'Idservicio' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="idServicio" type="number" id="idServicio" value="{{ $detalle->idServicio or ''}}" >
        {!! $errors->first('idServicio', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <input class="btn btn-primary" type="submit" value="{{ $submitButtonText or 'Create' }}">
    </div>
</div>
