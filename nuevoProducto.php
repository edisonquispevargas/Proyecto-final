<?php
include('link.php');
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <title>Agregar Producto</title>
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
                            <li><a href=""><i class="zmdi zmdi-money"></i>&nbsp;&nbsp; Agregar Precio a Productos</a></li>
                            <li><a href=""><i class="zmdi zmdi-money-box"></i>&nbsp;&nbsp; Listado de Productos con su Precio</a></li>
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
              <h1 class="all-tittles">Sistema de Almacen<small></small></h1>
            </div>
            <div class="edi">
                <div class="row">
				<h3 style="text-align:center">AGREGRAR NUEVO PRODUCTO</h3>
			</div>
             	<form class="form-horizontal" method="POST" action="css/guardar1.php" autocomplete="off">
             	<div class="col-sm-10">
				<div class="form-group">
					<label for="nombre" class="">Nombre del Producto</label>
						<input type="text" class="form-control" id="nombre" name="nombre"
						  required='required' title="Solamente números y guiones, 10 dígitos">
					
				</div>
				<div class="form-group">
					<label for="cantidad" class="">Cantidad</label>
						<input type="text" class="form-control" id="cantidad" name="cantidad"
						  required='required' title="Solamente números y guiones, 10 dígitos">
					
				</div>
				<div class="form-group">
					<label for="precio" class="">Precio Total</label>
						<input type="text" class="form-control" id="precio" name="precio"
						  required='required' title="Solamente números y guiones, 10 dígitos">
					
				</div>
				
				<div class="form-group">
					<label for="fecha" class="">fecha</label>
				       <input type="date" class="form-control" name="fecha" required='required' 
                       title="Solamente números y guiones, 10 dígitos">
					
				</div>
				<div class="form-group">
					<label for="proveedor" class="">Proveedor</label>
						<input type="text" class="form-control" id="proveedor" name="proveedor"
				        required='required' title="Solamente números y guiones, 10 dígitos">
					
				</div>
				
				<div class="form-group">
					<label for="descripcion" class="">Descripcion</label>
					
					<textarea name="descripcion" rows="5" cols="80" placeholder="Comentario" 
                    class="form-control"></textarea>
						
					</div>
				</div>
				
				<div class="form-group">
					<div class="col-sm-offset-3 col-sm-5">
						<a href="inicio.php" class="btn btn-default">Regresar</a>
						<button type="submit" class="btn btn-success">Guardar</button>
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
