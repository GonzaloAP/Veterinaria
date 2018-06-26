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
</head>
<body>
<div id="container" class="effect aside-float aside-bright mainnav-lg">

    <!--NAVBAR-->
    <!--===================================================-->
    <header id="navbar">
        <div id="navbar-container" class="boxed">

            <!--Brand logo & name-->
            <!--================================-->
            <div class="navbar-header">
                <a href="#" class="navbar-brand">
                    <img src="../../img/logo.png" alt="Nifty Logo" class="brand-icon">
                    <div class="brand-title">
                        <span class="brand-text">Veterinaria</span>
                    </div>
                </a>
            </div>
            <!--================================-->
            <!--End brand logo & name-->


            <!--Navbar Dropdown-->
            <!--================================-->
            <div class="navbar-content">
                <ul class="nav navbar-top-links">

                    <!--Navigation toogle button-->
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <li class="tgl-menu-btn">
                        <a class="mainnav-toggle" href="#">
                            <i class="demo-pli-list-view"></i>
                        </a>
                    </li>
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <!--End Navigation toogle button-->



                    <!--Search-->
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <li>
                        <div class="custom-search-form">
                            <label class="btn btn-trans" for="search-input" data-toggle="collapse" data-target="#nav-searchbox">
                                <i class="demo-pli-magnifi-glass"></i>
                            </label>
                            <form>
                                <div class="search-container collapse" id="nav-searchbox">
                                    <input id="search-input" type="text" class="form-control" placeholder="Busca algo..">
                                </div>
                            </form>
                        </div>
                    </li>
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <!--End Search-->

                </ul>
                <ul class="nav navbar-top-links">

                    <!--Notification dropdown-->
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <li class="dropdown">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle">
                            <i class="demo-pli-bell"></i>
                            <span class="badge badge-header badge-danger"></span>
                        </a>


                        <!--Notification dropdown menu-->
                        <div class="dropdown-menu dropdown-menu-md dropdown-menu-right">
                            <div class="nano scrollable">
                                <div class="nano-content">
                                    <ul class="head-list">
                                        <li>
                                            <a class="media" href="#">
                                                <div class="media-left">
                                                    <img class="img-circle img-sm" alt="Profile Picture" src="../img/profile-photos/3.png">
                                                </div>
                                                <div class="media-body">
                                                    <p class="mar-no text-nowrap text-main text-semibold">Jackson sent you a message</p>
                                                    <small>40 minutes ago</small>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <!--End notifications dropdown-->



                    <!--User dropdown-->
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <li id="dropdown-user" class="dropdown">
                        <a href="{{ route('logout') }}" data-toggle="dropdown" class="dropdown-toggle text-right"
                           onclick="event.preventDefault();
                           document.getElementById('logout-form').submit();">
                             <span class="ic-user pull-right">
                                    <i class="demo-pli-home"></i>
                                </span>

                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <!--End user dropdown-->

                    <li>
                        <a href="#" class="aside-toggle">
                            <i class="demo-pli-dot-vertical"></i>
                        </a>
                    </li>
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
                    <h3>Veterinaria Online.</h3>
                    <p>Scroll down to see quick links and overviews of your Server, To do list, Order status or get some Help using Nifty.</p>
                </div>
            </div>


            <!--Page content-->
            <!--===================================================-->
            <div id="page-content">

                <!--Contenido-->
                @yield('contenido')
            </div>
            <!--===================================================-->
            <!--End page content-->

        </div>
        <!--===================================================-->
        <!--END CONTENT CONTAINER-->



        <!--ASIDE-->
        <!--===================================================-->
        <aside id="aside-container">
            <div id="aside">
                <div class="nano">
                    <div class="nano-content">

                        <!--Nav tabs-->
                        <!--================================-->
                        <ul class="nav nav-tabs nav-justified">
                            <li class="active">
                                <a href="#demo-asd-tab-1" data-toggle="tab">
                                    <i class="demo-pli-speech-bubble-7 icon-lg"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#demo-asd-tab-3" data-toggle="tab">
                                    <i class="demo-pli-wrench icon-lg icon-fw"></i> Settings
                                </a>
                            </li>
                        </ul>
                        <!--================================-->
                        <!--End nav tabs-->



                        <!-- Tabs Content -->
                        <!--================================-->
                        <div class="tab-content">

                            <!--First tab (Contact list)-->
                            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                            <div class="tab-pane fade in active" id="demo-asd-tab-1">
                                <p class="pad-all text-main text-sm text-uppercase text-bold">
                                    <span class="pull-right badge badge-warning">3</span> Family
                                </p>

                                <!--Family-->
                                <div class="list-group bg-trans">
                                    <a href="#" class="list-group-item">
                                        <div class="media-left pos-rel">
                                            <img class="img-circle img-xs" src="img/profile-photos/2.png" alt="Profile Picture">
                                            <i class="badge badge-success badge-stat badge-icon pull-left"></i>
                                        </div>
                                        <div class="media-body">
                                            <p class="mar-no text-main">Stephen Tran</p>
                                            <small class="text-muteds">Availabe</small>
                                        </div>
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <div class="media-left pos-rel">
                                            <img class="img-circle img-xs" src="img/profile-photos/7.png" alt="Profile Picture">
                                        </div>
                                        <div class="media-body">
                                            <p class="mar-no text-main">Brittany Meyer</p>
                                            <small class="text-muteds">I think so</small>
                                        </div>
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <div class="media-left pos-rel">
                                            <img class="img-circle img-xs" src="img/profile-photos/1.png" alt="Profile Picture">
                                            <i class="badge badge-info badge-stat badge-icon pull-left"></i>
                                        </div>
                                        <div class="media-body">
                                            <p class="mar-no text-main">Jack George</p>
                                            <small class="text-muteds">Last Seen 2 hours ago</small>
                                        </div>
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <div class="media-left pos-rel">
                                            <img class="img-circle img-xs" src="img/profile-photos/4.png" alt="Profile Picture">
                                        </div>
                                        <div class="media-body">
                                            <p class="mar-no text-main">Donald Brown</p>
                                            <small class="text-muteds">Lorem ipsum dolor sit amet.</small>
                                        </div>
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <div class="media-left pos-rel">
                                            <img class="img-circle img-xs" src="img/profile-photos/8.png" alt="Profile Picture">
                                            <i class="badge badge-warning badge-stat badge-icon pull-left"></i>
                                        </div>
                                        <div class="media-body">
                                            <p class="mar-no text-main">Betty Murphy</p>
                                            <small class="text-muteds">Idle</small>
                                        </div>
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <div class="media-left pos-rel">
                                            <img class="img-circle img-xs" src="img/profile-photos/9.png" alt="Profile Picture">
                                            <i class="badge badge-danger badge-stat badge-icon pull-left"></i>
                                        </div>
                                        <div class="media-body">
                                            <p class="mar-no text-main">Samantha Reid</p>
                                            <small class="text-muteds">Offline</small>
                                        </div>
                                    </a>
                                </div>

                                <hr>
                                <p class="pad-all text-main text-sm text-uppercase text-bold">
                                    <span class="pull-right badge badge-success">Offline</span> Friends
                                </p>

                                <!--Works-->
                                <div class="list-group bg-trans">
                                    <a href="#" class="list-group-item">
                                        <span class="badge badge-purple badge-icon badge-fw pull-left"></span> Joey K. Greyson
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <span class="badge badge-info badge-icon badge-fw pull-left"></span> Andrea Branden
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <span class="badge badge-success badge-icon badge-fw pull-left"></span> Johny Juan
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <span class="badge badge-danger badge-icon badge-fw pull-left"></span> Susan Sun
                                    </a>
                                </div>


                                <hr>
                                <p class="pad-all text-main text-sm text-uppercase text-bold">News</p>

                                <div class="pad-hor">
                                    <p>Lorem ipsum dolor sit amet, consectetuer
                                        <a data-title="45%" class="add-tooltip text-semibold text-main" href="#">adipiscing elit</a>, sed diam nonummy nibh. Lorem ipsum dolor sit amet.
                                    </p>
                                    <small><em>Last Update : Des 12, 2014</em></small>
                                </div>


                            </div>
                            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                            <!--End first tab (Contact list)-->
                            <!--Third tab (Settings)-->
                            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                            <div class="tab-pane fade" id="demo-asd-tab-3">
                                <ul class="list-group bg-trans">
                                    <li class="pad-top list-header">
                                        <p class="text-main text-sm text-uppercase text-bold mar-no">Account Settings</p>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="pull-right">
                                            <input class="toggle-switch" id="demo-switch-1" type="checkbox" checked>
                                            <label for="demo-switch-1"></label>
                                        </div>
                                        <p class="mar-no text-main">Show my personal status</p>
                                        <small class="text-muted">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</small>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="pull-right">
                                            <input class="toggle-switch" id="demo-switch-2" type="checkbox" checked>
                                            <label for="demo-switch-2"></label>
                                        </div>
                                        <p class="mar-no text-main">Show offline contact</p>
                                        <small class="text-muted">Aenean commodo ligula eget dolor. Aenean massa.</small>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="pull-right">
                                            <input class="toggle-switch" id="demo-switch-3" type="checkbox">
                                            <label for="demo-switch-3"></label>
                                        </div>
                                        <p class="mar-no text-main">Invisible mode </p>
                                        <small class="text-muted">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. </small>
                                    </li>
                                </ul>


                                <hr>

                                <ul class="list-group pad-btm bg-trans">
                                    <li class="list-header"><p class="text-main text-sm text-uppercase text-bold mar-no">Public Settings</p></li>
                                    <li class="list-group-item">
                                        <div class="pull-right">
                                            <input class="toggle-switch" id="demo-switch-4" type="checkbox" checked>
                                            <label for="demo-switch-4"></label>
                                        </div>
                                        Online status
                                    </li>
                                    <li class="list-group-item">
                                        <div class="pull-right">
                                            <input class="toggle-switch" id="demo-switch-5" type="checkbox" checked>
                                            <label for="demo-switch-5"></label>
                                        </div>
                                        Show offline contact
                                    </li>
                                    <li class="list-group-item">
                                        <div class="pull-right">
                                            <input class="toggle-switch" id="demo-switch-6" type="checkbox" checked>
                                            <label for="demo-switch-6"></label>
                                        </div>
                                        Show my device icon
                                    </li>
                                </ul>



                                <hr>

                                <p class="pad-hor text-main text-sm text-uppercase text-bold mar-no">Task Progress</p>
                                <div class="pad-all">
                                    <p class="text-main">Upgrade Progress</p>
                                    <div class="progress progress-sm">
                                        <div class="progress-bar progress-bar-success" style="width: 15%;"><span class="sr-only">15%</span></div>
                                    </div>
                                    <small>15% Completed</small>
                                </div>
                                <div class="pad-hor">
                                    <p class="text-main">Database</p>
                                    <div class="progress progress-sm">
                                        <div class="progress-bar progress-bar-danger" style="width: 75%;"><span class="sr-only">75%</span></div>
                                    </div>
                                    <small>17/23 Database</small>
                                </div>

                            </div>
                            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                            <!--Third tab (Settings)-->

                        </div>
                    </div>
                </div>
            </div>
        </aside>
        <!--===================================================-->
        <!--END ASIDE-->


        <!--MAIN NAVIGATION-->
        <!--===================================================-->
        <nav id="mainnav-container">
            <div id="mainnav">


                <!--OPTIONAL : ADD YOUR LOGO TO THE NAVIGATION-->
                <!--It will only appear on small screen devices.-->
                <!--================================
                <div class="mainnav-brand">
                    <a href="index.html" class="brand">
                        <img src="img/logo.png" alt="Nifty Logo" class="brand-icon">
                        <span class="brand-text">Nifty</span>
                    </a>
                    <a href="#" class="mainnav-toggle"><i class="pci-cross pci-circle icon-lg"></i></a>
                </div>
                -->



                <!--Menu-->
                <!--================================-->
                <div id="mainnav-menu-wrap">
                    <div class="nano">
                        <div class="nano-content">

                            <!--Profile Widget-->
                            <!--================================-->
                            <div id="mainnav-profile" class="mainnav-profile">
                                <div class="profile-wrap text-center">
                                    <div class="pad-btm">
                                        <img class="img-circle img-md" src="../../img/profile-photos/1.png" alt="Profile Picture">
                                    </div>
                                    <a href="#profile-nav" class="box-block" data-toggle="collapse" aria-expanded="false">
                                            <span class="pull-right dropdown-toggle">
                                                <i class="dropdown-caret"></i>
                                            </span>
                                        <p class="mnp-name">{{Auth::User()->nick}}</p>
                                        <span class="mnp-desc">{{Auth::User()->email}}</span>
                                    </a>
                                </div>
                                <div id="profile-nav" class="collapse list-group bg-trans">
                                    <a href="{{ url('/admin/usuario') }}" class="list-group-item">
                                        <i class="demo-pli-male icon-lg icon-fw"></i> Ver Perfil
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <i class="demo-pli-unlock icon-lg icon-fw"></i> Cerrar Sesion
                                    </a>
                                </div>
                            </div>


                            <!--Shortcut buttons-->
                            <!--================================-->
                            <div id="mainnav-shortcut" class="hidden">
                                <ul class="list-unstyled shortcut-wrap">
                                    <li class="col-xs-3" data-content="My Profile">
                                        <a class="shortcut-grid" href="#">
                                            <div class="icon-wrap icon-wrap-sm icon-circle bg-mint">
                                                <i class="demo-pli-male"></i>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="col-xs-3" data-content="Messages">
                                        <a class="shortcut-grid" href="#">
                                            <div class="icon-wrap icon-wrap-sm icon-circle bg-warning">
                                                <i class="demo-pli-speech-bubble-3"></i>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="col-xs-3" data-content="Activity">
                                        <a class="shortcut-grid" href="#">
                                            <div class="icon-wrap icon-wrap-sm icon-circle bg-success">
                                                <i class="demo-pli-thunder"></i>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="col-xs-3" data-content="Lock Screen">
                                        <a class="shortcut-grid" href="#">
                                            <div class="icon-wrap icon-wrap-sm icon-circle bg-purple">
                                                <i class="demo-pli-lock-2"></i>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!--================================-->
                            <!--End shortcut buttons-->

                             @if(Auth::User()->tipo == 'administrador')
                             <!--Menu del Administrador (Inicio)-->
                             <ul id="mainnav-menu" class="list-group">
                                <!--Category name-->
                                <li class="list-header">Menu</li>
                                <!--Menu list item-->
                                <li class="active-sub">
                                    <a href="#">
                                        <i class="demo-pli-home"></i>
                                        <span class="menu-title">Administracion</span>
                                        <i class="arrow"></i>
                                    </a>

                                    <!--Submenu-->
                                    <ul class="collapse in">
                                        <li><a href="{{ url('/admin/personal') }}"> <i class="demo-pli-find-user"></i>Personal</a></li>
                                        <li><a href="{{ url('/admin/promocion') }}"><i class="demo-pli-file-text-image"></i>Promocion</a></li>
                                        <li><a href="{{ url('/admin/servicio') }}"><i class="demo-pli-medal-2"></i>Servicio</a></li>
                                        <li><a href="{{ url('/admin/estado') }}"><i class="demo-pli-support"></i>Estado</a></li>

                                    </ul>
                                </li>
                                <li >
                                    <a href="#">
                                        <i class="demo-pli-male-female"></i>
                                        <span class="menu-title">Atencion a Cliente</span>
                                        <i class="arrow"></i>
                                    </a>

                                    <!--Submenu-->
                                    <ul class="collapse">
                                        <li><a href="{{ url('/admin/cliente') }}"><i class="demo-pli-checked-user"></i>Cliente</a></li>
                                        <li><a href="{{ url('/admin/ficha') }}"><i class="demo-pli-file-edit"></i>Ficha de Atencion</a></li>
                                        <li><a href="{{ url('/admin/detalle') }}"><i class="demo-pli-check"></i>Detalle</a></li>
                                        {{--<li><a href="{{ url('/admin/ficha') }}"><i class="demo-pli-paperclip"></i>Reserva</a></li>--}}

                                    </ul>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="demo-pli-photo-2"></i>
                                        <span class="menu-title">Mascota</span>
                                        <i class="arrow"></i>
                                    </a>

                                    <!--Submenu-->
                                    <ul class="collapse">
                                        <li><a href="{{ url('/admin/mascota') }}"><i class="demo-pli-photos"></i>Mascota</a></li>
                                        <li><a href="{{ url('/admin/tratamiento') }}"><i class="demo-pli-repair"></i>Tratamiento</a></li>
                                        {{--<li><a href="{{ url('/admin/mascota') }}"><i class="demo-pli-file-search"></i>Seguimiento</a></li>--}}
                                        <li><a href="{{ url('/admin/tratamiento') }}"><i class="demo-pli-file-jpg"></i>Historia Clinica</a></li>

                                    </ul>
                                </li>
                                <li>
                                     <a href="#">
                                         <i class="demo-pli-gear"></i>
                                         <span class="menu-title">Herramientas</span>
                                         <i class="arrow"></i>
                                     </a>

                                     <!--Submenu-->
                                     <ul class="collapse">
                                         <li><a href="#"><i class="demo-pli-file-excel"></i>Reportes</a></li>
                                         <li><a href="#"><i class="demo-pli-file-csv"></i>Bitacora</a></li>
                                         <li><a href="#"><i class="demo-pli-file-html"></i>Estadistica</a></li>
                                     </ul>
                                 </li>
                            </ul>
                            <!--Menu del Administrador (Fin)-->
                             @else
                                <ul id="mainnav-menu" class="list-group">
                                    <!--Category name-->
                                    <li class="list-header">Menu</li>
                                    <!--Menu del Cliente (Inicio)-->
                                    @if(Auth::User()->tipo == 'cliente')
                                    <li class="active-sub">
                                        <a href="#">
                                            <i class="demo-pli-home"></i>
                                            <span class="menu-title">Administracion</span>
                                            <i class="arrow"></i>
                                        </a>

                                        <!--Submenu-->
                                        <ul class="collapse in">
                                            <li><a href="{{ url('/admin/personal') }}"> <i class="demo-pli-find-user"></i>Personal</a></li>
                                            <li><a href="{{ url('/admin/promocion') }}"><i class="demo-pli-file-text-image"></i>Promocion</a></li>
                                            <li><a href="{{ url('/admin/servicio') }}"><i class="demo-pli-medal-2"></i>Servicio</a></li>
                                            <li><a href="{{ url('/admin/estado') }}"><i class="demo-pli-support"></i>Estado</a></li>

                                        </ul>
                                    </li>
                                    <!--Menu del Cliente (Fin)-->
                                    @else
                                    <!--Menu del Personal (Inicio)-->
                                    <li class="active-sub">
                                        <a href="#">
                                            <i class="demo-pli-male-female"></i>
                                            <span class="menu-title">Atencion a Cliente</span>
                                            <i class="arrow"></i>
                                        </a>

                                        <!--Submenu-->
                                        <ul class="collapse">
                                            <li><a href="{{ url('/admin/cliente') }}"><i class="demo-pli-checked-user"></i>Cliente</a></li>
                                            <li><a href="{{ url('/admin/ficha') }}"><i class="demo-pli-file-edit"></i>Ficha de Atencion</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="demo-pli-photo-2"></i>
                                            <span class="menu-title">Mascota</span>
                                            <i class="arrow"></i>
                                        </a>

                                        <!--Submenu-->
                                        <ul class="collapse">
                                            <li><a href="{{ url('/admin/mascota') }}"><i class="demo-pli-photos"></i>Mascota</a></li>
                                            <li><a href="{{ url('/admin/tratamiento') }}"><i class="demo-pli-repair"></i>Tratamiento</a></li>
                                            <li><a href="{{ url('/admin/tratamiento') }}"><i class="demo-pli-file-jpg"></i>Historia Clinica</a></li>

                                        </ul>
                                    </li>
                                    <!--Menu del Personal (Fin)-->
                                    @endif
                                </ul>
                             @endif

                        </div>
                    </div>
                </div>
                <!--================================-->
                <!--End menu-->

            </div>
        </nav>
        <!--===================================================-->
        <!--END MAIN NAVIGATION-->

    </div>



    <!-- FOOTER -->
    <!--===================================================-->
    <footer id="footer">

        <!-- Visible when footer positions are fixed -->
        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
        <div class="show-fixed pad-rgt pull-right">
            You have <a href="#" class="text-main"><span class="badge badge-danger">3</span> pending action.</a>
        </div>



        <!-- Visible when footer positions are static -->
        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
        <div class="hide-fixed pull-right pad-rgt">
            Veterinaria <strong>VLG</strong> .
        </div>



        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
        <!-- Remove the class "show-fixed" and "hide-fixed" to make the content always appears. -->
        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

        <p class="pad-lft">&#0169; 2018 2do Parcial - Tecnologia Web</p>



    </footer>
    <!--===================================================-->
    <!-- END FOOTER -->


    <!-- SCROLL PAGE BUTTON -->
    <!--===================================================-->
    <button class="scroll-top btn">
        <i class="pci-chevron chevron-up"></i>
    </button>
    <!--===================================================-->
</div>
<!--===================================================-->
<!-- END OF CONTAINER -->

<!--JAVASCRIPT-->
<!--=================================================-->

<!--jQuery [ REQUIRED ]-->
<script src="{{asset('js/jquery.min.js')}}"></script>

<!--BootstrapJS [ RECOMMENDED ]-->
<script src="{{asset('js/bootstrap.min.js')}}"></script>

<!--NiftyJS [ RECOMMENDED ]-->
<script src="{{asset('js/nifty.min.js')}}"></script>

<!--Demo script [ DEMONSTRATION ]-->
{{--
<script src="{{asset('js/demo/nifty-demo.min.js')}}"></script>
--}}

<!--Flot Chart [ OPTIONAL ]-->
<script src="{{asset('plugins/flot-charts/jquery.flot.min.js')}}"></script>
<script src="{{asset('plugins/flot-charts/jquery.flot.resize.min.js')}}"></script>
<script src="{{asset('plugins/flot-charts/jquery.flot.tooltip.min.js')}}"></script>

<!--Sparkline [ OPTIONAL ]-->
<script src="{{asset('plugins/sparkline/jquery.sparkline.min.js')}}"></script>

<!--Specify page [ SAMPLE ]-->
<script src="{{asset('js/demo/dashboard.js')}}"></script>
<!--Custom Table-->
<script src="{{asset('plugins/bootstrap-table/bootstrap-table.min.js')}}"></script>

@stack('scripts');

</body>
</html>
