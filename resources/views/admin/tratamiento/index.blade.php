@extends('home')

@section('contenido')
    <div class="container">
        <div class="row">


            <div class="col-md-9">
                <div class="panel">
                    <div class="panel-heading"><h3 class="panel-title" style="font-size: 20px" align="center">
                            Tratamiento</h3></div>
                    <div class="panel-body">
                        <a href="{{ url('/admin/tratamiento/create') }}" class="btn btn-success btn-sm"
                           title="Add New Tratamiento">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>

                        <form method="GET" action="{{ url('/admin/tratamiento') }}" accept-charset="UTF-8"
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
                                    <th>Fechar</th>
                                    <th>Plazo</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($tratamiento as $item)
                                    <tr>
                                        <td>{{ $loop->iteration or $item->id }}</td>
                                        <td>{{ $item->descripcion }}</td>
                                        <td>{{ $item->fechar }}</td>
                                        <td>{{ $item->plazo }}</td>
                                        <td>
                                            <a href="{{ url('/admin/tratamiento/' . $item->id) }}"
                                               title="View Tratamiento">
                                                <button class="btn btn-info btn-sm"><i class="fa fa-eye"
                                                                                       aria-hidden="true"></i> View
                                                </button>
                                            </a>
                                            <a href="{{ url('/admin/tratamiento/' . $item->id . '/edit') }}"
                                               title="Edit Tratamiento">
                                                <button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o"
                                                                                          aria-hidden="true"></i> Edit
                                                </button>
                                            </a>

                                            <form method="POST"
                                                  action="{{ url('/admin/tratamiento' . '/' . $item->id) }}"
                                                  accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm"
                                                        title="Delete Tratamiento"
                                                        onclick="return confirm(&quot;Confirm delete?&quot;)"><i
                                                            class="fa fa-trash-o" aria-hidden="true"></i> Delete
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $tratamiento->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
