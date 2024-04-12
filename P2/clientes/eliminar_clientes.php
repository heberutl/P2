<?php
include '../Conexion/Conexion.php';
$IdCliente=$_POST['ID'];

$cadenaEliminar="UPDATE clientes SET Activo='0' WHERE ID='$IdCliente'";
$eliminar=mysqli_query($conexion,$cadenaEliminar);

echo "ok";
?>