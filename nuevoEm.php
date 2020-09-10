<?php
include('link.php');

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <title>Agregar Nuevo Empleado</title>
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
                    <img src="assets/img/logo.jpg"  class="img-responsive center-box"
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
              <h1 class="all-tittles">Sistema de Almacén<small>   </small></h1>
            </div>
            <div class="container-fluid"  style="margin: 50px 0;">
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <img src="assets/img/user02.png" alt="user" class="img-responsive center-box" style="max-width: 110px;">
                </div>
                <div class="col-xs-12 col-sm-8 col-md-8 text-justify lead">
                    Bienvenido a la sección para registrar nuevos empleados. 
                    Para registrar un empleado debes de llenar todos los campos del siguiente formulario, también puedes ver el listado de empleados registrados
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 lead">
                    <ol class="breadcrumb">
                      <li class="active">Nuevo empleado</li>
                      <li><a href="mostrarEm.php">Listado de empleados</a></li>
                    </ol>
                </div>
            </div>
        </div>
       <div class="edi">
                <div class="row">
                <h3 style="text-align:center">AGREGRAR NUEVO EMPLEADO</h3>
            </div>
                <form class="form-horizontal" method="POST" action="css/guardar4.php" autocomplete="off">
                <div class="col-xs-12 col-sm-7 col-sm-offset-2">
                <div class="form-group">
                    <label for="nombre" class="">Nombres y Apellidos</label>
                        <input type="text" class="form-control" id="nombre" name="nombre"
                          required='required' title="Solamente letras de A Z" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]+">
                    
                </div>
                <div class="form-group">
                    <label for="telefono" class="">Telefono</label>
                        <input type="text" class="form-control" id="telefono" name="telefono"
                          required='required' title="escriba el número de telefono del empleado,solamente números" maxlength="9"
						  pattern="[0-9]{9}">
                    
                </div>
                <div class="form-group">
                    <label for="email" class="">Email</label>
                        <input type="email" class="form-control" id="email" name="email"
                          required='required' title="escriba  email del empleado"
                          pattern="^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$" >
                    
                </div>
                <div class="form-group">
                   <label for="">Cargo</label>
                        <select name="cargo" class="form-control" id="cargo" required='required'>
                               
                                <option value="almacen">Almacen</option>
                                <option value="operador" >Operador</option>
                                <option value="contador" >Contador</option>
                                <option value="vendedor" >Vendedor</option>
                    </select>
               </div>
               <div class="form-group">
                   <label for="">Género</label>
                        <select name="genero" class="form-control" id="genero" required='required'>
                               
                                <option value="masculino">Masculino</option>
                                <option value="femenino">Femenino</option>
                                
                    </select>
               </div>
              
            
                </div>
                
                <div class="form-group">
                    <div class="col-sm-offset-4 col-sm-5">
                    <a href="inicio.php" class="btn btn-info"> <i class="zmdi zmdi-home zmdi-hc-fw"></i> &nbsp;&nbsp; Regresar</a>
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