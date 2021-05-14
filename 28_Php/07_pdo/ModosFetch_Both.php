<?php

include "conectar.php";

try {
    $consultaSql = "select nombre,apPaterno,apMaterno,login from cusuario";
    $consulta = $con -> prepare($consultaSql);
    $consulta -> execute();
    $resultado = $consulta->fetch(PDO::FETCH_BOTH);

    // Siguiente registro como array asociativo y numérico
    //--------------------------------------------------------------------
    print "<h2><pre>fetch(PDO::FETCH_BOTH)</pre></h2>";
    print "<br>";
    var_dump($resultado);
    print "<br>";
    printf("<b>nombre    = </b> %s %s <br>",$resultado[0],$resultado['nombre']);
    printf("<b>apPaterno = </b> %s %s <br>",$resultado[1],$resultado['apPaterno']);
    printf("<b>apMaterno = </b> %s %s <br>",$resultado[2],$resultado['apMaterno']);
    printf("<b>login     = </b> %s %s <br>",$resultado[3],$resultado['login']);
    print "<br><br><br>";

    $consulta->closeCursor();

} catch(PDOException $e) {
    echo "Error de consulta a la base de datos";
    echo $e->getMessage();
}
?>