<?php
include "conectar.php";

try {
       $queryStr="select * from cusuario";
       $query=$con->prepare($queryStr);
       $query->execute();

        while ($row = $query->fetch()) {
            echo $row['idUsuario'].'-'.
                 $row['nombre'].'-'.
                 $row['apPaterno'].'-'.
                 $row['apMaterno'].'<br>';
        }
        $query->closeCursor();

} catch(PDOException $e) {
        echo "Error de consulta a la base de datos";
        echo $e->getMessage();
}
?>