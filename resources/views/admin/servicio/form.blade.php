<div class="form-group {{ $errors->has('descripcion') ? 'has-error' : ''}}">
    <label for="descripcion" class="col-md-4 control-label">{{ 'Descripcion' }}</label>
    <div class="col-md-6">

        <div class="col-md-6">
            <input class="form-control" name="descripcion" type="text" id="precio"
                   value="{{ $servicio->descripcion or ''}}" required>
            {!! $errors->first('descripcion', '<p class="help-block">:message</p>') !!}
        </div>
        {!! $errors->first('descripcion', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('precio') ? 'has-error' : ''}}">
    <label for="precio" class="col-md-4 control-label">{{ 'Precio' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="precio" type="number" id="precio" value="{{ $servicio->precio or ''}}"
               required>
        {!! $errors->first('precio', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('preciototal') ? 'has-error' : ''}}">
    <label for="preciototal" class="col-md-4 control-label">{{ 'Preciototal' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="preciototal" type="number" id="preciototal"
               value="{{ $servicio->preciototal or ''}}" required>
        {!! $errors->first('preciototal', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('idpersonal') ? 'has-error' : ''}}">
    <label for="idpersonal" class="col-md-4 control-label">{{ 'idpersonal' }}</label>
    <div class="col-md-6">
        <select name="idpersonal" class="form-control" id="idpersonal" required>
            @foreach ($personals as $item)
                <option value="{{ $item->id }}">{{$item->nombre.' '.$item->apellido}}</option>
            @endforeach
        </select>
        {!! $errors->first('idpersonal', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <input class="btn btn-primary" type="submit" value="{{ $submitButtonText or 'Create' }}">
    </div>
</div>
