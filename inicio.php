<!DOCTYPE html>
<html lang="es">
<head>
    <title>Inicio</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="Shortcut Icon" type="image/x-icon" href="assets/icons/icon.jpg" />
    <script src="js/sweet-alert.min.js"></script>
    <link rel="stylesheet" href="css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery-1.11.2.min.js"><\/script>')</script>
    <script src="js/modernizr.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/main.js"></script>
</head>
<body>
    <div class="navbar-lateral full-reset">
        <div class="visible-xs font-movile-menu mobile-menu-button"></div>
        <div class="full-reset container-menu-movile custom-scroll-containers">
            <div class="logo ">
                <i class="visible-xs zmdi zmdi-close pull-left mobile-menu-button" 
                style="line-height: 55px; 
                       cursor: pointer; 
                       padding: 0 10px; 
                       margin-left: 7px;">
                </i> 
                Sistema de Almacen
            </div>
            <div>
                <figure>
                    <img src="assets/img/logo.jpg" alt="Biblioteca" class="img-responsive center-box"
                     style="width:100%; height: 100%;">
                </figure>
                
            </div>
            <div class="full-reset nav-lateral-list-menu">
                <ul class="list-unstyled">
                    <li><a href="inicio.php"><i class="zmdi zmdi-home zmdi-hc-fw"></i>&nbsp;&nbsp; Inicio</a></li>
                    <li>
                        <div class="dropdown-menu-button"><i class="zmdi zmdi-store"></i>&nbsp;&nbsp; Articulos <i class="zmdi zmdi-chevron-down pull-right zmdi-hc-fw"></i></div>
                        <ul class="list-unstyled">
                            <li><a href="nuevoProducto.php"><i class="zmdi zmdi-collection-plus"></i>&nbsp;&nbsp; Agregar Nuevos Articulos</a></li>
                            <li><a href=""><i class="zmdi zmdi-collection-text"></i>&nbsp;&nbsp; Listado de Articulos</a></li>
                            <li><a href=""><i class="zmdi zmdi-money"></i>&nbsp;&nbsp; Agregar Precio a Articulos</a></li>
                            <li><a href=""><i class="zmdi zmdi-money-box"></i>&nbsp;&nbsp; Listado de Articulos con su Precio</a></li>
                        </ul>
                    </li>
                    <li>
                        <div class="dropdown-menu-button"><i class="zmdi zmdi-accounts zmdi-hc-fw"></i>&nbsp;&nbsp; Empleados <i class="zmdi zmdi-chevron-down pull-right zmdi-hc-fw"></i></div>
                        <ul class="list-unstyled">
                            <li><a href=""><i class="zmdi zmdi-account-add zmdi-hc-fw"></i>&nbsp;&nbsp; Agregar Empleado</a></li>
                            <li><a href=""><i class="zmdi zmdi-assignment-account zmdi-hc-fw"></i>&nbsp;&nbsp; Listado de Empleados</a></li>
                        </ul>
                    </li>
                    <li>
                        <div class="dropdown-menu-button"><i class="zmdi zmdi-truck zmdi-hc-fw"></i>&nbsp;&nbsp; Proveedores <i class="zmdi zmdi-chevron-down pull-right zmdi-hc-fw"></i></div>
                        <ul class="list-unstyled">
                            <li><a href=""><i class="zmdi zmdi-truck zmdi-hc-fw"></i>&nbsp;&nbsp; Nuevo Proveedor</a></li>
                            <li><a href=""><i class="zmdi zmdi-assignment-o zmdi-hc-fw"></i>&nbsp;&nbsp; Listado de Proveedores</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="content-page-container full-reset custom-scroll-containers">
        <nav class="navbar-user-top full-reset">
            <ul class="list-unstyled full-reset">
              <hy></hy>
                <li class="mobile-menu-button visible-xs" style="float: left !important;">
                    <i class="zmdi zmdi-menu"></i>
                </li>
            </ul>
        </nav>
        <div class="container">
            <div class="page-header">
              <h1 class="all-tittles">Sistema de Almacen<small> Inicio</small></h1>
            </div>
            aqui va todo el codigo
            
        </div>
        <section class="full-reset text-center" style="padding: 40px 0;">         
        </section>
        
    </div>
</body>
</html>