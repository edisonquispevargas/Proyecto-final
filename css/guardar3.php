<?php
include('link.php');
require '../conexion.php';

$nombre = $_POST['nombre'];
$direccion = $_POST['direccion'];
$telefono = $_POST['telefono'];
$email = $_POST['email'];
$producto = $_POST['producto'];


$sql = "INSERT INTO proveedor(nombre_proveedor,direccion,telefono,email,producto_servicio) 
    VALUES ('$nombre','$direccion','$telefono','$email','$producto')";
    
    $resultado = $mysqli->query($sql);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <title>proveedor guardado</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
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
                    <img src="../assets/img/logo.jpg" alt="Biblioteca" class="img-responsive center-box"
                     style="width:100%; height: 27%;">
                </figure>
                
            </div>
             <div class="full-reset nav-lateral-list-menu">
                <ul class="list-unstyled">
                    <li><a href="../inicio.php"><i class="zmdi zmdi-home zmdi-hc-fw"></i>&nbsp;&nbsp; Inicio</a></li>
                    
                    
                    <li>
                        <div class="dropdown-menu-button"><i class="zmdi zmdi-truck zmdi-hc-fw"></i>&nbsp;&nbsp; Proveedores <i class="zmdi zmdi-chevron-down pull-right zmdi-hc-fw"></i></div>
                        <ul class="list-unstyled">
                            <li><a href="../nuevoProv.php"><i class="zmdi zmdi-truck zmdi-hc-fw"></i>&nbsp;&nbsp; Nuevo Proveedor</a></li>
                            <li><a href="../mostrarProv.php"><i class="zmdi zmdi-assignment-o zmdi-hc-fw"></i>&nbsp;&nbsp; Listado de Proveedores</a></li>
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
              <h1 class="all-tittles">Sistema de Almacen<small>   </small></h1>
            </div>
       <div class="edir">
                
             <div class="fila">
	            <div class="row" style="text-align:center" >
	                <?php if($resultado){?>
	                <h3>El proveedor fue guardado correctamente</h3>
	                <?php } else{ ?>
	                <h3>error</h3>
	                <?php } ?>
	                
	                <a href="../mostrarProv.php" class="btn btn-success">pulse aquí para ver el listado de proveedores</a>
	            </div>
	        </div>

            </div>
            
        </div>
        <section class="full-reset text-center" style="padding: 40px 0;">         
        </section>
      
	        </div>
	   
   
</body>
</html>