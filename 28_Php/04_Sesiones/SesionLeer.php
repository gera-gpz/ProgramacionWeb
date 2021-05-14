<?php
session_start();

if (isset($_SESSION['usuario'])) {
		 echo "El usuario es  ".$_SESSION['usuario'];
} else { echo "No existe la variable de sesion usuario";
}


echo "<h3> Mis variables de sesion</h3>";
   foreach ($_SESSION as $llave=>$valor)
   echo $llave." = ".$valor."<br/>";

echo '<pre>' . print_r($_SESSION, TRUE) . '</pre>';


echo 'id de sesion = '.session_id();
?>
