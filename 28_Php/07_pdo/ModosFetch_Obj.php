    <?php

include "conectar.php";

try {
    $consultaSql = "select nombre,apPaterno,apMaterno,login from cusuario";
    $consulta = $con -> prepare($consultaSql);
    $consulta -> execute();
    $resultado = $consulta->fetch(PDO::FETCH_OBJ);

    // Siguiente registro como objeto anónimo (las columnas seran las propiedades)
    //--------------------------------------------------------------------
    print "<h2><pre>fetch(PDO::FETCH_OBJ)</pre></h2>";
    print "<br>";
    var_dump($resultado);
    print "<br>";
    printf("<b>nombre     = </b> ".$resultado->nombre."<br>");
    printf("<b>apPaterno  = </b> ".$resultado->apPaterno."<br>");
    printf("<b>apMaterno  = </b> ".$resultado->apMaterno."<br>");
    printf("<b>Login      = </b> ".$resultado->login."<br>");

    $consulta->closeCursor();

} catch(PDOException $e) {
    echo "Error de consulta a la base de datos";
    echo $e->getMessage();
}

?>