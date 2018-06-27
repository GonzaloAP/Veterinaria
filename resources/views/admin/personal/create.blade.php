@extends('home')

@section('contenido')
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="panel">
                    <div class="panel-heading"></br>
                        <h3 class="panel-title" style="font-size:20px;text-align:center">Agregar Personal</h3>
                    </div>
                    <div class="panel-body">
                        <a href="{{ url('/admin/personal') }}" title="Back">
                            <button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i>
                                Back
                            </button>
                        </a>
                        <br/>
                        <br/>

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        <form method="POST" action="{{ url('/admin/personal') }}" accept-charset="UTF-8"
                              class="form-horizontal" enctype="multipart/form-data">
                            {{ csrf_field() }}

                            @include ('admin.personal.form')

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
