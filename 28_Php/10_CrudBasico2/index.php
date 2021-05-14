<!DOCTYPE html>
<html>
<head>
  <title>Consulta de clientes</title>
</head>
<body>
<h1>PDO : Consulta Tabla de clientes</h1>
<?php
$accion = isset($_GET['accion']) ? $_GET['accion'] : "";
if($accion=='borrado')  { // Si viene desde delete.php
    //alert('Registro Eliminado');
}

include 'connect.php';
$query = "SELECT id_cliente,nombre,direccion,telefono FROM clientes";
$stmt = $dbh->prepare( $query );
$stmt->execute();
$num = $stmt->rowCount();

if($num>0) {
        echo '<input type="button" value="Nuevo" onclick="insertar_cliente();"/>';
        echo '<table border="1">';
        echo '<tr>';
        echo '<th>ID_Cliente</th>';
        echo '<th>Nombre</th>';
        echo '<th>Dirección</th>';
        echo '<th>Teléfono</th>';
        echo '</tr>';

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                  extract($row);    //convertira $row[`id_cliente`] en $id_cliente
                  echo '<tr>';
                  echo '<td>'.$id_cliente.'</td>';
                  echo '<td>'.$nombre.'</td>';
                  echo '<td>'.$direccion.'</td>';
                  echo '<td>'.$telefono.'</td>';
                  echo '<td>';
                  echo '<input type="button" value="Editar" onclick="editar_cliente('.$id_cliente.');"/>';
                  echo '  ';
                  echo '<input type="button" value="Borrar" onclick="borrar_cliente('.$id_cliente.',&#39;'.$nombre.'&#39;);"/>';
                  echo '</td>';
                  echo '</tr>';
                }
        echo '</table>';
} else {
        echo '<input type="button" value="Nuevo" onclick="insertar_cliente()"/>';
        echo "La tabla esta vacia";
}
?>

<script>
    function insertar_cliente() {
      window.location = "insert.php";
    }

    function editar_cliente(Id) {
      window.location = "edit.php?id_cliente=" + Id;
    }

    function borrar_cliente(Id, nombre) {
      var respuesta = confirm('Esta seguro de borrar a ' + nombre);

      if (respuesta) {
        window.location = 'delete.php?id_cliente=' + Id;
      }
    }
</script>

</body>

</html>