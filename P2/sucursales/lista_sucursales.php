<?php
include'../conexion/conexion.php';
$datos=[];
$cadenaConsulta="SELECT ID,NOMBRE,DIRECCION,TELEFONO,FECHAHORA,ACTIVO,USUARIO FROM sucursales";
$consultaSucursales=mysqli_query($conexion,$cadenaConsulta);
while($row=mysqli_fetch_array($consultaSucursales)){
    $btnEliminar = "<button type='button' class='btn btn-danger' onclick='Eliminar($row[0])'>
                        <i class='fa fa-trash' aria-hidden='true'></i>
                    </button>";
    $datos[]=[
        "id"=>$row[0],
        "nombre"=>$row[1],
        "direccion"=>$row[2],
        "telefono"=>$row[3],
        "fechahora"=>$row[4],
        "activo"=>$row[5],
        "usuario"=>$row[6],
        "Opciones" => $btnEliminar
    ];
}
echo json_encode($datos);
?>