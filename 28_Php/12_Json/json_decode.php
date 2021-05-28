<?php

$cadenaJson='{
              "numero":"10",
              "nombre":"Gerardo",
              "direccion":"Washington",
              "telefono":"1000691",
              "lenguajes":["Sql","Html","Css","Javascript","Jquery","Php","Perl"],
              "basesdatos":["SqlServer","MySql"]
            }';

$info = json_decode($cadenaJson);

echo 'numero : '.$info->numero.'<br>';
echo 'nombre : '.$info->nombre.'<br>';
echo 'direccion : '.$info->direccion.'<br>'; 
echo 'telefono : '.$info->lenguajes[0].'<br>';


print 'lenguajes : ';
foreach ($info->lenguajes as $element)
    {
    printf("%s / ",$element);
    }
print "<br>";


print 'basesdatos : ';
foreach ($info->basesdatos as $element)
    {
    printf("%s / ",$element);
    }
print "<br>";

?>