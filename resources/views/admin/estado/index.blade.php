@extends('home')

@section('contenido')
    <div class="panel">
        <div class="panel-heading">
            </br>
            <h3 class="panel-title" style="font-size:20px;text-align:center">Estados de Ficha</h3>
        </div>
        <div class="panel-body">
            <a href="{{ url('/admin/estado/create') }}" class="btn btn-success" title="Nuevo Estado">
                <i class="demo-pli-add" aria-hidden="true"></i> Nuevo
            </a>
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
                    <th data-field="descripcion" data-sortable="true">Descripcion</th>
                    <th data-field="acciones" data-align="center">Acciones</th>
                </tr>
                </thead>
                <tbody>
                @foreach($estado as $item)
                    <tr>
                        <td data-field="id">{{ $loop->iteration or $item->id }}</td>
                        <td data-field="descripcion">{{ $item->descripcion }}</td>
                        <td data-field="acciones">
                            <a href="{{ url('/admin/estado/' . $item->id) }}" title="Ver Estado"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> Ver</button></a>
                            <a href="{{ url('/admin/estado/' . $item->id . '/edit') }}" title="Editar Estado"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</button></a>

                            <form method="POST" action="{{ url('/admin/estado' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                {{ method_field('DELETE') }}
                                {{ csrf_field() }}
                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Cliente" onclick="return confirm(&quot;Esta seguro de realizar esta accion ?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
