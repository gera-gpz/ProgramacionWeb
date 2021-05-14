<?php
session_start();

$user = $_POST['usuario'];

if(isset($_SESSION['usuario'])){
		 printf("REANUDANDO SESION <br>");
         printf("Bienvenido de nuevo".$_SESSION['usuario']);
} else {
         $_SESSION['usuario'] = $user;
       	 printf("NUEVA SESION <br>");
       	 printf("Bienvenido %s",$user);
}

?>
