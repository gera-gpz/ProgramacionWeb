
<?php
include 'connect.php';

$Id = $_GET['id_cliente'];
// echo $Id;

$sql = "DELETE FROM clientes WHERE id_cliente = ?";
$stmt = $dbh->prepare($sql);
$stmt->bindParam(1, $Id);

if ($stmt->execute()){
   header('Location: index.php?accion=borrado');
} else {
   die("Error al borrar");
}
?>