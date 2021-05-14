<?php

$server  ="localhost";
$database="apseguros";
$username="root";
$password="";

$conexion=mysqli_connect($server,$username,$password,$database) or die("No se pudo conectar a localhost");

$consulta="select * from cusuario";

$registros=mysqli_query($conexion,$consulta) or die("Problemas en el select");


while ($reg=mysqli_fetch_array($registros))
{
    printf($reg['nombre'].' '.$reg['apPaterno'].'<br>');
}

mysqli_close($conexion);

?>