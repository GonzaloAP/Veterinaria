@extends('home')

@section('contenido')
    <div class="container">
        <div class="row">


            <div class="col-md-9">
                <div class="panel">

                    <div class="panel-body">


                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        <form method="POST" action="{{ url('/admin/personal/' . $personal->id) }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            {{ csrf_field() }}

                            @include ('admin.personal.form', ['submitButtonText' => 'Guardar'])

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
