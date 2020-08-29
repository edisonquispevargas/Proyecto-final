<?php
session_start();
require 'conctar.php';

if(isset($_SESSION['user_id'])){
    $records = $conn->prepare('SELECT id,email,contraseña FROM usuario WHERE id = :id');
    $records->bindParam(':id', $_SESSION['user_id']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);
    
    $user = null;
    
    if(count($results) > 0){
        $user = $results;
    }
}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>logeo</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
  
  <?php if(!empty($user)): ?>
  <br>vienvenido <?= $user['email'] ?>
  <br> dfdhbfdghbfdg
  <a href="cerrar.php">cerrar</a>
  <?php else: ?>
   
    <h1>registrate o logueate</h1>

    <a href="iniciar.php">login</a> or 
    <a href="registrarse.php">registro</a>
    <?php endif; ?>
</body>
</html>