<?php
$USUARIO=$_POST['USUARIO'];
$CONTRASENA=$_POST['CONTRASENA'];
session_start();
$_SESSION['USUARIO']=$USUARIO;

$conexion=mysqli_connect("localhost","root", "", "idgs08");

$consulta="SELECT* FROM usuarios where USUARIO='$USUARIO' and CONTRASENA='$CONTRASENA'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
    header("location:index.php")
}else{
    
}
mysqli_free_result($resultado);
mysqli_close($conexion);
?>