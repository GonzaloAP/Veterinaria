@extends('home')

@section('contenido')
    <div class="panel">
        <div class="panel-heading"></br>
            <h3 class="panel-title" style="font-size:20px;text-align:center">Personal</h3>
        </div>
        <div class="panel-body">
            <a href="{{ url('/admin/personal/create') }}" class="btn btn-success btn-sm" title="Nuevo Personal">
                <i class="demo-pli-add" aria-hidden="true"></i> Nuevo
            </a>

            <form method="GET" action="{{ url('/admin/personal') }}" accept-charset="UTF-8"
                  class="form-inline my-2 my-lg-0 float-right" role="search">
                <div class="input-group">
                    <span class="input-group-append">
                        <button class="btn btn-secondary" type="submit">
                            <i class="fa fa-search"></i>
                        </button>
                    </span>
                </div>
            </form>

            <br/>
            <br/>
            <div class="table-responsive">
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
                        <th>#</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Ci</th>
                        <th>Acciones</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($personal as $item)
                        <tr>
                            <td>{{ $loop->iteration or $item->id }}</td>
                            <td>{{ $item->nombre }}</td>
                            <td>{{ $item->apellido }}</td>
                            <td>{{ $item->ci }}</td>
                            <td>
                                <a href="{{ url('/admin/personal/' . $item->id) }}" title="Ver Personal">
                                    <button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i>
                                        Ver
                                    </button>
                                </a>
                                <a href="{{ url('/admin/personal/' . $item->id . '/edit') }}" title="Editar Personal">
                                    <button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o"
                                                                              aria-hidden="true"></i> Editar
                                    </button>
                                </a>

                                <form method="POST" action="{{ url('/admin/personal' . '/' . $item->id) }}"
                                      accept-charset="UTF-8" style="display:inline">
                                    {{ method_field('DELETE') }}
                                    {{ csrf_field() }}
                                    <button type="submit" class="btn btn-danger btn-sm" title="Eliminar Personal"
                                            onclick="return confirm(&quot;Esta Seguro de Realizar esta Accion ?&quot;)"><i
                                                class="fa fa-trash-o" aria-hidden="true"></i> Eliminar
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <div class="pagination-wrapper"> {!! $personal->appends(['search' => Request::get('search')])->render() !!} </div>
            </div>

        </div>
    </div>



@endsection
