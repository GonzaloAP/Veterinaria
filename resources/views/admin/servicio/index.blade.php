@extends('home')

@section('contenido')
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="panel">
                    <div class="panel-heading"><br><h3 class="panel-title" style="font-size:20px;text-align:center">
                            Servicio</h3></div>

                    <div class="panel-body">
                        <a href="{{ url('/admin/servicio/create') }}" class="btn btn-success btn-sm"
                           title="Add New Servicio">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>

                        <form method="GET" action="{{ url('/admin/servicio') }}" accept-charset="UTF-8"
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
                                    <th>Descripcion</th>
                                    <th>Precio</th>
                                    <th>PrecioTotal</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($servicio as $item)
                                    <tr>
                                        <td>{{ $loop->iteration or $item->id }}</td>
                                        <td>{{ $item->descripcion }}</td>
                                        <td>{{ $item->precio }}</td>
                                        <td>{{ $item->preciototal }}</td>
                                        <td>
                                            <a href="{{ url('/admin/servicio/' . $item->id) }}" title="View Servicio">
                                                <button class="btn btn-info btn-sm"><i class="fa fa-eye"
                                                                                       aria-hidden="true"></i> View
                                                </button>
                                            </a>
                                            <a href="{{ url('/admin/servicio/' . $item->id . '/edit') }}"
                                               title="Edit Servicio">
                                                <button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o"
                                                                                          aria-hidden="true"></i> Edit
                                                </button>
                                            </a>

                                            <form method="POST" action="{{ url('/admin/servicio' . '/' . $item->id) }}"
                                                  accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm"
                                                        title="Delete Servicio"
                                                        onclick="return confirm(&quot;Confirm delete?&quot;)"><i
                                                            class="fa fa-trash-o" aria-hidden="true"></i> Delete
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $servicio->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
