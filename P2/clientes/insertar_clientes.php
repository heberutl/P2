<?php
include '../conexion/conexion.php';

//variables POST
$NOMBRE=$_POST['NOMBRE'];
$AP_PATERNO=$_POST['AP_PATERNO'];
$AP_MATERNO=$_POST['AP_MATERNO'];
$CURP=$_POST['CURP'];
$DIRECCION=$_POST['DIRECCION'];
$TELEFONO=$_POST['TELEFONO'];
$CODIGO_POSTAL=$_POST['CODIGO_POSTAL'];
$FECHAHORA=date('Y-m-d H:i:s');

$cadenaInsertar="INSERT INTO clientes (NOMBRE, AP_PATERNO, AP_MATERNO, CURP, DIRECCION, TELEFONO, CODIGO_POSTAL,FECHAHORA, ACTIVO, USUARIO)VALUES('$NOMBRE','$AP_PATERNO','$AP_MATERNO','$CURP','$DIRECCION','$TELEFONO','$CODIGO_POSTAL','$FECHAHORA','1','1')";

$insertar=mysqli_query($conexion,$cadenaInsertar);
echo "ok";

?>