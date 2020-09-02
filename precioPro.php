<?php
include('link.php');

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <title>Agregar Precio a un Producto</title>
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
                    <img src="assets/img/logo.jpg" alt="Biblioteca" class="img-responsive center-box"
                     style="width:100%; height: 27%;">
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
              <h1 class="all-tittles">Sistema de Almacen<small>   </small></h1>
            </div>
       <div class="edi">
                <div class="row">
				<h3 style="text-align:center">AGREGRAR PRECIO A PRODUCTO</h3>
			</div>
             	<form class="form-horizontal" method="POST" action="css/guardar2.php" autocomplete="off">
             	<div class="col-sm-10">
				<div class="form-group">
					<label for="nombre" class="">Nombre del Producto</label>
						<input type="text" class="form-control" id="nombre" name="nombre"
						  required='required' title="nombre del producto, solamente letras de A-Z" pattern="[a-zA-Z ]+">
					
				</div>
				<div class="form-group">
					<label for="precioC" class="">Precio Compra</label>
						<input type="text" class="form-control" id="precioC" name="precioC"
						  required='required' title="Escriba el precio de compra del producto en S/, $" pattern="[0-9Ss$/ ]+">
					
				</div>
				<div class="form-group">
					<label for="precioV" class="">Precio Venta</label>
						<input type="text" class="form-control" id="precioV" name="precioV"
						  required='required' title="Escriba el precio de compra del producto en S/, $" pattern="[0-9Ss$/ ]+">
					
				</div>
                <div class="form-group">
					<label for="stock" class="">Stock</label>
						<input type="text" class="form-control" id="stock" name="stock"
						  required='required'title="Escriba la cantidad de productos disponibles, Solamente números"
                          pattern="[0-9]+">
					
				</div>
			
				</div>
				
				<div class="form-group">
					<div class="col-sm-offset-4 col-sm-5">
						<a href="index.php" class="btn btn-info">Regresar</a>
						<button type="submit" class="btn btn-info">Agregar</button>
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