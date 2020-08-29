<?php
$server ='localhost';
$usuario = 'root';
$password = '';
$bd= 'almacendb';

try{
    $conn = new PDO("mysql:host=$server;dbname=$bd;",$usuario,$password);

}catch(PDOException $e){
    die('fascxvxhcv' .$e->getMessage());
}
?>