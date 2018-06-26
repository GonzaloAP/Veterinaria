<div class="row">
    <div class="col-lg-12" align="center">

        <div class="panel">
            <div class="panel-heading">
                <div class="col-md-offset-0 col-md-1">
                    </br>
                    <a href="{{ url('/admin/ficha') }}" class="btn btn-sm btn-default" style="background-color: #edde34" title="Volver Atras">  <i class="demo-pli-arrow-left" aria-hidden="true"></i>Atras</a>
                </div>
                <h3 class="panel-title">Ficha De Atencion</h3>
            </div>
            <form class="panel-body form-horizontal form-padding">
                </br>
                <div class="form-group {{ $errors->has('fecha') ? 'has-error' : ''}}">
                    <label for="fecha" class="col-md-3 control-label">{{ 'Fecha' }}</label>
                    <div class="col-md-8">
                        <input class="form-control" name="fecha" type="date" id="fecha" value="{{ $ficha->fecha or ''}}" required>
                        {!! $errors->first('fecha', '<p class="help-block">:message</p>') !!}
                    </div>
                </div><div class="form-group {{ $errors->has('idEstado') ? 'has-error' : ''}}">
                    <label for="idEstado" class="col-md-3 control-label">{{ 'Idestado' }}</label>
                    <div class="col-md-8">
                        {{--<input class="form-control" name="idEstado" type="number" id="idEstado" value="{{ $ficha->idEstado or ''}}" >--}}
                        <select name="estado" class="form-control">
                            <option value="" disabled selected>Seleccione una Opcion</option>
                            @foreach($estado as $e)
                                <option value={{$e->id}}>{{$e->descripcion}}</option>
                            @endforeach
                        </select>
                        {!! $errors->first('idEstado', '<p class="help-block">:message</p>') !!}
                    </div>
                </div><div class="form-group {{ $errors->has('idMascota') ? 'has-error' : ''}}">
                    <label for="idMascota" class="col-md-3 control-label">{{ 'Idmascota' }}</label>
                    <div class="col-md-8">
                        {{--<input class="form-control" name="idMascota" type="number" id="idMascota" value="{{ $ficha->idMascota or ''}}" >--}}
                        <select name="mascota" class="form-control">
                            <option value="" disabled selected>Seleccione una Opcion</option>
                            @foreach($mascota as $m)
                                <option value={{$m->id}}>{{$m->nombre}}</option>
                            @endforeach
                        </select>
                        {!! $errors->first('idMascota', '<p class="help-block">:message</p>') !!}
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

