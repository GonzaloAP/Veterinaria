@extends('home')

@section('contenido')
    <div class="container">
        <div class="row">


            <div class="col-md-9">
                <div class="panel">
                    <div class="panel-heading"><h3 class="panel-title" align="center" style="font-size: 20px">Create New Tratamiento</h3></div>
                    <div class="panel-body">
                        <a href="{{ url('/admin/tratamiento') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <br />
                        <br />

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        <form method="POST" action="{{ url('/admin/tratamiento') }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                            {{ csrf_field() }}

                            @include ('admin.tratamiento.form')

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
