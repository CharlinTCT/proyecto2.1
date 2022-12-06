<?php
// Iniciar una sesión nueva o reanudar una existente
    session_start();
// Determina si una variable está declarada y es diferente de NULL
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.php");
    exit;
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bienvenido</title>
    <link rel="stylesheet" href="css/estilos.css">
    
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
</head>
<body>
   
   <div class="ctn-welcome">
       
       <img src="" alt="" class="logo-welcome">
       <h1 class="title-welcome">Bienvenido has iniciado <b>SESIÓN!</b></h1>
       <a href="cerrar-sesion.php" class="close-sesion">Cerrar Sesión</a>
       
   </div>
   
    
</body>
</html>