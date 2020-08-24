<?php
include('link.php');
require '../conexion.php';

$nombre = $_POST['nombre'];
$cantidad = $_POST['cantidad'];
$precio = $_POST['precio'];
$fecha = $_POST['fecha'];
$proveedor = $_POST['proveedor'];
$desc = $_POST['descripcion'];

$sql = "INSERT INTO productos(nombre_producto,cantidad,precio_total,fecha_entrada,proveedor,descripcion) 
    VALUES ('$nombre','$cantidad','$precio','$fecha','$proveedor','$desc')";
    
    $resultado = $mysqli->query($sql);
?>