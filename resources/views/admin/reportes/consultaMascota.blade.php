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
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">

    <!-- Custom styling plus plugins -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
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
                        <h2>Reporte de Fichas de Atencion
                            <small>Sample user invoice design</small>
                        </h2>

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
                                <!-- /.col -->
                            </div>
                            <!-- info row -->
                            <div class="row invoice-info">
                                <div class="col-sm-4 invoice-col">
                                    <h2><strong>Cliente</strong></h2>
                                    <address>
                                        <strong>NOMBRE:</strong>
                                        {{$infmas->nombrecliente.' '.$infmas->apellido}}
                                        <br>
                                        <strong>DIRECCION:</strong>
                                        {{$infmas->direccion}}
                                        <br>
                                        <strong>TELEFONO:</strong>
                                        {{$infmas->telefono}}<br>
                                        <strong>EMAIL:</strong>
                                        {{$infmas->email}}

                                    </address>
                                </div>
                                <!-- /.col -->
                                <div class="col-sm-4 invoice-col">
                                    <h2><strong>Mascota</strong></h2>
                                    <address>
                                        <strong>NOMBRE:</strong>
                                        {{$infmas->nombre}}
                                        <br>
                                        <strong>RAZA:</strong>
                                        {{$infmas->raza}}
                                        <br>
                                        <strong>SEXO:</strong>
                                        {{$infmas->sexo}}<br>

                                        <strong>EDAD:</strong>
                                        {{$infmas->edad}}<br>

                                    </address>

                                </div>
                                <!-- /.col -->
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->

                            <!-- Table row -->
                            <div class="row">
                                <div class="col-xs-12 table">
                                    <table class="table table-striped">
                                        <thead>
                                        <tr>
                                            <th>NROFICHA</th>
                                            <th>FECHAFICHA</th>
                                            <th>ESTADP</th>
                                            <th>IDSERVICIO</th>
                                            <th>SERVICIO</th>
                                            <th>PRECIOTOTAL(Bs)</th>
                                            <th>PERSONAL</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($inffa as $item)
                                            <tr>
                                                <td>{{$item->id_ficha}}</td>
                                                <td>{{$item->fecha_ficha}}</td>
                                                <td>{{$item->descripcion_estado}}</td>
                                                <td>{{$item->id_servicio}}</td>
                                                <td>{{$item->descripcion_servicio}}</td>
                                                <td>{{$item->precio_total}}</td>
                                                <td>{{$item->nombre_personal}}</td>
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

<!-- page content -->
<!-- /page content -->

<!-- footer content -->
<!-- /footer content -->

<!-- jQuery -->
<script data-cfasync="false" src="/cdn-cgi/scripts/f2bf09f8/cloudflare-static/email-decode.min.js"></script>
<script src="../vendors/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="../vendors/fastclick/lib/fastclick.js"></script>
<!-- NProgress -->
<script src="../vendors/nprogress/nprogress.js"></script>

<!-- Custom Theme Scripts -->
<script src="../build/js/custom.min.js"></script>
<!-- Google Analytics -->
<script>
    (function (i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
        a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-23581568-13', 'auto');
    ga('send', 'pageview');

</script>
</body>
</html>