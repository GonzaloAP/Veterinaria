<div class="row">
    <div class="col-lg-12" align="center">

        <div class="panel">
            <div class="panel-heading">
                <div class="col-md-offset-0 col-md-1">
                    </br>
                    <a href="{{ url('/admin/ficha') }}" class="btn btn-sm btn-default" style="background-color: #edde34" title="Volver Atras">  <i class="demo-pli-arrow-left" aria-hidden="true"></i>Atras</a>
                </div>
                <h3 class="panel-title">Detalle de Ficha</h3>
            </div>
            <form class="panel-body form-horizontal form-padding">
                </br>
                <div class="form-group {{ $errors->has('idficha') ? 'has-error' : ''}}">
                    <label for="idficha" class="col-md-3 control-label">{{ 'Nro de Ficha' }}</label>
                    <div class="col-md-8">
                        {{--<input class="form-control" name="idFicha" type="number" id="idFicha" value="{{ $detalle->idFicha or ''}}" >--}}
                        <select name="idficha" id="idficha" class="form-control">
                                <option value={{$detalle->idficha}}>{{$detalle->idficha}}</option>
                        </select>
                        {!! $errors->first('idFicha', '<p class="help-block">:message</p>') !!}
                    </div>
                </div><div class="form-group {{ $errors->has('idservicio') ? 'has-error' : ''}}">
                    <label for="idservicio" class="col-md-3 control-label">{{ 'Servicios' }}</label>
                    <div class="col-md-8">
                        {{--<input class="form-control" name="idServicio" type="number" id="idServicio" value="{{ $detalle->idServicio or ''}}" >--}}
                        <select name="idservicio"  id="idservicio" class="form-control">

                            @foreach($servicio as $s)
                                <option value={{$s->id}}>{{$s->descripcion}}</option>
                            @endforeach

                        </select>
                        {!! $errors->first('idServicio', '<p class="help-block">:message</p>') !!}
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-offset-9 col-md-3">
                        <input class="btn btn-primary"  id="guardar" type="submit" value="{{ $submitButtonText or 'Registrar' }}">
                    </div>
                </div>
                </br>
            </form>

        </div>
    </div>
</div>

