<?php
include'../conexion/conexion.php';
$idSucursal=$_POST['id'];
$nombre=$_POST['nombre'];
$direccion=$_POST['direccion'];
$telefono=$_POST['telefono'];
$fechahora=$_POST['fechahora'];

$cadenaActualizar="UPDATE SUCURSALES SET NOMBRE='$nombre',DIRECCION='$direccion',TELEFONO='$telefono',fechahora='$fechahora',ACTIVO='1', USUARIO='1' WHERE ID=$idSucursal'";

$actualizar=mysqli_query($conexion,$cadenaActualizar);
echo "ok";

?>