<?php

include "conectar.php";

try {
    $consultaSql = "select nombre,apPaterno,apMaterno,login from cusuario";
    $consulta = $con -> prepare($consultaSql);
    $consulta -> execute();
    $resultado = $consulta->fetch(PDO::FETCH_NUM);

    //Siguiente registro como array numérico
    //--------------------------------------------------------------------
    print"<h2><pre>PDO::FETCH_NUM</pre></h2>";
    print "<br>";
    var_dump($resultado);
    print "<br>";
    printf("<b>nombre    = </b> %s <br>",$resultado[0]);
    printf("<b>apPaterno = </b> %s <br>",$resultado[1]);
    printf("<b>apMaterno = </b> %s <br>",$resultado[2]);
    printf("<b>login     = </b> %s <br>",$resultado[3]);
    print "<br><br><br>";

    $consulta->closeCursor();

} catch(PDOException $e) {
    echo "Error de consulta a la base de datos";
    echo $e->getMessage();
}
?>