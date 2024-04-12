<?php
include '../Conexion/Conexion.php';
$IdSucursal=$_POST['ID'];

$cadenaEliminar="UPDATE sucursales SET Activo='0' WHERE ID='$IdSucursal'";
$eliminar=mysqli_query($conexion,$cadenaEliminar);

echo "ok";
?>