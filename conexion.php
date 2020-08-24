<?php
	$mysqli = new mysqli('localhost', 'root','','almacendb');

	if($mysqli->connect_error){
        die('error a la conexion' .$mysqli->connect_error);
    }
        
?>