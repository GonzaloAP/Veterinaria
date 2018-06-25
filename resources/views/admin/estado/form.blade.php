<div class="row">
    <div class="col-lg-12" align="center">
        <div class="panel">
            <div class="panel-heading">
                <div class="col-md-offset-0 col-md-1">
                    </br>
                    <a href="{{ url('/admin/estado') }}" class="btn btn-sm btn-default" style="background-color: #edde34" title="Volver Atras">  <i class="demo-pli-arrow-left" aria-hidden="true"></i>Atras</a>
                </div>
                <h3 class="panel-title">Estados</h3>
            </div>
            <form class="panel-body form-horizontal form-padding">
                </br>
                <div class="form-group {{ $errors->has('descripcion') ? 'has-error' : ''}}">
                    <label for="descripcion" class="col-md-3 control-label">{{ 'Descripcion' }}</label>
                    <div class="col-md-8">
                        <select name="descripcion" class="form-control" id="descripcion" required>
                            @foreach (json_decode('{"Libre":"Libre","Reserva":"Reserva"}', true) as $optionKey => $optionValue)
                                <option value="{{ $optionKey }}" {{ (isset($estado->descripcion) && $estado->descripcion == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
                            @endforeach
                        </select>
                        {!! $errors->first('descripcion', '<p class="help-block">:message</p>') !!}
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
