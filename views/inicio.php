<?php

  session_start();
  if(!isset($_SESSION['usuario'])){
    echo '
      <script>
        alert("Por favor debes iniciar sesion");
        window.location = "login.php";
      </script>
    ';
    //header("location: login.php");
    session_destroy();
    die();
  }

  session_destroy();

?>


<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Chameleon Admin is a modern Bootstrap 4 webapp &amp; admin dashboard html template with a large number of components, elegant design, clean and organized code.">
    <meta name="keywords" content="admin template, Chameleon admin template, dashboard template, gradient admin template, responsive admin template, webapp, eCommerce dashboard, analytic dashboard">
    <meta name="author" content="ThemeSelect">
    <title>Tkd Convoy </title>
    <link rel="apple-touch-icon" href="../theme-assets/images/ico/apple-icon-120.jpg">
    <link rel="shortcut icon" type="image/x-icon" href="../theme-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Muli:300,300i,400,400i,600,600i,700,700i%7CComfortaa:300,400,700" rel="stylesheet">
    <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css" rel="stylesheet">
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="../theme-assets/css/vendors.css">
    <link rel="stylesheet" type="text/css" href="../theme-assets/vendors/css/charts/chartist.css">
    <!-- END VENDOR CSS-->
    <!-- BEGIN CHAMELEON  CSS-->
    <link rel="stylesheet" type="text/css" href="../theme-assets/css/app-lite.css">
    <!-- END CHAMELEON  CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="../theme-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="../theme-assets/css/core/colors/palette-gradient.css">
    <link rel="stylesheet" type="text/css" href="../theme-assets/css/pages/dashboard-ecommerce.css">
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <!-- END Custom CSS-->
    <style type="text/css">
      .main-menu.menu-light .navigation > li.activo > a
        {
          color: black;
          background-color: white;
          border-radius: 20px;
        }
      .main-menu.menu-light .navigation > li.hover > a,
      .main-menu.menu-light .navigation > li:hover > a,
      .main-menu.menu-light .navigation > li.active > a
        {
          color: #000;
        }
        body.vertical-layout.vertical-menu.menu-expanded .main-menu.menu-light .navigation > li > a > i
        {
    line-height: 40px;

    display: inline-block;

    width: 40px;
    height: 40px;
    margin-right: 20px;

    text-align: center;
    vertical-align: middle;

    border-radius: 12%;
    background: #c30000;
    -webkit-box-shadow: 0 0 10px rgba(0, 0, 0, .12);
            box-shadow: 0 0 10px rgba(0, 0, 0, .12);
        }
        body.vertical-layout[data-color=bg-gradient-x-purple-blue] .navbar-container,
        body.vertical-layout[data-color=bg-gradient-x-purple-blue] .content-wrapper-before
        {
      background-image: -webkit-gradient(linear, left top, right top, from(#870000), to(#190A05));
      background-image: -webkit-linear-gradient(left, #870000, #190A05);
      background-image:    -moz-linear-gradient(left, #870000, #190A05);
      background-image:      -o-linear-gradient(left, #870000, #190A05);
      background-image:         linear-gradient(to right, #870000, #190A05);
      background-repeat: repeat-x;
        }
        .navbar-header .navbar-brand .brand-logo
        {
          margin-top: 0;
          width: 200px;
          font-size: 100px;
        }
        .main-menu.menu-light .navigation
        {
            position: relative;
            z-index: 4;
            margin-top: 100px;
        }
        .main-menu.menu-light .navigation li a
        {
            -webkit-transition: all .2s ease;
               -moz-transition: all .2s ease;
                 -o-transition: all .2s ease;
                    transition: all .2s ease; 

            color: black;
        }
    </style>
  </head>
  <body class="vertical-layout vertical-menu 2-columns   menu-expanded fixed-navbar" data-open="click" data-menu="vertical-menu" data-color="bg-chartbg" data-col="2-columns">

    <!-- fixed-top-->
    <nav class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-semi-light">
      <div class="navbar-wrapper">
        <div class="navbar-container content">
          <div class="collapse navbar-collapse show" id="navbar-mobile">
            <ul class="nav navbar-nav mr-auto float-left">
              <li class="nav-item d-block d-md-none"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu"></i></a></li>
              <li class="nav-item d-none d-md-block"><a class="nav-link nav-link-expand" href="#"><i class="ficon ft-maximize"></i></a></li>
              <li class="nav-item dropdown navbar-search"><a class="nav-link dropdown-toggle hide" data-toggle="dropdown" href="#"><i class="ficon ft-search"></i></a>
                <ul class="dropdown-menu">
                  <li class="arrow_box">
                    <form>
                      <div class="input-group search-box">
                        <div class="position-relative has-icon-right full-width">
                          <input class="form-control" id="search" type="text" placeholder="Search here...">
                          <div class="form-control-position navbar-search-close"><i class="ft-x">   </i></div>
                        </div>
                      </div>
                    </form>
                  </li>
                </ul>
              </li>
            </ul>

            <ul class="nav navbar-nav float-right">
              <li class="dropdown dropdown-notification nav-item"><a class="nav-link nav-link-label" href="#" data-toggle="dropdown"><i class="ficon ft-mail">             </i></a>
                <div class="dropdown-menu dropdown-menu-right">
                  <div class="arrow_box_right"><a class="dropdown-item" href="#"><i class="ft-book"></i> Read Mail</a><a class="dropdown-item" href="#"><i class="ft-bookmark"></i> Read Later</a><a class="dropdown-item" href="#"><i class="ft-check-square"></i> Mark all Read       </a></div>
                </div>
                            <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown"><span class="avatar avatar-online"><img src="../assets/images/portrait/small/avatar-s-19.png" alt="avatar"><i></i></span></a>
                <div class="dropdown-menu dropdown-menu-right">
                  <div class="arrow_box_right"><a class="dropdown-item" href="#"><span class="avatar avatar-online"><img src="../assets/images/portrait/small/avatar-s-19.png" alt="avatar"><span class="user-name text-bold-600 ml-1">Adimin</span></span></a>
                    <div class="dropdown-divider"></div><a class="dropdown-item" href="#"><i class="ft-user"></i> Editar perfil</a>
                    <div class="dropdown-divider"></div><a class="dropdown-item" href="../controllers/Cerrar_Sesion.php"><i class="ft-power"></i> Cerrar sesión</a>
                  </div>
                </div>
              </li>
              </li>
              
                
              
            </ul>
          </div>
        </div>
      </div>
    </nav>

    <!-- ////////////////////////////////////////////////////////////////////////////-->


    <div class="main-menu menu-fixed menu-light menu-accordion    menu-shadow " data-scroll-to-active="true" data-img="assets/images/backgrounds/15.jpg">
      <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">       
          <li class="nav-item mr-auto"><a class="navbar-brand" href="inicio.php"><img class="brand-logo" alt="Chameleon admin logo" src="../assets/images/logo/logo-tek-small.png"/>
              </a></li>
          <li class="nav-item d-md-none"><a class="nav-link close-navbar"><i class="ft-x"></i></a></li>
        </ul>
      </div>
      <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
          <li class=" nav-item"><a href="inicio.php"><i style="color: white;" class="ft-home"></i><span class="menu-title" data-i18n="">Inicio</span></a>
          </li>
          <li class=" nav-item"><a href="../?controller=usuarios&method=verEmpleado"><i style="color: white;" class="la la-users"></i><span class="menu-title" data-i18n="">Empleado</span></a>
          </li>
          <li class=" nav-item"><a href="../?controller=mensualidad"><i style="color: white;" class="la la-dollar"></i><span class="menu-title" data-i18n="">Mensualidad</span></a>
          </li>
          <li class=" nav-item"><a href="../?controller=usuarios&method=verDeportista"><i style="color: white;" class="la la-user-plus"></i><span class="menu-title" data-i18n="">Deportistas</span></a>
          </li>
          <li class=" nav-item"><a href="../?controller=matricula"><i style="color: white;" class="la la-file-text-o"></i><span class="menu-title" data-i18n="">Matriculas</span></a>
          </li>
        </ul>
      </div>
      <div class="navigation-background"></div>
    </div>

    <div class="app-content content">
      <div class="content-wrapper">
        <div class="content-wrapper-before"></div>
        <div class="content-header row">
        </div>
        <div class="content-body"><!-- Chart -->
<div class="row match-height">
    <div class="col-12">
        <div class="">
            <div id="gradient-line-chart1" class="height-250 GradientlineShadow1"></div>
        </div>
    </div>
</div>
<!-- Chart -->
<!-- eCommerce statistic -->
<div class="row">
    <div class="col-xl-4 col-lg-6 col-md-12">
        <div class="card pull-up ecom-card-1 bg-white">
            <div class="card-content ecom-card2 height-180">
                <h5 class="text-muted danger position-absolute p-1">Progreso de estado</h5>
                <div>
                    <i class="ft-pie-chart danger font-large-1 float-right p-1"></i>
                </div>
                <div class="progress-stats-container ct-golden-section height-75 position-relative pt-3  ">
                    <div id="progress-stats-bar-chart"></div>
                    <div id="progress-stats-line-chart" class="progress-stats-shadow"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-lg-6 col-md-12">
        <div class="card pull-up ecom-card-1 bg-white">
            <div class="card-content ecom-card2 height-180">
                <h5 class="text-muted info position-absolute p-1">Estadisticas de actividad</h5>
                <div>
                    <i class="ft-activity info font-large-1 float-right p-1"></i>
                </div>
                <div class="progress-stats-container ct-golden-section height-75 position-relative pt-3">
                    <div id="progress-stats-bar-chart1"></div>
                    <div id="progress-stats-line-chart1" class="progress-stats-shadow"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-lg-12">
        <div class="card pull-up ecom-card-1 bg-white">
            <div class="card-content ecom-card2 height-180">
                <h5 class="text-muted warning position-absolute p-1">Salidas de estados</h5>
                <div>
                    <i class="ft-shopping-cart warning font-large-1 float-right p-1"></i>
                </div>
                <div class="progress-stats-container ct-golden-section height-75 position-relative pt-3">
                    <div id="progress-stats-bar-chart2"></div>
                    <div id="progress-stats-line-chart2" class="progress-stats-shadow"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/ eCommerce statistic -->

<!-- Statistics -->
<div class="row match-height">
    <div class="col-xl-4 col-lg-12">
            
    </div>
    <div class="col-xl-4 col-lg-12" style="width: 500px">
        <div class="card">

            <div class="card-content" >
                
                <div  id="carousel-area" class="carousel slide" data-ride="carousel"  >
                    
                
                    
    <div class="col-xl-4 col-lg-12">
        <div class="card">
            
            <div class="card-content">
                <div id="recent-buyers" class="media-list">
                    
                   
                   
                    
                </div>
            </div>
        </div>
    </div>
</div>
<!--/ Statistics -->
        </div>
      </div>
    </div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->


    <footer class="footer footer-static footer-light navbar-border navbar-shadow">
      <div class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2"><span class="float-md-left d-block d-md-inline-block">2020  &copy; Copyright <a class="text-bold-800 grey darken-2" href="https://themeselection.com" target="_blank">Cristian Camilo Guerra Garcia-Jose Luis Londoño Benitez-Andre Nicolay Londoño Benitez</a></span>
      </div>
    </footer>

    <!-- BEGIN VENDOR JS-->
    <script src="../theme-assets/vendors/js/vendors.min.js" type="text/javascript"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <script src="../theme-assets/vendors/js/charts/chartist.min.js" type="text/javascript"></script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN CHAMELEON  JS-->
    <script src="../theme-assets/js/core/app-menu-lite.js" type="text/javascript"></script>
    <script src="../theme-assets/js/core/app-lite.js" type="text/javascript"></script>
    <!-- END CHAMELEON  JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="../theme-assets/js/scripts/pages/dashboard-lite.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL JS-->
  </body>
</html>