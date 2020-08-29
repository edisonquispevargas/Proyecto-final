<?php
require 'css/conctar.php';


$messaje= '';

if(!empty($_POST['email'])&&
      !empty($_POST['password'] ) ){
    $sql = "INSERT INTO usuario(email, contraseña) VALUES(:email, :password)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':email',$_POST['email']);
    $contraseña = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $stmt->bindParam(':password',$contraseña);
    
    if($stmt->execute()){
        $messaje = 'Su correo y contraseña fue registrado exitosamente';
        
    }else{
        $messaje = 'error';
    }
        
}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Registrar</title>
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="Shortcut Icon" type="image/x-icon" href="assets/icons/icon.jpg" />
</head>
<body>
<div class="contenedor">
       <h1>Registrar nuevo usuario</h1>
       <img src="assets/img/regis.png" width="100"
     height="100"><br>
       <span><a href="inicio.php">Regresar</a></span>
       
       <form action="registrarse.php" method="post">
    <input type="text" name="email" placeholder="Ingrese su usuario" autocomplete="off" required='required'>
    <input type="password" name="password" placeholder="Ingrese una contraseña" required='required'>
    
    <input type="submit" value="Registrar">
    <?php if(!empty($messaje)): ?>
       <p><?= $messaje?></p>
       <?php endif; ?>
       
    </form>
       </div>
</body>
</html>