<?php

include "conectar.php";

try {
       $consultaSql = "select nombre,apPaterno,apMaterno,login from cusuario";
       $consulta = $con -> prepare($consultaSql);
       $consulta -> execute();

    //Siguiente registro como array numérico
    //--------------------------------------------------------------------
    $resultado = $consulta->fetch(PDO::FETCH_NUM);
    print"<h2>fetch(PDO::FETCH_NUM)</h2>";
    print "<br>";
    print_r($resultado);
    var_dump($resultado);
    print "<br>";
    printf("<b>nombre    = </b> %s <br>",$resultado[0]);
    printf("<b>apPaterno = </b> %s <br>",$resultado[1]);
    printf("<b>apMaterno = </b> %s <br>",$resultado[2]);
    printf("<b>login     = </b> %s <br>",$resultado[3]);
    print "<br><br><br>";



    //Siguiente registro como array asociativo y numérico
    //--------------------------------------------------------------------
    print "<h2>fetch(PDO::FETCH_BOTH)</h2>";
    $resultado = $consulta->fetch(PDO::FETCH_BOTH);
    print_r($resultado);
    var_dump($resultado);
    print "<br>";
    printf("<b>nombre    = </b> %s %s <br>",$resultado[0],$resultado['nombre']);
    printf("<b>apPaterno = </b> %s %s <br>",$resultado[1],$resultado['apPaterno']);
    printf("<b>apMaterno = </b> %s %s <br>",$resultado[2],$resultado['apMaterno']);
    printf("<b>login     = </b> %s %s <br>",$resultado[3],$resultado['login']);
    print "<br><br><br>";


    // Siguiente registro como objeto anónimo (las columnas seran las propiedades)
    //--------------------------------------------------------------------
    print "<h2>fetch(PDO::FETCH_LAZY)</h2>";
    $resultado = $consulta->fetch(PDO::FETCH_LAZY);
    print "<br>";
    print_r($resultado);
    print "<br>";
    var_dump($resultado);
    print "<br>";
    printf("<b>nombre     = </b> ".$resultado->nombre);
    printf("<b>apPaterno  = </b> ".$resultado->apPaterno);
    printf("<b>apMaterno  = </b> ".$resultado->apMaterno);
    printf("<b>Login      = </b> ".$resultado->login);



    //Obtiene todo el resulset como un vector numerico de arrays aosciativos
    //----------------------------------------------------------------------
    print "<h2>fetchAll()</h2>";
    $resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);
    print "<br>";
    print_r($resultado);
    print "<br>";
    var_dump($resultado);
    print "<br>";
    //Impresion de un registro del resultado
    printf("<b>nombre     = </b> ".$resultado[0]['nombre']."<br>");
    printf("<b>apPaterno  = </b> ".$resultado[0]['apPaterno']."<br>");
    printf("<b>apMaterno  = </b> ".$resultado[0]['apMaterno']."<br>");
    printf("<b>Login      = </b> ".$resultado[0]['login']."<br>");




    //Impresión del resulset mediante un for
    print "<h3>Ciclo For</h3>";
    for ($i=0; $i<=count($resultado)-1; $i++) {
       print "<b>nombre =</b> ".$resultado[$i]['nombre']."<br>";
       print "<b>apPaterno =</b> ".$resultado[$i]['apPaterno']."<br>";
       print "<b>apMaterno =</b> ".$resultado[$i]['apMaterno']."<br>";
       print "<b>Login =</b> ".$resultado[$i]['login']."<br>";
    }



    //Impresion del resultset mediante un for-foreach
    // print "<h3>For-Foreach Loop</h3>";
    // for ($i=0; $i<=count($result)-1; $i++) {
    //     foreach( $result[$i] as $index => $value) {
    //         print "<b>$index = </b> $value <br>";
    //     }
    // }



    $consulta->closeCursor();
    }
catch(PDOException $e)
    {
        echo "Error de consulta a la base de datos";
        echo $e->getMessage();
    }

?>