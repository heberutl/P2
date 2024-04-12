<?php
include '../conexion/conexion.php';
$datos = [];
$cadenaConsulta = "SELECT ID, NOMBRE, AP_PATERNO, AP_MATERNO, SEXO, CURP, FECHAHORA  FROM personas WHERE Activo=1";

$consultaPersonas = mysqli_query($conexion, $cadenaConsulta);
while ($row = mysqli_fetch_array($consultaPersonas)) {
    $btnEliminar = "<button type='button' class='btn btn-danger' onclick='Eliminar($row[0])'>
                        <i class='fa fa-trash' aria-hidden='true'></i>
                    </button>";
    $datos[] = [
        "id" => $row[0],
        "nombre" => $row[1],
        "apPaterno" => $row[2],
        "apMaterno" => $row[3],
        "sexo" => $row[4],
        "curp" => $row[5],
        "fecha" => $row[6],
        "Opciones" => $btnEliminar
    ];
}
echo json_encode($datos);
?>