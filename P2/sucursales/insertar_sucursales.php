<?php
include '../Conexion/Conexion.php';

//variables POST
$NOMBRE=$_POST['NOMBRE'];
$DIRECCION=$_POST['DIRECCION'];
$TELEFONO=$_POST['TELEFONO'];


$FECHAHORA=date('Y-m-d H:i:s');

$cadenaInsertar="INSERT INTO sucursales (NOMBRE, DIRECCION, TELEFONO, FECHAHORA, ACTIVO, USUARIO)VALUES('$NOMBRE','$DIRECCION','$TELEFONO','$FECHAHORA','1','1')";


$insertar=mysqli_query($conexion,$cadenaInsertar);
echo "ok";

?>