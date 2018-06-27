@extends('home')

@section('contenido')
    <div class="container">
        <div class="row">


            <div class="col-md-9">
                <div class="panel">
                    <div class="panel-heading"><h3 class="panel-title" style="font-size: 20px" align="center">
                            Tratamiento {{ $tratamiento->id }}</h3></div>
                    <div class="panel-body">

                        <a href="{{ url('/admin/tratamiento') }}" title="Back">
                            <button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i>
                                Back
                            </button>
                        </a>
                        <a href="{{ url('/admin/tratamiento/' . $tratamiento->id . '/edit') }}"
                           title="Edit Tratamiento">
                            <button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o"
                                                                      aria-hidden="true"></i> Edit
                            </button>
                        </a>

                        <form method="POST" action="{{ url('admin/tratamiento' . '/' . $tratamiento->id) }}"
                              accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Tratamiento"
                                    onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o"
                                                                                             aria-hidden="true"></i>
                                Delete
                            </button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                <tr>
                                    <th>ID</th>
                                    <td>{{ $tratamiento->id }}</td>
                                </tr>
                                <tr>
                                    <th> Descripcion</th>
                                    <td> {{ $tratamiento->descripcion }} </td>
                                </tr>
                                <tr>
                                    <th> Fechar</th>
                                    <td> {{ $tratamiento->fechar }} </td>
                                </tr>
                                <tr>
                                    <th> Plazo</th>
                                    <td> {{ $tratamiento->plazo }} </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
