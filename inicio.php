<?php
include('link.php');
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <title>Inicio</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/stilo.css">  
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
                        <div class="dropdown-menu-button"><i class="zmdi zmdi-store"></i>&nbsp;&nbsp; Productos <i class="zmdi zmdi-chevron-down pull-right zmdi-hc-fw"></i></div>
                        <ul class="list-unstyled">
                            <li><a href="nuevoProducto.php"><i class="zmdi zmdi-collection-plus"></i>&nbsp;&nbsp; Agregar Nuevo Producto</a></li>
                            <li><a href="mostrarPro.php"><i class="zmdi zmdi-collection-text"></i>&nbsp;&nbsp; Listado de Productos</a></li>
                            <li><a href="precioPro.php"><i class="zmdi zmdi-money"></i>&nbsp;&nbsp; Agregar Precio a Productos</a></li>
                            <li><a href="mostrarPrec.php"><i class="zmdi zmdi-money-box"></i>&nbsp;&nbsp; Listado de Productos con su Precio</a></li>
                        </ul>
                    </li>
                    <li>
                        <div class="dropdown-menu-button"><i class="zmdi zmdi-accounts zmdi-hc-fw"></i>&nbsp;&nbsp; Empleados <i class="zmdi zmdi-chevron-down pull-right zmdi-hc-fw"></i></div>
                        <ul class="list-unstyled">
                            <li><a href="nuevoEm.php"><i class="zmdi zmdi-account-add zmdi-hc-fw"></i>&nbsp;&nbsp; Agregar Empleado</a></li>
                            <li><a href="mostrarEm.php"><i class="zmdi zmdi-assignment-account zmdi-hc-fw"></i>&nbsp;&nbsp; Listado de Empleados</a></li>
                        </ul>
                    </li>
                    <li>
                        <div class="dropdown-menu-button"><i class="zmdi zmdi-truck zmdi-hc-fw"></i>&nbsp;&nbsp; Proveedores <i class="zmdi zmdi-chevron-down pull-right zmdi-hc-fw"></i></div>
                        <ul class="list-unstyled">
                            <li><a href="nuevoProv.php"><i class="zmdi zmdi-truck zmdi-hc-fw"></i>&nbsp;&nbsp; Nuevo Proveedor</a></li>
                            <li><a href="mostrarProv.php"><i class="zmdi zmdi-assignment-o zmdi-hc-fw"></i>&nbsp;&nbsp; Listado de Proveedores</a></li>
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
              <h1 class="all-tittles">Vienvenido al Sistema de Almacen<small> Inicio</small></h1>
            </div>
            <div class="edi" >
            <div class="form-group">
            <div class="col-sm-offset-1 col-sm-10">
                    <a href="mostrarPro.php" class="btn btn-primary btn-lg"><i class="zmdi zmdi-store">
                    </i>&nbsp;&nbsp;Listado de los productos</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="mostrarProv.php" class="btn btn-warning btn-lg" ><i class="zmdi zmdi-truck zmdi-hc-fw"></i>&nbsp;&nbsp;Listado de Proveedores</a><br><br><br>
            <a href="mostrarEm.php" class="btn btn-success btn-lg"><i class="zmdi zmdi-accounts zmdi-hc-fw">
                    </i>&nbsp;&nbsp;Listado de Empleados</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="mostrarPrec.php" class="btn btn-danger btn-lg" ><i class="zmdi zmdi-money"></i>&nbsp;&nbsp; Precio de los productos</a><br><br><br>
					</div>
            <div class="col-sm-offset-3 col-sm-5">
            &nbsp;&nbsp;&nbsp;&nbsp; <a href="registrarse.php" class="btn btn-primary"><i class="zmdi zmdi-face zmdi-hc-fw"></i>&nbsp;&nbsp;Nuevo Administrador</a><br><br><br><br><br><br>
            
					</div>
                    <div class="col-sm-offset-4 col-sm-5">
                  
            <a href="index.php" class="btn btn-info" ><i class="zmdi zmdi-power"></i>&nbsp;&nbsp;Salir</a><br>
					</div>
                    
				</div>
            
            
            </div>
            
        </div>
        <section class="full-reset text-center" style="padding: 40px 0;">         
        </section>
        
    </div>
</body>
</html>