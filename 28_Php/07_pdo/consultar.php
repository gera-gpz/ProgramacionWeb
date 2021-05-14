<?php
include "conectar.php";

try {
       $queryStr="select * from clientes";
       $query=$con->prepare($queryStr);
       $query->execute();

        while ($row = $query->fetch()) {
            echo $row['idCliente'].'-'.
                 $row['nombre'].'-'.
                 $row['direccion'].'-'.
                 $row['telefono'].'<br>';
        }
        $query->closeCursor();
} catch(PDOException $e) {
        echo "Error de consulta a la base de datos";
        echo $e->getMessage();
}
?>