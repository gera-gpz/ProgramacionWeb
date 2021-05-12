<?php


function mostrarNombre($nombre)
{
    echo "Tu nombre es :".$nombre,'<br>';
}


function suma($par1,$par2)
{
    $suma=0;
    $suma=$par1+$par2;
    return $suma;
}

function OperacionesA($par1,$par2,&$sum,&$res,&$mul)
{
    $sum = $par1+$par2;
    $res = $par1-$par2;
    $mul = $par1*$par2;
}




mostrarNombre("Gerardo");
mostrarNombre("Fabian");

echo "La suma de 10 y 10 es igual a ".suma(10,10);


$var1=5;
$var2=2;

OperacionesA($var1,$var2,$s,$r,$m);

printf("La suma de %u + %u es igual a %u <br>",$var1,$var2,$s);
printf("La suma de %u + %u es igual a %u <br>",$var1,$var2,$r);
printf("La suma de %u + %u es igual a %u <br>",$var1,$var2,$m);


?>