<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Veterinaria | Lazzie</title>


    <!--STYLESHEET-->
    <!--=================================================-->
    <!--Open Sans Font [ OPTIONAL ]-->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>

    <!--Bootstrap Stylesheet [ REQUIRED ]-->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <!--Nifty Stylesheet [ REQUIRED ]-->
    <link href="{{asset('css/nifty.min.css')}}" rel="stylesheet">
    <!--Nifty Premium Icon [ DEMONSTRATION ]-->
    <link href="{{asset('css/demo/nifty-demo-icons.min.css')}}" rel="stylesheet">
    <!--=================================================-->
    <!--Custom Table-->
    <link href="{{asset('plugins/bootstrap-table/bootstrap-table.min.css')}}" rel="stylesheet">
    <!--Custom Table-->
    <!--Pace - Page Load Progress Par [OPTIONAL]-->
    <link href="{{asset('plugins/pace/pace.min.css')}}" rel="stylesheet">
    <script src="{{asset('plugins/pace/pace.min.js')}}"></script>
    <!--Demo [ DEMONSTRATION ]-->
    <link href="{{asset('css/demo/nifty-demo.min.css')}}" rel="stylesheet">
    <!--Unite Gallery [ OPTIONAL ]-->
    <link href="{{asset('plugins/unitegallery/css/unitegallery.min.css')}}" rel="stylesheet">
</head>
<body>
<!--NAVBAR-->
<!--===================================================-->
<header id="navbar">
    <div id="navbar-container" class="boxed">

        <!--Brand logo & name-->
        <!--================================-->
        <div class="navbar-header">
            <a href="index.html" class="navbar-brand">
                <img src="../img/logo.png" alt="Nifty Logo" class="brand-icon">
                <div class="brand-title">
                    <span class="brand-text">Veterinaria Lazzie</span>
                </div>
            </a>
        </div>
        <!--================================-->
        <!--End brand logo & name-->


        <!--Navbar Dropdown-->
        <!--================================-->
        <div class="navbar-content">
            <ul class="nav navbar-top-links">

                <!--Search-->
                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                <!--End Search-->

            </ul>
            <ul class="nav navbar-top-links">


                <!--User dropdown-->
                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

                @if (Route::has('login'))
                    <li id="dropdown-user" class="dropdown">
                        @auth
                        <a href="{{ route('home') }}"> <i class="demo-pli-home"></i> Inicio</a>
                        @else
                            <a href="{{ route('login') }}"> <i class="demo-pli-checked-user"></i> Login</a>
                        @endauth
                    </li>
               @endif
                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                <!--End user dropdown-->
            </ul>
        </div>
        <!--================================-->
        <!--End Navbar Dropdown-->
    </div>
</header>
<!--===================================================-->
<!--END NAVBAR-->
<div class="boxed">

    <!--CONTENT CONTAINER-->
    <!--===================================================-->
    <div id="content-container">
        <div id="page-head">

            <div class="pad-all text-center">
                <h3>Veterinaria Lazzie.</h3>
                <p>Por que el cuidado de tu mascota es tan importante para nosotros como lo es para ti.</p>
            </div>
        </div>
        <!--Page content-->
        <!--===================================================-->
        <div id="page-content">
            <div class="panel">
                <div class="pad-all">
                    <div id="demo-gallery-2" style="display:none;">

                        <a href="#">
                            <img alt="The winding road"
                                 src="img/gallery/thumbs/1.jpg"
                                 data-image="img/gallery/thumbs/1.jpg"
                                 data-description="The winding road description"
                                 style="display:none">
                        </a>
                        <a href="#">
                            <img alt="Pancake"
                                 src="img/gallery/thumbs/2.jpg"
                                 data-image="img/gallery/thumbs/2.jpg"
                                 data-description="A pancake is a flat cake, often thin and round, prepared from a starch-based batter"
                                 style="display:none">
                        </a>
                        <a href="#">
                            <img alt="Foreshore"
                                 src="img/gallery/thumbs/3.png"
                                 data-image="img/gallery/thumbs/3.png"
                                 data-description="The part of a shore between high- and low-water marks, or between the water and cultivated or developed land."
                                 style="display:none">
                        </a>
                        <a href="#">
                            <img alt="Yellow Flowers"
                                 src="img/gallery/thumbs/4.jpg"
                                 data-image="img/gallery/thumbs/4.jpg"
                                 data-description="Those are yellow flowers"
                                 style="display:none">
                        </a>
                        <a href="#">
                            <img alt="Waterfall"
                                 src="img/gallery/thumbs/5.jpg"
                                 data-image="img/gallery/thumbs/5.jpg"
                                 data-description="A waterfall is a place where water flows over a vertical drop or a series of steep drops in the course of a stream or river."
                                 style="display:none">
                        </a>
                        <a href="#">
                            <img alt="Pumpkin"
                                 src="img/gallery/thumbs/6.jpg"
                                 data-image="img/gallery/thumbs/6.jpg"
                                 data-description="A pumpkin is a cultivar of a squash plant, most commonly of Cucurbita pepo, that is round, with smooth, slightly ribbed skin, and deep yellow to orange coloration."
                                 style="display:none">
                        </a>
                        <a href="#">
                            <img alt="In the jungle"
                                 src="img/gallery/thumbs/7.jpg"
                                 data-image="img/gallery/thumbs/7.jpg"
                                 data-description="This is my car"
                                 style="display:none">
                        </a>
                        <a href="#">
                            <img alt="Note"
                                 src="img/gallery/thumbs/8.jpg"
                                 data-image="img/gallery/thumbs/8.jpg"
                                 data-description="This is a note"
                                 style="display:none">
                        </a>

                        <a href="#">
                            <img alt="Off-Road Motorcycle"
                                 src="img/gallery/thumbs/9.png"
                                 data-image="img/gallery/thumbs/9.png"
                                 data-description="This is a motorcycle"
                                 style="display:none">
                        </a>
                        <a href="#">
                            <img alt="Adventure"
                                 src="img/gallery/thumbs/10.jpg"
                                 data-image="img/gallery/thumbs/10.jpg"
                                 data-description="River Adventure Camping"
                                 style="display:none">
                        </a>
                        <a href="#">
                            <img alt="The winding road"
                                 src="img/gallery/thumbs/11.jpg"
                                 data-image="img/gallery/thumbs/11.jpg"
                                 data-description="The winding road description"
                                 style="display:none">
                        </a>

                        <a href="#">
                            <img alt="Pancake"
                                 src="img/gallery/thumbs/12.jpg"
                                 data-image="img/gallery/thumbs/12.jpg"
                                 data-description="A pancake is a flat cake, often thin and round, prepared from a starch-based batter"
                                 style="display:none">
                        </a>

                        <a href="#">
                            <img alt="Foreshore"
                                 src="img/gallery/thumbs/13.jpg"
                                 data-image="img/gallery/thumbs/13.jpg"
                                 data-description="The part of a shore between high- and low-water marks, or between the water and cultivated or developed land."
                                 style="display:none">
                        </a>

                        <a href="#">
                            <img alt="Yellow Flowers"
                                 src="img/gallery/thumbs/14.jpg"
                                 data-image="img/gallery/thumbs/14.jpg"
                                 data-description="Those are yellow flowers"
                                 style="display:none">
                        </a>

                        <a href="#">
                            <img alt="Waterfall"
                                 src="img/gallery/thumbs/15.jpg"
                                 data-image="img/gallery/thumbs/15.jpg"
                                 data-description="A waterfall is a place where water flows over a vertical drop or a series of steep drops in the course of a stream or river."
                                 style="display:none">
                        </a>

                        <a href="#">
                            <img alt="Pumpkin"
                                 src="img/gallery/thumbs/16.jpg"
                                 data-image="img/gallery/thumbs/16.jpg"
                                 data-description="A pumpkin is a cultivar of a squash plant, most commonly of Cucurbita pepo, that is round, with smooth, slightly ribbed skin, and deep yellow to orange coloration."
                                 style="display:none">
                        </a>

                        <a href="#">
                            <img alt="In the jungle"
                                 src="img/gallery/thumbs/17.png"
                                 data-image="img/gallery/thumbs/17.png"
                                 data-description="This is my car"
                                 style="display:none">
                        </a>

                        <a href="#">
                            <img alt="Note"
                                 src="img/gallery/thumbs/18.jpg"
                                 data-image="img/gallery/thumbs/18.jpg"
                                 data-description="This is a note"
                                 style="display:none">
                        </a>

                        <a href="#">
                            <img alt="Off-Road Motorcycle"
                                 src="img/gallery/thumbs/19.jpg"
                                 data-image="img/gallery/thumbs/19.jpg"
                                 data-description="This is a motorcycle"
                                 style="display:none">
                        </a>
                        <a href="#">
                            <img alt="Off-Road Motorcycle"
                                 src="img/gallery/thumbs/19.jpg"
                                 data-image="img/gallery/thumbs/19.jpg"
                                 data-description="This is a motorcycle"
                                 style="display:none">
                        </a>
                        <a href="#">
                            <img alt="Off-Road Motorcycle"
                                 src="img/gallery/thumbs/20.jpg"
                                 data-image="img/gallery/thumbs/20.jpg"
                                 data-description="This is a motorcycle"
                                 style="display:none">
                        </a>
                        <a href="#">
                            <img alt="Off-Road Motorcycle"
                                 src="img/gallery/thumbs/21.jpg"
                                 data-image="img/gallery/thumbs/21.jpg"
                                 data-description="This is a motorcycle"
                                 style="display:none">
                        </a>
                        <a href="#">
                            <img alt="Off-Road Motorcycle"
                                 src="img/gallery/thumbs/22.jpg"
                                 data-image="img/gallery/thumbs/22.jpg"
                                 data-description="This is a motorcycle"
                                 style="display:none">
                        </a>
                        <a href="#">
                            <img alt="Off-Road Motorcycle"
                                 src="img/gallery/thumbs/23.jpg"
                                 data-image="img/gallery/thumbs/23.jpg"
                                 data-description="This is a motorcycle"
                                 style="display:none">
                        </a><a href="#">
                            <img alt="Off-Road Motorcycle"
                                 src="img/gallery/thumbs/24.jpg"
                                 data-image="img/gallery/thumbs/24.jpg"
                                 data-description="This is a motorcycle"
                                 style="display:none">
                        </a>



                    </div>
                </div>
            </div>

            {{--Informacion General--}}
            <div class="panel">
                <div class="panel-body">
                    <div class="fixed-fluid">
                        <div class="fixed-sm-250 pull-sm-right fixed-left-border">

                            <hr class="new-section-md bord-no">

                            <!-- Contact us widget -->
                            <!--===================================================-->
                            <h4>Mas Informacion</h4>
                            <p class="text-sm">Para mayor informacion nos puedes contactar a la pagina de Facebook.</p>
                            <div class="pad-top">
                                <a href="https://www.facebook.com/veterinaria.sudamericana/" class="btn btn-primary">Contactanos</a>
                            </div>
                            <!--===================================================-->
                        </div>

                        <div class="fluid faq-accordion">

                            <!-- GENERAL -->
                            <!--===================================================-->
                            <h4 class="pad-btm bord-btm"><i class="demo-pli-gear icon-fw v-middle"></i> Informacion</h4>
                            <div id="demo-gen-faq" class="panel-group panel-group-trans panel-group-condensed accordion">

                                <div class="panel">
                                    Descripcion: <br>
                                    Telf. 3524183 <br>
                                    Clínica Veterinaria para el cuidado de tus mascotas, contamos con servicios de quirófano, internación, refugio de animales y muchos más.
                                </div>
                                <br>
                                <div class="panel">
                                    <h4 class="pad-btm bord-btm"><i class="demo-pli-clock icon-fw v-middle"></i> Horario</h4>
                                    De Lunes a Viernes 8:00 - 20:00 <br>
                                    Sabado y Domingo 8:00 - 12:30 <br>
                                </div>
                                <div class="panel">
                                    <h4 class="pad-btm bord-btm"><i class="demo-pli-male-female icon-fw v-middle"></i> Servicios</h4>
                                    -Consultas Internas <br>
                                    -Peluqueria <br>
                                    -Ecografia <br>
                                    -Cirugia<br>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{--Informacion General--}}


        </div>
        <!--===================================================-->
        <!--End page content-->

    </div>
    <!--===================================================-->
    <!--END CONTENT CONTAINER-->


</div>
<!--JAVASCRIPT-->
<!--=================================================-->

<!--jQuery [ REQUIRED ]-->
<script src="{{asset('js/jquery.min.js')}}"></script>

<!--BootstrapJS [ RECOMMENDED ]-->
<script src="{{asset('js/bootstrap.min.js')}}"></script>

<!--NiftyJS [ RECOMMENDED ]-->
<script src="{{asset('js/nifty.min.js')}}"></script>

<!--Unite Gallery [ OPTIONAL ]-->
<script src="{{asset('plugins/unitegallery/js/unitegallery.min.js')}}"></script>
<script src="{{asset('plugins/unitegallery/themes/tiles/ug-theme-tiles.js')}}"></script>



<!--Custom script [ DEMONSTRATION ]-->
<!--===================================================-->
<script>
    $(document).on('nifty.ready', function () {


        $("#demo-gallery").unitegallery({
            tiles_type:"nested"
        });


        $("#demo-gallery-2").unitegallery({
            tiles_type:"nested",
            tiles_nested_optimal_tile_width: 150
        });


    });
</script>

</body>
</html>
