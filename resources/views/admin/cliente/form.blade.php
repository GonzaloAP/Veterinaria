<div class="row">
    <div class="col-lg-12" align="center">

        <div class="panel">
            <div class="panel-heading">
                        <div class="col-md-offset-0 col-md-1">
                        </br>
                        <a href="{{ url('/admin/cliente') }}" class="btn btn-sm btn-default" style="background-color: #edde34" title="Volver Atras">  <i class="demo-pli-arrow-left" aria-hidden="true"></i>Atras</a>
                        </div>
                        <h3 class="panel-title">Formulario de Clientes</h3>
            </div>
            <form class="panel-body form-horizontal form-padding">
                </br>
                <div class="form-group {{ $errors->has('nombre') ? 'has-error' : ''}}">
                    <label for="nombre" class="col-md-3 control-label">{{ 'Nombre' }}</label>
                    <div class="col-md-8">
                        <input class="form-control" name="nombre" type="text" id="nombre" value="{{ $cliente->nombre or ''}}" required>
                        {!! $errors->first('nombre', '<p class="help-block">:message</p>') !!}
                    </div>
                </div>
                <div class="form-group {{ $errors->has('apellido') ? 'has-error' : ''}}">
                    <label for="apellido" class="col-md-3 control-label">{{ 'Apellido' }}</label>
                    <div class="col-md-8">
                        <input class="form-control" name="apellido" type="text" id="apellido" value="{{ $cliente->apellido or ''}}" required>
                        {!! $errors->first('apellido', '<p class="help-block">:message</p>') !!}
                    </div>
                </div><div class="form-group {{ $errors->has('telefono') ? 'has-error' : ''}}">
                    <label for="telefono" class="col-md-3 control-label">{{ 'Telefono' }}</label>
                    <div class="col-md-8">
                        <input class="form-control" name="telefono" type="text" id="telefono" value="{{ $cliente->telefono or ''}}" required>
                        {!! $errors->first('telefono', '<p class="help-block">:message</p>') !!}
                    </div>
                </div><div class="form-group {{ $errors->has('direccion') ? 'has-error' : ''}}">
                    <label for="direccion" class="col-md-3 control-label">{{ 'Direccion' }}</label>
                    <div class="col-md-8">
                        <input class="form-control" name="direccion" type="text" id="direccion" value="{{ $cliente->direccion or ''}}" required>
                        {!! $errors->first('direccion', '<p class="help-block">:message</p>') !!}
                    </div>
                </div>
                <div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
                    <label for="email" class="col-md-3 control-label">{{ 'Email' }}</label>
                    <div class="col-md-8">
                        <input class="form-control" name="email" type="text" id="email" value="{{ $cliente->email or ''}}" required>
                        {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
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
