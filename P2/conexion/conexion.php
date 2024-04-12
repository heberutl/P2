<?php
date_default_timezone_set('America/Monterrey');
$fechahora=date('Y-m-d H:i:s');
$servername="localhost"; //o la ip del servidor de base de datos
$username="root";
$password="";
$dbname="idgs08";

$conexion=mysqli_connect($servername,$username,$password,$dbname);
if(mysqli_connect_errno()){
    printf(mysqli_connect_errno());
}
mysqli_set_charset($conexion, 'utf8');
?>