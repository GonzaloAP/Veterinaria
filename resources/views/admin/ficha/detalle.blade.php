@extends('home')

@section('contenido')

    <div class="row">
        <div class="col-md-11">
            <div class="panel">
                <div class="panel-heading">
                    </br>
                    <h3 class="panel-title" style="font-size:20px;text-align:center">Detalle de Ficha</h3>
                </div>
                <div class="panel-body">
                    <table id="demo-custom-toolbar" class="demo-add-niftycheck" data-toggle="table"
                           data-url="data/bs-table.json"
                           data-toolbar="#demo-delete-row"
                           data-search="true"
                           data-show-refresh="true"
                           data-show-toggle="true"
                           data-show-columns="true"
                           data-sort-name="id"
                           data-page-list="[5, 10, 20]"
                           data-page-size="5"
                           data-pagination="true" data-show-pagination-switch="true">
                        <a href="{{ url('/admin/ficha') }}" title="Volver Atras"><button class="btn  btn-sm" style="background-color: #edde34"><i class="demo-pli-arrow-left" aria-hidden="true"></i> Atras</button></a>

                        <br/>
                        <br/>
                        <tbody>
                        @foreach($fichaD as $f)
                        <tr>
                            <th> Detalle# {{ $f->idservicio }}</th>
                            <td>
                                <a href="{{ url('/admin/detalle/' . $f->id . '/edit') }}" title="Editar Detalle"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</button></a>

                                <form method="POST" action="{{ url('/admin/detalle' . '/' . $f->id) }}" accept-charset="UTF-8" style="display:inline">
                                    {{ method_field('DELETE') }}
                                    {{ csrf_field() }}
                                    <button type="submit" class="btn btn-danger btn-sm" title="Eliminar Detalle" onclick="return confirm(&quot;Esta seguro de  realizar esta acccion ?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Eliminar</button>
                                </form>
                            </td>
                        </tr>
                        <tr>
                            <th> Id Servicio </th><td> {{ $f->idservicio }} </td>
                        </tr>
                        <tr>
                            <th> Descripcion </th><td> {{ $f->descripcion }} </td>
                        </tr>
                        <tr>
                            <th> Precio </th><td> {{ $f->precio }} </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
