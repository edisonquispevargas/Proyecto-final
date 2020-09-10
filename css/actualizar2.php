<?php
include('link.php');
require '../conexion.php';
$id = $_GET['id'];

$sql = " SELECT * FROM proveedor WHERE id = '$id'";
$resultado = $mysqli->query($sql);
$row = $resultado->fetch_array(MYSQLI_ASSOC);
?>
	
<!DOCTYPE html>
<html lang="es">
<head>
    <title>Actualizar Proveedor</title>
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
                    <img src="../assets/img/logo.jpg"  class="img-responsive center-box"
                     style="width:100%; height: 27%;">
                </figure>
                
            </div>
            <div class="full-reset nav-lateral-list-menu">
                <ul class="list-unstyled">
                    <li><a href="../inicio.php"><i class="zmdi zmdi-home zmdi-hc-fw"></i>&nbsp;&nbsp; Inicio</a></li>
                    <li>
                        <div class="dropdown-menu-button"><i class="zmdi zmdi-store"></i>&nbsp;&nbsp; Productos <i class="zmdi zmdi-chevron-down pull-right zmdi-hc-fw"></i></div>
                        <ul class="list-unstyled">
                            <li><a href="../nuevoProducto.php"><i class="zmdi zmdi-collection-plus"></i>&nbsp;&nbsp; Agregar Nuevo Producto</a></li>
                            <li><a href="../mostrarPro.php"><i class="zmdi zmdi-collection-text"></i>&nbsp;&nbsp; Listado de Productos</a></li>
                            <li><a href="../precioPro.php"><i class="zmdi zmdi-money"></i>&nbsp;&nbsp; Agregar Precio a Productos</a></li>
                            <li><a href="../mostrarPrec.php"><i class="zmdi zmdi-money-box"></i>&nbsp;&nbsp; Listado de Productos con su Precio</a></li>
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
        
        <div class="edi">
                <div class="row">
                <h3 style="text-align:center">ACTUALIZAR PROVEEDOR</h3>
            </div>
                <form class="form-horizontal" method="POST" action="updatevista2.php" autocomplete="off">
                <div class="col-xs-12 col-sm-7 col-sm-offset-2">
                
                <div class="form-group">
                    <label for="nombre" class="">Nombre del Proveedor</label>
                        <input type="text" class="form-control" id="nombre" name="nombre"
                          required='required' title="nombre del proveedor,solamente letras" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ./- ]+" 
                          value=<?php echo $row['nombre_proveedor'] ?>>
                    
                </div>
                <input type = "hidden" id="id" name="id" value ="<?php echo $row
                        ['id'] ?>"/>
                
                <div class="form-group">
                    <label for="direccion" class="">Dirección</label>
                        <input type="text" class="form-control" id="direccion" name="direccion"
                          required='required' title="Escribe la dirección del proveedor" pattern="[A-Za-z0-9./- ]+"
                           value=<?php echo $row['direccion'] ?>>
                    </div>
                
                <div class="form-group">
                    <label for="telefono" class="">Telefono</label>
                        <input type="text" class="form-control" id="telefono" name="telefono"
                        required='required' title="Escriba el número de telefono del proveedor"  maxlength="9"
						  pattern="[0-9]{9}"
                        value=<?php echo $row['telefono'] ?>>
                    
                </div>
                
                <div class="form-group">
                    <label for="email" class="">Email</label>
                        <input type="email" class="form-control" id="email" name="email"
                        required='required' title="Escribe el Email de proveedor"
                        pattern="^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$"
                        value=<?php echo $row['email'] ?>>
                    
                </div>
                <div class="form-group">
                    <label for="producto" class="">Preducto/Servicio</label>
                        <input type="text" class="form-control" id="producto" name="producto"
                        required='required' title="Escriba el producto que distribuye el proveedor" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]+"
                        value=<?php echo $row['producto_servicio'] ?>>
                    
                </div>
                
                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-5">
                    <a href="../mostrarProv.php" class="btn btn-info"> <i class="zmdi zmdi-home zmdi-hc-fw"></i> &nbsp;&nbsp; Regresar</a>
						<button type="submit" class="btn btn-primary"> <i class="zmdi zmdi-floppy"></i> &nbsp;&nbsp; Actualizar</button>
                    </div>
                </div>
                    </div>
            </form>
            
          
            </div>
        
        </div>
        <section class="full-reset text-center" style="padding: 40px 0;">         
        </section>
      
	     </div>
	   
   
</body>
</html>