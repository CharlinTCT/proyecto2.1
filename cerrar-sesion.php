<?php

// Iniciar una sesión nueva o reanudar una existente
session_start();
$_SESSION = array();
// Destruye todos los datos registrados en una sesión.
session_destroy();
header("location: index.php");

exit;



?>