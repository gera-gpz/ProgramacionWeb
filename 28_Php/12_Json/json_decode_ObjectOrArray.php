<?php

// json_decode puede regresar ya sea un objeto o un array asociativo

// $cadenaJson='{"numero":"10","nombre":"Gerardo","direccion":"Reforma 2007","telefono":"1000123" }';
$cadenaJson='{ "numero": "10", "nombre": "Gerardo", "direccion": "Reforma 2007", "telefono": "1000123", "editores": ["vscode","sublime","atom","vim"] }';

print "<h2>Recibimos una cadena Json en nuestro script de php</h2>";
print "<br>";
print "$cadenaJson";


//REGRESANDO OBJETO
//------------------------------------------------------------------
print "<br><br><h2> Aplicando json_decode para obtener un objeto</h2>";
$info = json_decode($cadenaJson);

var_dump($info);

print "<h4>Imprimiendo propiedades del objeto:</h4>";
echo $info->numero.'<br>';
echo $info->nombre.'<br>';
echo $info->direccion.'<br>';
echo $info->telefono.'<br>';
echo $info->editores[0].'<br>';




//REGRESANDO ARRAY ASOCITAIVO
//------------------------------------------------------------------
print "<br><br><h2>Aplicando json_decode para obtener un array asociativo</h2>";
$info = json_decode($cadenaJson,true);
var_dump($info);

print "<h4>Imprimiendo Array Asociativo:</h4>";
echo $info{'numero'}.'<br>';
echo $info{'nombre'}.'<br>';
echo $info{'direccion'}.'<br>';
echo $info{'telefono'}.'<br>';
echo $info{'editores'}{1}.'<br>';


?>