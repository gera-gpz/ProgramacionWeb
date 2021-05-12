<?php
session_start();

if(isset($_SESSION['usuario'])){
		 printf("REANUDANDO SESION <br>");
         printf("Bienvenido de nuevo".$_SESSION['usuario']);
} else {
         $_SESSION['usuario'] = 'NuevoUsuario';
       	 printf("NUEVO INICIO DE SESION <br>");
       	 printf("Bienvenido %s",$_SESSION['usuario']);
}

?>
