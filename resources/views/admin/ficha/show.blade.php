@extends('home')

@section('contenido')

    <div class="row">
        <div class="col-md-11">
            <div class="panel">
                <div class="panel-heading">
                    </br>
                    <h3 class="panel-title" style="font-size:20px;text-align:center">Cliente {{ $ficha->id }}</h3>
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
                        <tr>
                            <th>ID</th><td>{{ $ficha->id }}</td>
                        </tr>
                        <tr><th> Fecha </th><td> {{ $ficha->fecha }} </td></tr><tr><th> Estado </th><td> {{ $ficha->idestado }} </td></tr><tr><th> Mascota </th><td> {{ $ficha->idmascota }} </td></tr>
                        <tr><th> Informacion del Cliente: </th></tr>
                        <tr><th> Nombre</th><td> {{ $ficha->nombrecl }} {{ $ficha->apellidocl }} </td></tr><tr><th> Telefono</th><td> {{ $ficha->telefonoCl }} </td></tr>
                        <tr><th> Direccion</th><td> {{ $ficha->direccionCl }} </td></tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
