

<div class="row">
    <div class="col-lg-12" align="center">

        <div class="panel">
            <div class="panel-heading">
                <div class="col-md-offset-0 col-md-1">
                    </br>
                    <a href="{{ url('/admin/tratamiento') }}" class="btn btn-sm btn-default" style="background-color: #edde34" title="Volver Atras">  <i class="demo-pli-arrow-left" aria-hidden="true"></i>Atras</a>
                </div>
                <h3 class="panel-title">Formulario de Tratamientos</h3>
            </div>
            <form class="panel-body form-horizontal form-padding">
                </br>
                <div class="form-group {{ $errors->has('descripcion') ? 'has-error' : ''}}">
                    <label for="descripcion" class="col-md-3 control-label">{{ 'Descripcion' }}</label>
                    <div class="col-md-8">
                        <input class="form-control" name="descripcion" type="text" id="descripcion" value="{{ $tratamiento->descripcion or ''}}" required>
                        {!! $errors->first('descripcion', '<p class="help-block">:message</p>') !!}
                    </div>
                </div><div class="form-group {{ $errors->has('fechar') ? 'has-error' : ''}}">
                    <label for="fechar" class="col-md-3 control-label">{{ 'Fechar' }}</label>
                    <div class="col-md-8">
                        <input class="form-control" name="fechar" type="date" id="fechar" value="{{ $tratamiento->fechar or ''}}" required>
                        {!! $errors->first('fechar', '<p class="help-block">:message</p>') !!}
                    </div>
                </div><div class="form-group {{ $errors->has('plazo') ? 'has-error' : ''}}">
                    <label for="plazo" class="col-md-3 control-label">{{ 'Plazo' }}</label>
                    <div class="col-md-8">
                        <input class="form-control" name="plazo" type="number" id="plazo" value="{{ $tratamiento->plazo or ''}}" required>
                        {!! $errors->first('plazo', '<p class="help-block">:message</p>') !!}
                    </div>
                </div><div class="form-group {{ $errors->has('iddetalle') ? 'has-error' : ''}}">
                    <label for="iddetalle" class="col-md-3 control-label">{{ 'Iddetalle' }}</label>
                    <div class="col-md-8">
                        <select name="iddetalle" class="form-control">
                            @foreach($detalles as $item)
                                <option value="{{$item->id}}">{{'Ficha:'.$item->idficha.'   Servicio:'.$item->servicio}}</option>
                            @endforeach
                        </select>
                        {!! $errors->first('iddetalle', '<p class="help-block">:message</p>') !!}
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-offset-9 col-md-3">
                        <input class="btn btn-primary" type="submit" value="{{ $submitButtonText or 'Registrar' }}">
                    </div>
                </div>
                </br>
            </form>

        </div>
    </div>
</div>

