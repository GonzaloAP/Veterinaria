

<div class="row">
    <div class="col-lg-12" align="center">

        <div class="panel">
            <div class="panel-heading">
                <div class="col-md-offset-0 col-md-1">
                    </br>
                    <a href="{{ url('/admin/promocion') }}" class="btn btn-sm btn-default" style="background-color: #edde34" title="Volver Atras">  <i class="demo-pli-arrow-left" aria-hidden="true"></i>Atras</a>
                </div>
                <h3 class="panel-title">Formulario de Promocion</h3>
            </div>
            <form class="panel-body form-horizontal form-padding">
                </br>
                <div class="form-group {{ $errors->has('descripcion') ? 'has-error' : ''}}">
                    <label for="descripcion" class="col-md-3 control-label">{{ 'Descripcion' }}</label>
                    <div class="col-md-8">
                        <input class="form-control" name="descripcion" type="text" id="descripcion"
                               value="{{ $promocion->descripcion or ''}}" required>
                        {!! $errors->first('descripcion', '<p class="help-block">:message</p>') !!}
                    </div>
                </div>
                <div class="form-group {{ $errors->has('descuento') ? 'has-error' : ''}}">
                    <label for="descuento" class="col-md-3 control-label">{{ 'Descuento (Bs)' }}</label>
                    <div class="col-md-8">
                        <input class="form-control" name="descuento" type="number" id="descuento" step="any"
                               value="{{ $promocion->descuento or ''}}" required>
                        {!! $errors->first('descuento', '<p class="help-block">:message</p>') !!}
                    </div>
                </div>
                <div class="form-group {{ $errors->has('idservicio') ? 'has-error' : ''}}">
                    <label for="idservicio" class="col-md-3 control-label">Servicio</label>
                    <div class="col-md-8">
                        <select name="idservicio" class="form-control">
                            @foreach($servicios as $item)
                                <option value="{{$item->id}}">{{$item->descripcion}}</option>
                            @endforeach
                        </select>
                        {!! $errors->first('idservicio', '<p class="help-block">:message</p>') !!}
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

