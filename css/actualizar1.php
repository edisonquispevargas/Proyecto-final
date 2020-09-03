<?php
include('link.php');
require '../conexion.php';
$id = $_GET['id'];

$sql = " SELECT * FROM precio WHERE id = '$id'";
$resultado = $mysqli->query($sql);
$row = $resultado->fetch_array(MYSQLI_ASSOC);
?>
	
<!DOCTYPE html>
<html lang="es">
<head>
    <title>Actualizar Precio</title>
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
                <h3 style="text-align:center">ACTUALIZAR PRECIO Y STOCK DEL PRODUCTO</h3>
            </div>
                <form class="form-horizontal" method="POST" action="updatevista1.php" autocomplete="off">
                <div class="col-xs-12 col-sm-7 col-sm-offset-2">
                <div class="form-group">
                    <label for="nombre" class="">Nombre del Producto</label>
                        <input type="text" class="form-control" id="nombre" name="nombre"
                          required='required' title="Escriba el nombre del producto"
                          value=<?php echo $row
                        ['nombre_producto'] ?>>
                </div>

                <input type = "hidden" id="id" name="id" value ="<?php echo $row
                        ['id'] ?>"/>

                <div class="form-group">
                    <label for="precioC" class="">Precio Compra</label>
                        <input type="text" class="form-control" id="precioC" name="precioC"
                          required='required' title="Escriba el precio de compra del producto"
                          value=<?php echo $row
                        ['precio_compra'] ?>>
                   
                    
                </div>
                <div class="form-group">
                    <label for="precioV" class="">Precio Venta</label>
                        <input type="text" class="form-control" id="precioV" name="precioV" 
                          required='required' title="Escriba el precio de venta del producto" value=<?php echo $row ['precio_venta'] ?>
                          required>
                    
                </div>
                <div class="form-group">
                    <label for="stock" class="">Stock</label>
                        <input type="text" class="form-control" id="stock" name="stock"
                          required='required' title="Escriba la cantidad de prosuctos disponibles, Solamente números"
                           value=<?php echo $row
                        ['stock'] ?> required>
                    
                </div>
                    </div>
                
                    
                
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-5">
                    <a href="index.php" class="btn btn-info"> <i class="zmdi zmdi-home zmdi-hc-fw"></i> &nbsp;&nbsp; Regresar</a>
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