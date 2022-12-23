<?php
include ("conexion-cotizacion.php");
$nombre = $_POST["Nombre"];
$fecha_c = $_POST["fecha_c"];
$fecha_f = $_POST["fecha_f"];
$presupuesto = $_POST["form_presupuesto"];
$option = $_POST["mancadeshit2"];
$arr = explode(':', $option);
$extran = $arr[0];
$extrav = $arr[1];
$total = $extrav + $presupuesto;

$insertar = "INSERT INTO productos (Nombre, fecha_c, fecha_f, presupuesto, extran, extrav, total)
VALUES('$nombre','$fecha_c','$fecha_f','$presupuesto','$extran','$extrav','$total')";

$resulltado =mysqli_query($conexion, $insertar);




?>

