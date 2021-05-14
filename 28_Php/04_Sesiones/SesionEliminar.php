<?php
session_start();

$_SESSION = [];     // Limpiar variables de sesion en array asoaciativo
session_destroy();  // Elimiar archivo temporal del servidor

?>