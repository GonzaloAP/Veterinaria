<div class="row">
    <div class="col-lg-12" align="center">

        <div class="panel">
            <div class="panel-heading">
                <div class="col-md-offset-0 col-md-1">
                    </br>
                    <a href="{{ url('/admin/mascota') }}" class="btn btn-sm btn-default" style="background-color: #edde34" title="Volver Atras">  <i class="demo-pli-arrow-left" aria-hidden="true"></i>Atras</a>
                </div>
                <h3 class="panel-title">Formulario de Mascotas</h3>
            </div>
            <form class="panel-body form-horizontal form-padding">
                </br>
                <div class="form-group {{ $errors->has('nombre') ? 'has-error' : ''}}">
                    <label for="nombre" class="col-md-3 control-label">{{ 'Nombre' }}</label>
                    <div class="col-md-8">
                        <input class="form-control" name="nombre" type="text" id="nombre" value="{{ $mascotum->nombre or ''}}" required placeholder="Ej: Firulais">
                        {!! $errors->first('nombre', '<p class="help-block">:message</p>') !!}
                    </div>
                </div><div class="form-group {{ $errors->has('especie') ? 'has-error' : ''}}">
                    <label for="especie" class="col-md-3 control-label">{{ 'Especie' }}</label>
                    <div class="col-md-8">
                        <select name="especie" class="form-control" id="especie" required>
                            <option value="" disabled selected>Seleccione una Especie</option>
                            @foreach (json_decode('{"canina":"canina","felina":"felina","bovino":"bovino","equino":"equino","ovino":"ovino","porcino":"porcino","ave":"ave"}', true) as $optionKey => $optionValue)
                                <option value="{{ $optionKey }}" {{ (isset($mascotum->especie) && $mascotum->especie == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
                            @endforeach
                        </select>
                        {!! $errors->first('especie', '<p class="help-block">:message</p>') !!}
                    </div>
                </div><div class="form-group {{ $errors->has('raza') ? 'has-error' : ''}}">
                    <label for="raza" class="col-md-3 control-label">{{ 'Raza' }}</label>
                    <div class="col-md-8">
                        <input class="form-control" name="raza" type="text" id="raza" value="{{ $mascotum->raza or ''}}" required placeholder="Ej: Caniche">
                        {!! $errors->first('raza', '<p class="help-block">:message</p>') !!}
                    </div>
                </div><div class="form-group {{ $errors->has('sexo') ? 'has-error' : ''}}">
                    <label for="sexo" class="col-md-3 control-label">{{ 'Sexo' }}</label>
                    <div class="col-md-8">
                        <select name="sexo" class="form-control" id="sexo" required>
                            <option value="" disabled selected>Seleccione una Opcion</option>
                            @foreach (json_decode('{"macho":"macho","hembra":"hembra"}', true) as $optionKey => $optionValue)
                                <option value="{{ $optionKey }}" {{ (isset($mascotum->sexo) && $mascotum->sexo == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
                            @endforeach
                        </select>
                        {!! $errors->first('sexo', '<p class="help-block">:message</p>') !!}
                    </div>
                </div><div class="form-group {{ $errors->has('edad') ? 'has-error' : ''}}">
                    <label for="edad" class="col-md-3 control-label">{{ 'Edad' }}</label>
                    <div class="col-md-8">
                        <input class="form-control" name="edad" type="number" id="edad" value="{{ $mascotum->edad or ''}}" required placeholder="Ej: 5">
                        {!! $errors->first('edad', '<p class="help-block">:message</p>') !!}
                    </div>
                </div>
                <div class="form-group {{ $errors->has('cliente') ? 'has-error' : ''}}">
                    <label for="cliente" class="col-md-3 control-label">{{ 'Cliente' }}</label>
                    <div class="col-md-8">
                        <select name="cliente" class="form-control">
                            <option value="" disabled selected>Seleccione un Cliente</option>
                            @foreach($cliente as $c)
                                <option value={{$c->id}}>{{$c->nombre}}</option>
                            @endforeach

                        </select>
                        {!! $errors->first('cliente', '<p class="help-block">:message</p>') !!}
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
