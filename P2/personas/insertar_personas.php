<?php
include '../conexion/conexion.php';

//variables POST
$NOMBRE=$_POST['NOMBRE'];
$AP_PATERNO=$_POST['AP_PATERNO'];
$AP_MATERNO=$_POST['AP_MATERNO'];
$SEXO=$_POST['SEXO'];
$CURP=$_POST['CURP'];

$FECHAHORA=date('Y-m-d H:i:s');

$cadenaInsertar="INSERT INTO personas (NOMBRE, AP_PATERNO, AP_MATERNO, SEXO, CURP, FECHAHORA,Activo, Usuario)VALUES('$NOMBRE','$AP_PATERNO','$AP_MATERNO','$SEXO','$CURP','$FECHAHORA','1','1')";

$insertar=mysqli_query($conexion,$cadenaInsertar);
echo "ok";

?>