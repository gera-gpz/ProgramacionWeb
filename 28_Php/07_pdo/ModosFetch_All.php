<?php

include "conectar.php";

try {
    $consultaSql = "select nombre,apPaterno,apMaterno,login from cusuario";
    $consulta = $con -> prepare($consultaSql);
    $consulta -> execute();
    $resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);

    //Obtiene todo el resulset como un vector numérico de arrays asociativos
    //----------------------------------------------------------------------
    print "<h2><bre>fetchAll()</pre></h2>";
    print "<br>";
    var_dump($resultado);
    print "<br>";

    //Impresion de un registro del resultado
    //--------------------------------------
    printf("<b>nombre     = </b> ".$resultado[0]['nombre']."<br>");
    printf("<b>apPaterno  = </b> ".$resultado[0]['apPaterno']."<br>");
    printf("<b>apMaterno  = </b> ".$resultado[0]['apMaterno']."<br>");
    printf("<b>Login      = </b> ".$resultado[0]['login']."<br>");


    //Impresión del resulset mediante un for
    //--------------------------------------
    print "<h3>Ciclo For</h3>";
    for ($i=0; $i<=count($resultado)-1; $i++) {
       print "<b>nombre =</b> ".$resultado[$i]['nombre']."<br>";
       print "<b>apPaterno =</b> ".$resultado[$i]['apPaterno']."<br>";
       print "<b>apMaterno =</b> ".$resultado[$i]['apMaterno']."<br>";
       print "<b>Login =</b> ".$resultado[$i]['login']."<br>";
    }


    //Impresión del resultset mediante un for/foreach
    //-----------------------------------------------
    print "<h3>For-Foreach Loop</h3>";
    for ($i=0; $i<=count($resultado)-1; $i++) {
        foreach( $resultado[$i] as $index => $value) {
            print "<b>$index = </b> $value <br>";
        }
    }

    $consulta->closeCursor();
    }
catch(PDOException $e)
    {
        echo "Error de consulta a la base de datos";
        echo $e->getMessage();
    }


?>