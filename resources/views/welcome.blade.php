{{--
<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Documentation</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
    </body>
</html>
--}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Veterinaria | VLG</title>


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
                    <span class="brand-text">Veterinaria VLG</span>
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
                <li>
                    <div class="custom-search-form">
                        <label class="btn btn-trans" for="search-input" data-toggle="collapse" data-target="#nav-searchbox">
                            <i class="demo-pli-magnifi-glass"></i>
                        </label>
                        <form>
                            <div class="search-container collapse" id="nav-searchbox">
                                <input id="search-input" type="text" class="form-control" placeholder="Busca Algo...">
                            </div>
                        </form>
                    </div>
                </li>
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

        <!--Page content-->
        <!--===================================================-->
        <div id="page-content">
            <h4>Veterinaria VLG</h4>
            <div class="panel">
                <div class="pad-all">
                    <div id="demo-gallery-2" style="display:none;">

                        <a href="#">
                            <img alt="The winding road"
                                 src="img/gallery/thumbs/tile1.jpg"
                                 data-image="img/gallery/big/tile1.jpg"
                                 data-description="The winding road description"
                                 style="display:none">
                        </a>

                        <a href="#">
                            <img alt="Pancake"
                                 src="img/gallery/thumbs/tile2.jpg"
                                 data-image="img/gallery/big/tile2.jpg"
                                 data-description="A pancake is a flat cake, often thin and round, prepared from a starch-based batter"
                                 style="display:none">
                        </a>

                        <a href="#">
                            <img alt="Foreshore"
                                 src="img/gallery/thumbs/tile3.jpg"
                                 data-image="img/gallery/big/tile3.jpg"
                                 data-description="The part of a shore between high- and low-water marks, or between the water and cultivated or developed land."
                                 style="display:none">
                        </a>

                        <a href="#">
                            <img alt="Yellow Flowers"
                                 src="img/gallery/thumbs/tile4.jpg"
                                 data-image="img/gallery/big/tile4.jpg"
                                 data-description="Those are yellow flowers"
                                 style="display:none">
                        </a>

                        <a href="#">
                            <img alt="Waterfall"
                                 src="img/gallery/thumbs/tile5.jpg"
                                 data-image="img/gallery/big/tile5.jpg"
                                 data-description="A waterfall is a place where water flows over a vertical drop or a series of steep drops in the course of a stream or river."
                                 style="display:none">
                        </a>

                        <a href="#">
                            <img alt="Pumpkin"
                                 src="img/gallery/thumbs/tile6.jpg"
                                 data-image="img/gallery/big/tile6.jpg"
                                 data-description="A pumpkin is a cultivar of a squash plant, most commonly of Cucurbita pepo, that is round, with smooth, slightly ribbed skin, and deep yellow to orange coloration."
                                 style="display:none">
                        </a>

                        <a href="#">
                            <img alt="In the jungle"
                                 src="img/gallery/thumbs/tile7.jpg"
                                 data-image="img/gallery/big/tile7.jpg"
                                 data-description="This is my car"
                                 style="display:none">
                        </a>

                        <a href="#">
                            <img alt="Note"
                                 src="img/gallery/thumbs/tile8.jpg"
                                 data-image="img/gallery/big/tile8.jpg"
                                 data-description="This is a note"
                                 style="display:none">
                        </a>

                        <a href="#">
                            <img alt="Off-Road Motorcycle"
                                 src="img/gallery/thumbs/tile9.jpg"
                                 data-image="img/gallery/big/tile9.jpg"
                                 data-description="This is a motorcycle"
                                 style="display:none">
                        </a>

                        <a href="#">
                            <img alt="Adventure"
                                 src="img/gallery/thumbs/tile10.jpg"
                                 data-image="img/gallery/big/tile10.jpg"
                                 data-description="River Adventure Camping"
                                 style="display:none">
                        </a>

                        <a href="#">
                            <img alt="The winding road"
                                 src="img/gallery/thumbs/tile1.jpg"
                                 data-image="img/gallery/big/tile1.jpg"
                                 data-description="The winding road description"
                                 style="display:none">
                        </a>

                        <a href="#">
                            <img alt="Pancake"
                                 src="img/gallery/thumbs/tile2.jpg"
                                 data-image="img/gallery/big/tile2.jpg"
                                 data-description="A pancake is a flat cake, often thin and round, prepared from a starch-based batter"
                                 style="display:none">
                        </a>

                        <a href="#">
                            <img alt="Foreshore"
                                 src="img/gallery/thumbs/tile3.jpg"
                                 data-image="img/gallery/big/tile3.jpg"
                                 data-description="The part of a shore between high- and low-water marks, or between the water and cultivated or developed land."
                                 style="display:none">
                        </a>

                        <a href="#">
                            <img alt="Yellow Flowers"
                                 src="img/gallery/thumbs/tile4.jpg"
                                 data-image="img/gallery/big/tile4.jpg"
                                 data-description="Those are yellow flowers"
                                 style="display:none">
                        </a>

                        <a href="#">
                            <img alt="Waterfall"
                                 src="img/gallery/thumbs/tile5.jpg"
                                 data-image="img/gallery/big/tile5.jpg"
                                 data-description="A waterfall is a place where water flows over a vertical drop or a series of steep drops in the course of a stream or river."
                                 style="display:none">
                        </a>

                        <a href="#">
                            <img alt="Pumpkin"
                                 src="img/gallery/thumbs/tile6.jpg"
                                 data-image="img/gallery/big/tile6.jpg"
                                 data-description="A pumpkin is a cultivar of a squash plant, most commonly of Cucurbita pepo, that is round, with smooth, slightly ribbed skin, and deep yellow to orange coloration."
                                 style="display:none">
                        </a>

                        <a href="#">
                            <img alt="In the jungle"
                                 src="img/gallery/thumbs/tile7.jpg"
                                 data-image="img/gallery/big/tile7.jpg"
                                 data-description="This is my car"
                                 style="display:none">
                        </a>

                        <a href="#">
                            <img alt="Note"
                                 src="img/gallery/thumbs/tile8.jpg"
                                 data-image="img/gallery/big/tile8.jpg"
                                 data-description="This is a note"
                                 style="display:none">
                        </a>

                        <a href="#">
                            <img alt="Off-Road Motorcycle"
                                 src="img/gallery/thumbs/tile9.jpg"
                                 data-image="img/gallery/big/tile9.jpg"
                                 data-description="This is a motorcycle"
                                 style="display:none">
                        </a>
                    </div>
                </div>
            </div>
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
