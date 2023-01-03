<?php
include ("conexion-cotizacion.php");
$nombre = $_POST["Nombre"];
$fecha_c = $_POST["fecha_c"];
$fecha_f = $_POST["fecha_f"];
$presupuesto = $_POST["form_presupuesto"];
<<<<<<< HEAD
$extra =$_POST["value"];
$nombre_extra =$_POST["name"];
$valor_extra = $_POST["value"];
$total = $extra + $presupuesto;

$insertar = "INSERT INTO productos (Nombre, fecha_c, fecha_f, presupuesto, nombre_extra,  valor_extra,  total)
VALUES('$nombre','$fecha_c','$fecha_f','$presupuesto','$nombre_extra','$valor_extra','$total')";

$resulltado =mysqli_query($conexion, $insertar);

if($resultado){
    echo "<script>alert('se ha registrado los datos con exito')";
} else{
    echo "<script>alert(' se pudo registrar'); window.histoy.go(-1);</script>";
}

?>
<?php
include ("conexion-cotizacion.php");
$nombre =$_POST["name"];
$valor = $_POST["value"];


$inserextra = "INSERT INTO extras (nombre, valor)
VALUES('$nombre','$valor')";

$resulltado =mysqli_query($conexion, $inserextra);

if($resultado){
    echo "<script>alert('se ha registrado los datos con exito')";
} else{
    echo "<script>alert(' se pudo registrar'); window.histoy.go(-1);</script>";
}

?>


=======
$option = $_POST["mancadeshit2"];
$arr = explode(':', $option);
$extran = $arr[0];
$extrav = $arr[1];
$total = $extrav + $presupuesto;

$insertar = "INSERT INTO productos (Nombre, fecha_c, fecha_f, presupuesto, extran, extrav, total)
VALUES('$nombre','$fecha_c','$fecha_f','$presupuesto','$extran','$extrav','$total')";

$resulltado =mysqli_query($conexion, $insertar);




?>

>>>>>>> main
