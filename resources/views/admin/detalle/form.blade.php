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
                <div class="form-group {{ $errors->has('fichaId') ? 'has-error' : ''}}">
                    <label for="fichaId" class="col-md-3 control-label">{{ 'Nro de Ficha' }}</label>
                    <div class="col-md-8">
                        {{--<input class="form-control" name="idFicha" type="number" id="idFicha" value="{{ $detalle->idFicha or ''}}" >--}}
                        <select name="fichaId" id="fichaId" class="form-control">
                                <option value={{$fichaId}} >{{$fichaId}}</option>
                        </select>
                        {!! $errors->first('idFicha', '<p class="help-block">:message</p>') !!}
                    </div>
                </div><div class="form-group {{ $errors->has('servicios') ? 'has-error' : ''}}">
                    <label for="servicios" class="col-md-3 control-label">{{ 'Servicios' }}</label>
                    <div class="col-md-8">
                        {{--<input class="form-control" name="idServicio" type="number" id="idServicio" value="{{ $detalle->idServicio or ''}}" >--}}
                        <select name="servicios"  id="servicios" class="form-control">
                           {{-- <option value="" disabled selected>Seleccione un Servicio</option>--}}
                            @foreach($servicios as $s)
                                <option value={{$s->id}}>{{$s->descripcion}}</option>
                            @endforeach

                        </select>
                        {!! $errors->first('idServicio', '<p class="help-block">:message</p>') !!}
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-offset-3 col-md-6">
                        <button type="button" id="btn_add" class="btn btn-block btn-primary"> Agregar</button>
                    </div>
                </div>


                <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                    <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                        <table id="detalles" class="table table-striped table-bordered table-condensed table-hover">
                            <thead>
                            <th>Detalle</th>
                            <th>Nro Ficha</th>
                            <th>Servicio</th>
                            </thead>
                            <tfoot>
                            <th></th>
                            <th></th>
                            <th></th>
                            </tfoot>
                            <tbody>

                            </tbody>
                        </table>
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


@push('scripts')
<script>
    $(document).ready(function () {
        $('#btn_add').click(function () {
            agregar();
        });
    });

    c = 0;

    $("#guardar").hide();

    function agregar() {


        idF = $("#fichaId").val();  //nro
        Ficha = $("#fichaId option:selected").text(); //proyecto
        console.log('Ficha');

        idS = $("#servicios").val();    //codigo
        Servicio = $("#servicios option:selected").text();   //material


        console.log('Servicio');
        /*if (Cargo != "" && Cargo != "Escoger Cargo..." && Usuario != "" && Usuario != "Escoger Usuario...") {*/

        var fila = '<tr class="selected" id="fila' + c + '"><td><button type="button" class="btn btn-warning" onclick="eliminar(' + c + ');">X</button></td><td>' +
            '<input id="idF" type="hidden" name="idF" value="' + idF + '">' + Ficha + '</td><td>' +
            '<input id="idS" type="hidden" name="idS[]" value="' + idS + '">' + Servicio + '</td></tr>';

        c++;
        limpiar();
        evaluar();
        $('#detalles').append(fila);
        /* } else {
         alert("Error al ingresar los Participantes y los Cargos");
         }
         */
    }

    function limpiar() {

        $("#servicios   ").val("");
    }

    function evaluar() {
        if (c > 0) {
            $("#guardar").show();
        }
        else {
            $("#guardar").hide();
        }
    }

    function eliminar(index) {
        $("#fila" + index).remove();
        c--;
        evaluar();
    }

</script>
@endpush


