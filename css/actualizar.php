<?php
include('link.php');
require '../conexion.php';
$id = $_GET['id'];

$sql = " SELECT * FROM productos WHERE id = '$id'";
$resultado = $mysqli->query($sql);
$row = $resultado->fetch_array(MYSQLI_ASSOC);
?>
	
<!DOCTYPE html>
<html lang="es">
<head>
    <title>Actualizar Producto</title>
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
                <h3 style="text-align:center">ACTUALIZAR  PRODUCTO</h3>
            </div>
                
            <form class="form-horizontal" method="POST" action="updatevista.php" autocomplete="off">
             	<div class="col-xs-12 col-sm-7 col-sm-offset-2">
				<div class="form-group">
					<label for="nombre" class="">Nombre del Producto</label>
						<input type="text" class="form-control" id="nombre" name="nombre"
						  required='required' title="nombre del producto solamente letras" pattern="[a-zA-Z ]+"
                           value=<?php echo $row['nombre_producto'] ?>>
					
				</div>
				
				<input type = "hidden" id="id" name="id" value ="<?php echo $row
                        ['id'] ?>"/>
				<div class="form-group">
					<label for="cantidad" class="">Cantidad</label>
						<input type="number" class="form-control" id="cantidad" name="cantidad"
						  required='required' title="Escriba la cantidad de productos, solamente números"
						  value=<?php echo $row['cantidad'] ?>>
					
				</div>
				<div class="form-group">
					<label for="precio" class="">Precio Total</label>
						<input type="text" class="form-control" id="precio" name="precio"
						  required='required' title="Escriba el precio total del producto" pattern="[0-9Ss$/ ]+"
						  value=<?php echo $row['precio_total'] ?>>
					
				</div>
				
				<div class="form-group">
					<label for="fecha" class="">fecha</label>
				       <input type="date" class="form-control" name="fecha" required='required' 
                       title="Seleccione la fecha" value=<?php echo $row['fecha_entrada'] ?>>
					
				</div>
				<div class="form-group">
					<label for="proveedor" class="">Proveedor</label>
						<input type="text" class="form-control" id="proveedor" name="proveedor"
				        required='required' title="Escriba el nombre del proveedor del producto" pattern="[a-zA-Z./- ]+"
				        value=<?php echo $row['proveedor'] ?>>
					
				</div>
				
				<div class="form-group">
					<label for="descripcion" class="">Descripcion</label>
					
                        <input type="text" class="form-control" id="descripcion" name="descripcion" value=<?php echo $row
                        ['descripcion'] ?>  required>
						
					</div>
				</div>
				
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-5">
                    <a href="../mostrarPro.php" class="btn btn-info"> <i class="zmdi zmdi-home zmdi-hc-fw"></i> &nbsp;&nbsp; Regresar</a>
						<button type="submit" class="btn btn-primary"> <i class="zmdi zmdi-floppy"></i> &nbsp;&nbsp; Agregar</button>
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