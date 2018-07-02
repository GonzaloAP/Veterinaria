@extends('home')

@section('contenido')

    <div class="panel">
        <div class="panel-heading">
            </br>
            <h3 class="panel-title" style="font-size:20px;text-align:center">Mascotas</h3>
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
                    <th data-field="especie" data-sortable="true">Especie</th>
                    <th data-field="number_format">Raza</th>
                    <th data-field="acciones" data-align="center">Acciones</th>
                </tr>
                </thead>
                <tbody>
                @foreach($mascota as $item)
                    <tr>
                        <td data-field="id">{{ $loop->iteration or $item->id }}</td>
                        <td data-field="nombre">{{ $item->nombre }}</td>
                        <td data-field="apellido">{{ $item->especie }}</td>
                        <td data-field="number_format">{{ $item->raza }}</td>
                        <td data-field="acciones">
                            <a href="{{ url('/his/' . $item->id ) }}" title="Historial">
                                <button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o"
                                                                          aria-hidden="true"></i>Historial
                                </button>
                            </a>
                            <a href="{{ url('/mas/' . $item->id ) }}" title="Ficha Atencion">
                                <button class="btn btn-danger btn-sm"><i class="fa fa-pencil-square-o"
                                                                          aria-hidden="true"></i>Rep.Fichas Atencion
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
