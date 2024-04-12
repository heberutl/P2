<?php
include '../Conexion/Conexion.php';
$IdPersona=$_POST['ID'];

$cadenaEliminar="UPDATE personas SET Activo='0' WHERE ID='$IdPersona'";
$eliminar=mysqli_query($conexion,$cadenaEliminar);

echo "ok";
?>