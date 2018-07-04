<div class="row">
    <div class="col-lg-12" align="center">

        <div class="panel">
            <div class="panel-heading">
                <div class="col-md-offset-0 col-md-1">
                    </br>
                    <a href="{{ url('/admin/servicio') }}" class="btn btn-sm btn-default" style="background-color: #edde34" title="Volver Atras">  <i class="demo-pli-arrow-left" aria-hidden="true"></i>Atras</a>
                </div>
                <h3 class="panel-title">Formulario de Servicios</h3>
            </div>
            <form class="panel-body form-horizontal form-padding">
                </br>
                <div class="form-group {{ $errors->has('descripcion') ? 'has-error' : ''}}">
                    <label for="descripcion" class="col-md-3 control-label">{{ 'Descripcion' }}</label>


                        <div class="col-md-8">
                            <input class="form-control" name="descripcion" type="text" id="precio"
                                   value="{{ $servicio->descripcion or ''}}" required>
                            {!! $errors->first('descripcion', '<p class="help-block">:message</p>') !!}
                        </div>
                        {!! $errors->first('descripcion', '<p class="help-block">:message</p>') !!}

                </div>
                <div class="form-group {{ $errors->has('precio') ? 'has-error' : ''}}">
                    <label for="precio" class="col-md-3 control-label">{{ 'Precio' }}</label>
                    <div class="col-md-8">
                        <input class="form-control" name="precio" type="number" step="any" id="precio" value="{{ $servicio->precio or ''}}"
                               required>
                        {!! $errors->first('precio', '<p class="help-block">:message</p>') !!}
                    </div>
                </div>
                <div class="form-group {{ $errors->has('preciototal') ? 'has-error' : ''}}">
                    <label for="preciototal" class="col-md-3 control-label">{{ 'Preciototal' }}</label>
                    <div class="col-md-8">
                        <input class="form-control" name="preciototal" type="number" step="any" id="preciototal"
                               value="{{ $servicio->preciototal or ''}}" required>
                        {!! $errors->first('preciototal', '<p class="help-block">:message</p>') !!}
                    </div>
                </div>
                <div class="form-group {{ $errors->has('idpersonal') ? 'has-error' : ''}}">
                    <label for="idpersonal" class="col-md-3 control-label">{{ 'Personal' }}</label>
                    <div class="col-md-8">
                        <select name="idpersonal" class="form-control" id="idpersonal" required>
                            @foreach ($personals as $item)
                                <option value="{{ $item->id }}">{{$item->nombre.' '.$item->apellido}}</option>
                            @endforeach
                        </select>
                        {!! $errors->first('idpersonal', '<p class="help-block">:message</p>') !!}
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
