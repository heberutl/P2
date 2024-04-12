<?php
include '../Conexion/Conexion.php';

//variables POST
$NOMBRE=$_POST['NOMBRE'];
$DESCRIPCION=$_POST['DESCRIPCION'];

$FECHAHORA=date('Y-m-d H:i:s');

$cadenaInsertar="INSERT INTO perfiles (NOMBRE, DESCRIPCION, FECHAHORA, ACTIVO, USUARIO)VALUES('$NOMBRE','$DESCRIPCION','$FECHAHORA','1','1')";

$insertar=mysqli_query($conexion,$cadenaInsertar);
echo "ok";

?>