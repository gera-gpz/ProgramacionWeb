<?php
$Termino = $_GET['term'];

//$Termino = 'G';

$dbHost     = "localhost";
$dbName     = "apseguros";
$dbUsername = "root";
$dbPassword = "";
$listaDatos = array();

// Regresa un array de objetos para el Autocomplete

$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
if ($db->connect_error) {
    $data['label'] = $row['Err'];
    $data['value'] = $db->connect_error;
    array_push($listaDatos, $data);
} else {

    $query = $db->query("SELECT * FROM cusuario WHERE nombre LIKE '%".$Termino."%' ORDER BY nombre ASC");
    if($query->num_rows > 0){
        while($row = $query->fetch_assoc()){

        $datosreg['idUsuario'] = $row['idUsuario'];
        $datosreg['apPaterno'] = $row['apPaterno'];
        $datosreg['apMaterno'] = $row['apMaterno'];
        $datosreg['login']     = $row['login'];
        $datosreg['password']  = $row['password'];

        $data['label'] = $row['nombre'];
        $data['value'] = $datosreg;
        array_push($listaDatos, $data);
        }
    }
}

echo json_encode($listaDatos);
?>