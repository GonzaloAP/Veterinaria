@extends('home')

@section('contenido')
    <div class="container">
        <div class="row">


            <div class="col-md-9">
                <div class="panel">
                    <div class="panel-heading"><h3 class="panel-title" align="center" style="font-size: 20px">Servicio {{ $servicio->id }}</h3></div>
                    <div class="panel-body">
                        <a href="{{ url('/admin/servicio') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/admin/servicio/' . $servicio->id . '/edit') }}" title="Edit Servicio"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('admin/servicio' . '/' . $servicio->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Servicio" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $servicio->id }}</td>
                                    </tr>
                                    <tr><th> Descripcion </th><td> {{ $servicio->descripcion }} </td></tr><tr><th> Precio </th><td> {{ $servicio->precio }} </td></tr><tr><th> PrecioTotal </th><td> {{ $servicio->precioTotal }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
