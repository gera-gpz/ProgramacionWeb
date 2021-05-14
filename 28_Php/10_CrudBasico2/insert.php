<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Insertar clientes</title>
</head>

<body>

<?php
    if($_POST) { include 'connect.php';

                 try {
                      $query = "INSERT INTO clientes SET id_cliente = ?, nombre = ?, direccion = ?, telefono  = ?";
                      $stmt = $dbh->prepare($query);
                      $stmt->bindParam(1, $_POST['id_cliente']);
                      $stmt->bindParam(2, $_POST['nombre']);
                      $stmt->bindParam(3, $_POST['direccion']);
                      $stmt->bindParam(4, $_POST['telefono']);

                     if ($stmt->execute()) {
                         echo "Registro grabado";
                     } else {
                         die('Error Al grabar');
                     }

                    } catch(PDOException $exception) { 
                        echo "Error: " . $exception->getMessage();
                    }
                }
?>

<form action="#" method="POST">
        <table>
            <tr>
                <td>ID Cliente:</td>
                <td><input type="text" name="id_cliente" id="id_cliente" /></td>
            </tr>
            <tr>
                <td>Nombre:</td>
                <td><input type="text" name="nombre" id="nombre" /></td>
            </tr>
            <tr>
                <td>Direccion:</td>
                <td><input type="text" name="direccion" id="direccion" /></td>
            </tr>
            <tr>
                <td>Telefono:</td>
                <td><input type="text" name="telefono" id="telefono" /></td>
            </tr>
        </table>
        <input type="submit" value="Grabar" />
        <input type="reset" value="Limpiar" />
        <a href='index.php'>Regresar</a>
</form>

</body>

</html>