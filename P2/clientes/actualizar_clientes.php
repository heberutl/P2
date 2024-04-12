<?php
include'../conexion/conexion.php';
$idCliente=$_POST['id'];
$nombre=$_POST['nombre'];
$ap_paterno=$_POST['ap_paterno'];
$ap_materno=$_POST['ap_materno'];
$curp=$_POST['curp'];
$direccion=$_POST['direccion'];
$telefono=$_POST['telefono'];
$codigo_postal=$_POST['codigo_postal'];
$fechahora=$_POST['fechahora'];

$cadenaActualizar="UPDATE CLIENTES SET NOMBRE='$nombre',AP_PATERNO='$ap_paterno',AP_MATERNO='$ap_materno',CURP='$curp',DIRECCION='$direccion',TELEFONO='$telefono',CODIGO_POSTAL='$codigo_postal',FECHAHORA='$fechahora',ACTIVO='1', USUARIO='1' WHERE ID=$idCliente'";

$actualizar=mysqli_query($conexion,$cadenaActualizar);
echo "ok";

?>