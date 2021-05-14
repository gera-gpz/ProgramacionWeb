<?php

include "conectar.php";

try {
    $consultaSql = "select nombre,apPaterno,apMaterno,login from cusuario";
    $consulta = $con -> prepare($consultaSql);
    $consulta -> execute();
    $resultado = $consulta->fetch(PDO::FETCH_ASSOC);

    //Siguiente registro como array asaociativo
    //--------------------------------------------------------------------
    print"<h2><pre>PDO::FETCH_ASOC</pre></h2>";
    print "<br>";
    var_dump($resultado);
    print "<br>";
    printf("<b>nombre    = </b> %s <br>",$resultado['nombre']);
    printf("<b>apPaterno = </b> %s <br>",$resultado['apPaterno']);
    printf("<b>apMaterno = </b> %s <br>",$resultado['apMaterno']);
    printf("<b>login     = </b> %s <br>",$resultado['login']);
    print "<br><br><br>";

    $consulta->closeCursor();

} catch(PDOException $e) {
    echo "Error de consulta a la base de datos";
    echo $e->getMessage();
}
?>