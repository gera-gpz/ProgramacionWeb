<?php

// json_encode()  =  Variable Php  =>    Cadena Json
// json_decode()  =  Cadena Json   =>    Variable (array or object)

print "<h1>ARRAY NUMERICO a cadena Json y viceversa</h1>";

print "<h3>Variable Array :</h3>";
$cadena=array('manzana','naranja','platano');
var_dump($cadena);
print $cadena[0].' '.$cadena[1].' '.$cadena[2];


print "<h3>json_encode() .... Array to Json</h3>";
$cadenaJson = json_encode($cadena);
var_dump($cadenaJson);
print $cadenaJson;


print "<h3>json_decode() .... Json to Array</h3>";
$varJson=json_decode($cadenaJson);
print var_dump($varJson);
print $varJson[0].' '.$varJson[1].' '.$varJson[2];





print "<br><br><br><br>";
print "<h1>ARRAY ASOCIATIVO a cadena Json y viceversa</h1>";
print "<h3>Variable Array Asociativa :</h3>";
$asociativo=array('Nombre'=>'Gerardo','Apellido'=>'Pineda','Depto'=>'Sistemas');
var_dump($asociativo);
print ($asociativo{'Nombre'}.' '.$asociativo{'Apellido'}.' '.$asociativo{'Depto'});



print "<h3>json_encode() .... Array Asoc to Json</h3>";
$cadenaJsonA=json_encode($asociativo);
var_dump($cadenaJsonA);
print $cadenaJsonA;



print "<h3>json_decode().... Json to Objeto</h3>";
$varJsonA = json_decode($cadenaJsonA);
var_dump($varJsonA);
print $varJsonA->Nombre.' '.$varJsonA->Apellido.' '.$varJsonA->Depto;

print "<h3>json_decode(true).... Json to Asoc</h3>";
$varJsonA = json_decode($cadenaJsonA,true);
var_dump($varJsonA);
print $varJsonA{'Nombre'}.' '.$varJsonA{'Apellido'}.' '.$varJsonA{'Depto'};






print "<br><br><br><br>";
print "<h1>ARRAY NUMERICO DE ASOCIATIVOS/OBJETOS a cadena Json y viceversa</h1>";
$registros=array(array('Nombre'=>'Gerardo','Apellido'=>'Pineda','Depto'=>'Sistemas'),
                 array('Nombre'=>'Ramiro','Apellido'=>'Lopez','Depto'=>'Seguros'),
                 array('Nombre'=>'Sergio','Apellido'=>'Zamora','Depto'=>'Glosa'));


print "<h3>Variable Array de asociativos</h3>";
var_dump($registros);
print $registros[0]['Nombre'];

print "<h3>json_encode() .... Se pasa a cadena Json</h3>";
$cadenaJsonAA=json_encode($registros);
var_dump($cadenaJsonAA);

print "<h3>json_decode() .... Se pasa a variable Php (Array numerico de objetos)</h3>";
$varJsonAA = json_decode($cadenaJsonAA);
var_dump($varJsonAA);
print $varJsonAA[0]->Nombre.' '.$varJsonAA[0]->Apellido.' '.$varJsonAA[0]->Depto.'<br>';
print $varJsonAA[1]->Nombre.' '.$varJsonAA[1]->Apellido.' '.$varJsonAA[1]->Depto.'<br>';
print $varJsonAA[2]->Nombre.' '.$varJsonAA[2]->Apellido.' '.$varJsonAA[2]->Depto.'<br>';

print "<h3>json_decode(true).... Se pasa a variable Php (Array numerico de asociativos)</h3>";
$varJsonAA = json_decode($cadenaJsonAA,true);
var_dump($varJsonAA);
print $varJsonAA[0]['Nombre'].' '.$varJsonAA[0]['Apellido'].' '.$varJsonAA[0]['Depto'].'<br>';
print $varJsonAA[1]['Nombre'].' '.$varJsonAA[1]['Apellido'].' '.$varJsonAA[1]['Depto'].'<br>';
print $varJsonAA[2]['Nombre'].' '.$varJsonAA[2]['Apellido'].' '.$varJsonAA[2]['Depto'].'<br>';





// print "<br><br>";
$asociativo4=array( 'mex'=>array('pais'=>'mexico',
                                 'idioma'=>'espanol',
                                 'moneda'=>'peso'),
                    'eua'=>array('pais'=>'eua',
                                 'idioma'=>'ingles',
                                 'moneda'=>'dolar'),
                    'fra'=>array('pais'=>'francia',
                                 'idioma'=>'ingles',
                                 'moneda'=>'dolar')
                  );
$objetoJson4=json_encode($asociativo4);
var_dump($asociativo4);
var_dump($objetoJson4);
print $objetoJson4;


?>