@extends('home')

@section('contenido')
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="card">

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        <form method="POST" action="{{ url('/admin/mascota') }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                            {{ csrf_field() }}

                            @include ('admin.mascota.form')

                        </form>


                </div>
            </div>
        </div>
    </div>
@endsection
