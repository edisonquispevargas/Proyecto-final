<?php
include('link.php');
require 'conexion.php';
         
$where = "";
       
if(!empty($_POST))
{
    $valor = $_POST ['campo'];
    if(!empty($valor)){
        $where = "WHERE nombre_producto LIKE '%$valor%'";
    }
}

$sql = "SELECT * FROM productos $where";
$resultado = $mysqli->query($sql);
?>
