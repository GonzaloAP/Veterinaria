<div class="form-group {{ $errors->has('descripcion') ? 'has-error' : ''}}">
    <label for="descripcion" class="col-md-4 control-label">{{ 'Descripcion' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="descripcion" type="text" id="descripcion" value="{{ $tratamiento->descripcion or ''}}" required>
        {!! $errors->first('descripcion', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('fechar') ? 'has-error' : ''}}">
    <label for="fechar" class="col-md-4 control-label">{{ 'Fechar' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="fechar" type="date" id="fechar" value="{{ $tratamiento->fechar or ''}}" required>
        {!! $errors->first('fechar', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('plazo') ? 'has-error' : ''}}">
    <label for="plazo" class="col-md-4 control-label">{{ 'Plazo' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="plazo" type="number" id="plazo" value="{{ $tratamiento->plazo or ''}}" required>
        {!! $errors->first('plazo', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('iddetalle') ? 'has-error' : ''}}">
    <label for="iddetalle" class="col-md-4 control-label">{{ 'Iddetalle' }}</label>
    <div class="col-md-6">
        <select name="iddetalle" class="form-control">
            @foreach($detalles as $item)
                <option value="{{$item->id}}">{{'Ficha:'.$item->idficha.'   Servicio:'.$item->servicio}}</option>
            @endforeach
        </select>
        {!! $errors->first('iddetalle', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <input class="btn btn-primary" type="submit" value="{{ $submitButtonText or 'Create' }}">
    </div>
</div>
