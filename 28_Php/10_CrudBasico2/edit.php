<!DOCTYPE HTML>
<html>
<head>
    <title>Editar Registro</title>
</head>

<body>
<?php
include 'connect.php';

if ($_POST) {
    try {
        $query = "update clientes
                  set nombre = :nombre, direccion = :direccion, telefono = :telefono
                  where id_cliente = :id_cliente";

        $stmt = $dbh->prepare($query);
        $stmt->bindParam(':nombre', $_POST['nombre']);
        $stmt->bindParam(':direccion', $_POST['direccion']);
        $stmt->bindParam(':telefono', $_POST['telefono']);
        $stmt->bindParam(':id_cliente', $_POST['id_cliente']);

        if($stmt->execute()) {
            echo "Registro Actualizado.";
        } else {
            die('Ocurrio un error');
        }

        } catch(PDOException $exception) {
            echo "Error: " . $exception->getMessage();
        }
    }
?>


<?php
try {
    //include 'connect.php';
    $query = "select id_cliente,nombre,direccion,telefono from clientes where id_cliente = ? limit 0,1";

    $stmt = $dbh->prepare( $query );
    $stmt->bindParam(1, $_REQUEST['id_cliente']);
    $stmt->execute();

    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    $id_cliente= $row['id_cliente'];
    $nombre    = $row['nombre'];
    $direccion = $row['direccion'];
    $telefono  = $row['telefono'];

    } catch(PDOException $exception) { //to handle error
        echo "Error: " . $exception->getMessage();
    }
?>


    <!--we have our html form here where new user information will be entered-->
    <h1>PDO: Editar Registro Tabla Clientes</h1>
    <form action='#' method='post' border='0'>
        <table>
            <tr>
                <td>Nombre</td>
                <td><input type='text' name='nombre' value='<?php echo $nombre;  ?>' /></td>
            </tr>
            <tr>
                <td>Direccion</td>
                <td><input type='text' name='direccion' value='<?php echo $direccion;  ?>' /></td>
            </tr>
            <tr>
                <td>Telefono</td>
                <td><input type='text' name='telefono' value='<?php echo $telefono;  ?>' /></td>
            </tr>

            <td></td>
            <td>
                <!-- so that we could identify what record is to be updated -->
                <input type='hidden' name='id_cliente' value='<?php echo $id_cliente ?>' />
                <input type='submit' value='Grabar' />

                <input type='button' value='regresar' onclick='regresar()' />
            </td>

        </table>
    </form>


    <script>
        function regresar() {
            window.location = 'index.php';
        }
    </script>

</body>

</html>