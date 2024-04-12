<?php
include '../conexion/conexion.php';
$datos = [];
$cadenaConsulta = "SELECT ID, NOMBRE, AP_PATERNO, AP_MATERNO, CURP, DIRECCION, TELEFONO, CODIGO_POSTAL, FECHAHORA  FROM clientes WHERE ACTIVO=1";

$consultaClientes = mysqli_query($conexion, $cadenaConsulta);
while ($row = mysqli_fetch_array($consultaClientes)) {
    $btnEliminar = "<button type='button' class='btn btn-danger' onclick='Eliminar($row[0])'>
                        <i class='fa fa-trash' aria-hidden='true'></i>
                    </button>";
    $datos[] = [
        "id" => $row[0],
        "nombre" => $row[1],
        "apPaterno" => $row[2],
        "apMaterno" => $row[3],
        "curp" => $row[4],
        "direccion" => $row[5],
        "telefono" => $row[6],
        "codigopostal" => $row[7],
        "fechahora" => $row[8],
        "Opciones" => $btnEliminar
    ];
}
echo json_encode($datos);
?>