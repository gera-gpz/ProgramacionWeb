<?php
$TerminoBusqueda=$_GET['term'];
// $TerminoBusqueda='G';
$distaDatos = array();

$hostname = 'localhost';
$database = 'apseguros';
$username = 'root';
$password = '';

// Regresa un array de strings para el Autocomplete

try {
    $conn = new PDO("mysql:host=$hostname;dbname=$database", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT idUsuario,nombre,apPaterno FROM cusuario
                            WHERE nombre LIKE '%".$TerminoBusqueda."%' ORDER BY nombre ASC");
    $stmt->execute();

    while($row = $stmt->fetch()) {
    $listaDatos[] =  $row['idUsuario'].' '.$row['nombre'].' '.$row['apPaterno'];
    }
} catch(PDOException $e) {
    $listaDatos[] =  $e->getMessage();
}

echo json_encode($listaDatos);
?>