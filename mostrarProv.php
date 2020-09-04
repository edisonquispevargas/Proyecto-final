<?php
include('link.php');
require 'conexion.php';
         
$where = "";
       
if(!empty($_POST))
{
    $valor = $_POST ['campo'];
    if(!empty($valor)){
        $where = "WHERE nombre_proveedor LIKE '%$valor%'";
    }
}

$sql = "SELECT * FROM proveedor $where";
$resultado = $mysqli->query($sql);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <title>Listado de Proveedores</title>
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
       <div class="edii">
              <div class="container">
       
            <div class="row">
                
                <h2 style="text-align:center">LISTADO DE PROVEEDORES</h2>
                
            </div>
            <div class="row">
                <a href="nuevoProv.php" class="btn btn-success">Agregar Nuevo Proveedor</a>
                
                <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
                
                    <input type="text" id="campo" name="campo" required='required'
                     placeholder="buscar un producto " autocomplete="off"/>
                    <input type="submit"  id="enviar" name="enviar" value="Buscar"  
                    class="btn btn-danger"  />
                   
                 </form>
            </div>
            
            <br>
            <div class="row table-responsive">
                <table class="table table-striped">
                   <thead>
                    <tr>
                        <th>Código</th>
                        <th>Proveedor</th>
                        <th>Dirección</th>
                        <th>Telefono</th>
                        <th>Email</th>
                        <th>Producto</th>
                        <th>Acciones</th>
                    </tr>
                    </thead>
                    <tbody>
                     <?php while($row = $resultado->fetch_array(MYSQLI_ASSOC)) 
                    { ?> 
                    <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['nombre_proveedor']; ?></td>
                    <td><?php echo $row['direccion']; ?></td>
                    <td><?php echo $row['telefono']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['producto_servicio']; ?></td>
                    <td><a class="link_edit" href="css/actualizar2.php?id=<?php echo $row["id"];?>">editar</a>
                        <a href="#" data-href="css/eliminar2.php?id=<?php echo $row["id"];?>"
                           data-toggle="modal" data-target="#confirm-delete">eliminar</a>
                   </td>
                    </tr>
                    <?php } ?>
                    </tbody>
                </table>
        </div>
            </div>
        </div>
        </div>
    </div>
    <div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog"
    aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
       <div class="modal-content">

    <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal"
    aria-hidden="true">&times;</button>
    <h4 class="modal-title" id="myModalLabel">eliminar Registro</h4>
    </div>
    
    <div class="modal-body">
    ¿Desea eliminar el registro?
    </div>

    <div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal"
    >cancelar</button>
    <a class="btn btn-danger btn-ok">eliminar</a>
             </div>
          </div>
         </div>
    </div>
    <script>
    $('#confirm-delete').on('show.bs.modal', function(e) {
        $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data
        ('href'));
        $('.debug-url').html('Delete URL: <strong>' + $(this).find(
            '.btn-ok').attr('href') + '</strong>');
        
    });
    </script>
</body>
</html>