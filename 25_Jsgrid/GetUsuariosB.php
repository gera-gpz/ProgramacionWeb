<?php

$hostname='localhost';
$database='apseguros';
$username='root';
$password='';


try {
    $con = new PDO("mysql:host=$hostname;dbname=$database",$username,$password);
} catch(PDOException $e) {
    echo "Error de conexión a la base de datos";
    echo $e->getMessage();
    exit();
}

$con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

try {
    $consultaSql = "select idUsuario,nombre,apPaterno,apMaterno,login from cusuario";
    $consulta = $con -> prepare($consultaSql);
    $consulta -> execute();
    $resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);
    $consulta->closeCursor();

} catch(PDOException $e) {
    echo "Error de consulta a la base de datos";
    echo $e->getMessage();
}

echo json_encode($resultado);
?>
