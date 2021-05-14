<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <title>Desicion</title>
</head>

<body>
    <h3>Ejemplo de if</h3>

    <?php
    $dia=date("d");
    if ($dia<=10) { echo "El dia es menor o igual a 10"; }
    else { echo "El dia es mayor de 10"; }
    ?>



    <h3>Ejemplo de if elseif</h3>
    <?php
    $valor=rand(1,200);

    if ($valor<=9) { echo "El numero sorteado ( $valor ) tiene 1 digito"; }
    elseif ($valor<100) { echo "El numero sorteado ( $valor ) tiene 2 digito"; }
                   else { echo "El numero sorteado ( $valor ) tiene 3 digito"; }
    ?>




    <h3>Ejemplo de switch</h3>
    <?php
    $number = 3;
    switch($number)
    {
    case 1  :printf("Numero UNO");break;
    case 2  :printf("Numero DOS");break;
    case 3  :printf("Numero TRES");
    case 4  :printf("Numero CUATRO");break;
    default :printf("SIN NUMERO");
    }
    ?>

</body>

</html>