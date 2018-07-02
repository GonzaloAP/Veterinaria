<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title></title>

    <!-- Bootstrap -->
    <link href="{{asset("../vendors/bootstrap/dist/css/bootstrap.min.css")}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{asset("../vendors/font-awesome/css/font-awesome.min.css" )}}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{asset("../vendors/nprogress/nprogress.css")}}" rel="stylesheet">

    <!-- Custom styling plus plugins -->
    <link href="{{asset("../build/css/custom.min.css")}}" rel="stylesheet">
</head>

<body class="nav-md">

<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Veterinaria LAZZIE
                    <small></small>
                </h3>
            </div>
        </div>

        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Reporte de Mascotas</h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">

                        <section class="content invoice">
                            <!-- title row -->
                            <div class="row">
                                <div class="col-xs-12 invoice-header">
                                    <h1>
                                        <i class="fa fa-globe"></i> Veterinaria LAZZIE
                                        <small class="pull-right"></small>
                                    </h1>
                                </div>
                                <div class="col-sm-4 invoice-col">
                                    <h2><strong>Cliente</strong></h2>
                                    <address>
                                        <strong>NOMBRE:</strong>
                                        {{$clientem->nombre.' '.$clientem->apellido}}
                                        <br>
                                        <strong>DIRECCION:</strong>
                                        {{$clientem->direccion}}
                                        <br>
                                    </address>
                                </div>

                                <!-- /.col -->
                            </div>
                            <!-- info row -->

                            <!-- /.row -->

                            <!-- Table row -->
                            <div class="row invoice-info">
                                <h2><strong>Mascotas</strong></h2>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 table">
                                    <table class="table table-striped">
                                        <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>NOMBRE</th>
                                            <th>ESPECIE</th>
                                            <th>RAZA</th>
                                            <th>SEXO</th>
                                            <th>EDAD</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($infmascotas as $item)
                                            <tr>
                                                <td>{{$item->id}}</td>
                                                <td>{{$item->nombre_mascota}}</td>
                                                <td>{{$item->especie_mascota}}</td>
                                                <td>{{$item->raza_mascota}}</td>
                                                <td>{{$item->sexo_mascota}}</td>
                                                <td>{{$item->edad_mascota}}</td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- this row will not appear when printing -->
                            <div class="row no-print">
                                <div class="col-xs-12">
                                    <button class="btn btn-default" onclick="window.print();"><i
                                                class="fa fa-print"></i> Vista Previa
                                    </button>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- jQuery -->
<script src="../vendors/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="../vendors/fastclick/lib/fastclick.js"></script>
<!-- NProgress -->
<script src="../vendors/nprogress/nprogress.js"></script>
<!-- Custom Theme Scripts -->
<script src="../build/js/custom.min.js"></script>

</body>
</html>