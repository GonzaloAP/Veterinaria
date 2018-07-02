@extends('home')

@section('contenido')

    <div class="panel">
        <div class="panel-heading">
            </br>
            <h3 class="panel-title" style="font-size:20px;text-align:center">Reporte para los clientes</h3>
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
                    <th data-field="nombre" data-sortable="true">Nombre</th>
                    <th data-field="apellido" data-sortable="true">Apellido</th>
                    <th data-field="number_format">Telefono</th>
                    <th data-field="acciones" data-align="center">Acciones</th>
                </tr>
                </thead>
                <tbody>
                @foreach($cliente as $item)
                    <tr>
                        <td data-field="id">{{ $loop->iteration or $item->id }}</td>
                        <td data-field="nombre">{{ $item->nombre }}</td>
                        <td data-field="apellido">{{ $item->apellido }}</td>
                        <td data-field="number_format">{{ $item->telefono }}</td>
                        <td data-field="acciones">
                            <a href="{{ url('cli/' . $item->id) }}" title="consultas">
                                <button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i>
                                    Consultas
                                </button>
                            </a>
                            <a href="{{url('reportemascota/'.$item->id)}}">
                                <button class="btn btn-danger btn-sm"><i class="fa fa-eye" aria-hidden="true"></i>
                                    Mascotas
                                </button>
                            </a>


                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection
