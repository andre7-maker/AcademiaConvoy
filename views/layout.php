
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Chameleon Admin is a modern Bootstrap 4 webapp &amp; admin dashboard html template with a large number of components, elegant design, clean and organized code.">
    <meta name="keywords" content="admin template, Chameleon admin template, dashboard template, gradient admin template, responsive admin template, webapp, eCommerce dashboard, analytic dashboard">
    <meta name="author" content="ThemeSelect">
    <title>Tables - Chameleon Admin - Modern Bootstrap 4 WebApp & Dashboard HTML Template + UI Kit</title>
    <link rel="apple-touch-icon" href="assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Muli:300,300i,400,400i,600,600i,700,700i%7CComfortaa:300,400,700" rel="stylesheet">
    <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css" rel="stylesheet">
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors.css">
    <!-- END VENDOR CSS-->
    <!-- BEGIN CHAMELEON  CSS-->
    <link rel="stylesheet" type="text/css" href="assets/css/app-lite.css">
    <!-- END CHAMELEON  CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="assets/css/core/colors/palette-gradient.css">
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
  <body class="vertical-layout vertical-menu 2-columns   menu-expanded fixed-navbar" data-open="click" data-menu="vertical-menu" 
  data-color="bg-gradient-x-purple-blue" data-col="2-columns">

    <!-- fixed-top-->
    

    <!-- ////////////////////////////////////////////////////////////////////////////-->


    <div class="main-menu menu-fixed menu-light menu-accordion    menu-shadow " data-scroll-to-active="true" data-img="assets/images/backgrounds/15.jpg">
      <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">       
          <li class="nav-item mr-auto"><a class="navbar-brand" href="views/inicio.php"><img class="brand-logo" alt="Chameleon admin logo" src="assets/images/logo/logo-tek-small.png"/>
              </a></li>
          <li class="nav-item d-md-none"><a class="nav-link close-navbar"><i class="ft-x"></i></a></li>
        </ul>
      </div>
      <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
          <li class=" nav-item"><a href="views/inicio.php"><i style="color: white;" class="ft-home"></i><span class="menu-title" data-i18n="">Inicio</span></a>
          </li>
          <li class=" nav-item"><a href="?controller=usuarios&method=verEmpleado"><i style="color: white;" class="la la-users"></i><span class="menu-title" data-i18n="">Empleado</span></a>
          </li>
          <li class=" nav-item"><a href="?controller=mensualidad"><i style="color: white;" class="la la-dollar"></i><span class="menu-title" data-i18n="">Mensualidad</span></a>
          </li>
          <li class=" nav-item"><a href="?controller=usuarios&method=verDeportista"><i style="color: white;" class="la la-user-plus"></i><span class="menu-title" data-i18n="">Deportistas</span></a>
          </li>
          <li class=" nav-item"><a href="?controller=matricula"><i style="color: white;" class="la la-file-text-o"></i><span class="menu-title" data-i18n="">Matriculas</span></a>
          </li>
        </ul>
      </div>
    
    </div>
    <nav class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-semi-light">
      <div class="navbar-wrapper">
        <div class="navbar-container content">
          <div class="collapse navbar-collapse show" id="navbar-mobile">
            <ul class="nav navbar-nav mr-auto float-left">
              <li class="nav-item d-block d-md-none"><a class="nav-link nav-menu-main menu-toggle hidden-xs is-active" href="#"><i class="ft-menu"></i></a></li>
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
              <li class="dropdown dropdown-language nav-item"><a class="dropdown-toggle nav-link" id="dropdown-flag" 
              href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="flag-icon flag-icon-us"></i><span class="selected-language"></span></a>
                <div class="dropdown-menu" aria-labelledby="dropdown-flag">
                  <div class="arrow_box"><a class="dropdown-item" href="#"><i class="flag-icon flag-icon-us">
                  </i> English</a><a class="dropdown-item" href="#"><i class="flag-icon flag-icon-cn"></i> Chinese</a>
                  <a class="dropdown-item" href="#"><i class="flag-icon flag-icon-ru"></i> Russian</a><a class="dropdown-item" href="#"><i class="flag-icon flag-icon-fr">
                  </i> French</a><a class="dropdown-item" href="#"><i class="flag-icon flag-icon-es"></i> Spanish</a></div>
                </div>
              </li>
            </ul>
            <ul class="nav navbar-nav float-right">
              <li class="dropdown dropdown-notification nav-item"><a class="nav-link nav-link-label" href="#" data-toggle="dropdown"><i class="ficon ft-mail">             </i></a>
                <div class="dropdown-menu dropdown-menu-right">
                  <div class="arrow_box_right"><a class="dropdown-item" href="#"><i class="ft-book"></i> Read Mail</a><a class="dropdown-item" href="#">
                  <i class="ft-bookmark"></i> Read Later</a><a class="dropdown-item" href="#"><i class="ft-check-square"></i> Mark all Read       </a></div>
                </div>
              </li>
              <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">             <span class="avatar avatar-online"><img src="assets/images/portrait/small/avatar-s-19.png" alt="avatar"><i></i></span></a>
                <div class="dropdown-menu dropdown-menu-right">
                  <div class="arrow_box_right"><a class="dropdown-item" href="#"><span class="avatar avatar-online"><img src="assets/images/portrait/small/avatar-s-19.png" alt="avatar"><span class="user-name text-bold-700 ml-1">Adiministrador</span></span></a>
                    <div class="dropdown-divider"></div><a class="dropdown-item" href="#"><i class="ft-user"></i> Editar perfil</a>
                    <div class="dropdown-divider"></div><a class="dropdown-item" href="Login2.0/index.php"
                    ><i class="ft-power"></i> Cerrar sesión</a>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>

   

    <script src="assets/vendors/js/vendors.min.js" type="text/javascript"></script>
    <script src="assets/js/core/app-menu-lite.js" type="text/javascript"></script>
    <script src="assets/js/core/app-lite.js" type="text/javascript"></script>


  </body>
</html>