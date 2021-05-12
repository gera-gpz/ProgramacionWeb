<?php

$id  = $_POST['id'];
$nom = $_POST['nombre'];
$pat = $_POST['paterno'];
$mat = $_POST['materno'];
$log = $_POST['login'];
$pas = $_POST['password'];

$host="localhost";
$user="root";
$pass="";
$data="apseguros";

$conexion = mysqli_connect($host,$user,$pass,$data) or die ("No se pudo conectar con BD");

$query="insert into cusuario(idUsuario,nombre,apPaterno,apMaterno,login,password)";
$query=$query." values ($id,'$nom','$pat','$mat','$log','$pas')";

mysqli_query($conexion,$query) or die ('No se pudo hacer el insert');
mysqli_close($conexion);

?>