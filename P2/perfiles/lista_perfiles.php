<?php
include '../conexion/conexion.php';
$datos = [];
$cadenaConsulta = "SELECT ID, NOMBRE, DESCRIPCION, FECHAHORA  FROM perfiles WHERE Activo=1";

$consultaPerfiles = mysqli_query($conexion, $cadenaConsulta);
while ($row = mysqli_fetch_array($consultaPerfiles)) {
    $btnEliminar = "<button type='button' class='btn btn-danger' onclick='Eliminar($row[0])'>
                        <i class='fa fa-trash' aria-hidden='true'></i>
                    </button>";
    $datos[] = [
        "id" => $row[0],
        "nombre" => $row[1],
        "descripcion" => $row[2],       
        "fecha" => $row[3],
        "Opciones" => $btnEliminar
    ];
}
echo json_encode($datos);
?>