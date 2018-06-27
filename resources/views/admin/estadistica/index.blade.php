@extends('home')

@section('contenido')

    <div class="panel">
        <div class="panel-heading">
            </br>
            <h3 class="panel-title" style="font-size:20px;text-align:center">Estadisticas</h3>
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
                <thead>
                <tr>
                    <th data-field="id" data-sortable="true">#</th>
                    <th data-field="nombre" data-sortable="true">Descripcion</th>
                    <th data-field="acciones" data-align="center">Acciones</th>
                </tr>
                </thead>
                <tbody>

                    <tr>
                        <td data-field="id">1</td>
                        <td data-field="nombre">Servicios</td>
                        <td data-field="acciones">
                            <a href="{{ url('/admin/estadisticaServicios/' . 1) }}" title="Ver Servicios"><button class="btn btn-danger btn-md"><i class="fa fa-eye" aria-hidden="true"></i> Ver</button></a>
                        </td>
                    </tr>
                    <tr>
                        <td data-field="id">2</td>
                        <td data-field="nombre">Mascotas</td>
                        <td data-field="acciones">
                            <a href="{{ url('/admin/estadisticaMascotas/' . 2) }}" title="Ver Mascotas"><button class="btn btn-danger btn-md"><i class="fa fa-eye" aria-hidden="true"></i> Ver</button></a>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>

@endsection
