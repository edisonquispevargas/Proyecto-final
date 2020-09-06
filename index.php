<?php
session_start();
if(isset($_SESSION['user_id'])){
    //header('Localhost: /9/mostrar.php');
}
require 'css/conctar.php';

if(!empty($_POST['email']) && !empty($_POST['password'])){
    $records=$conn->prepare('SELECT id,email,contraseña FROM usuario WHERE email=:email');
    $records->bindParam(':email', $_POST['email']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);
    
    $message = '';
    
    if (count($results) > 0 && password_verify($_POST['password'], $results['contraseña'])){
        $_SESSION['user_id'] = $results['id'];
        
       header('Location: inicio.php');
    }
    else{
        $message = 'Usuario y contraseña no coinciden';
    }
}
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Iniciar sesión</title>
    <link rel="Shortcut Icon" type="image/x-icon" href="assets/icons/icon.jpg" />
     <link rel="stylesheet" href="css/estilo.css">
</head>
<body class="full-cover-background" class="full-cover-background" style="background-image:url(assets/img/font-login.jpg);">
<div class="contenedor">
   <h1>Iniciar sesión</h1>
   <img src="assets/img/login.png" width="100"
     height="100">
   
   
    <form action="index.php" method="post">
    <input type="text" name="email" placeholder="Ingrese su usuario" required='required' class="material-login-control"
    title="Escriba su usuario para poder eniciar sesión">
    <input type="password" name="password" placeholder="Ingrese su contraseña" required='required' 
    class="material-login-control" title="Escriba su contraseña"><br><br>
    


     
    <input type="submit" value="Ingresar al sistema">
    <?php if(!empty($message)) : ?>
       <p><?= $message?></p>
       <?php endif; ?>
    </form>
   
    </div>
    <p align="center">PARA INICIAR SESION UTILIZAR:<br>
        usuario: admin<br>
        contraseña: admin
    </p>
</body>
</html>