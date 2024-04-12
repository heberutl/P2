<?php
include '../Conexion/Conexion.php';
$IdPerfil=$_POST['ID'];

$cadenaEliminar="UPDATE perfiles SET Activo='0' WHERE ID='$IdPerfil'";
$eliminar=mysqli_query($conexion,$cadenaEliminar);

echo "ok";
?>