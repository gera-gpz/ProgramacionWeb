<!DOCTYPE html>
<html>
<head>
    <title>Matriz</title>
</head>
<body>

    <h3>Matriz numerica</h3>
    <h3>----------------------------</h3>

    <?php
    $vector[0][0]="0-0";$vector[0][1]="0-1";$vector[0][2]="0-2";
    $vector[1][0]="1-0";$vector[1][1]="1-1";$vector[1][2]="1-2";
    $vector[2][0]="2-0";$vector[2][1]="2-1";$vector[2][2]="2-2";

    printf("%s ",$vector[1][1]);
    ?>


    <h2>Matriz Numerica-Asociativa</h2>
    <h2>-----------------------------------------------</h2>
    <?php
    $pais=array( array('pais'=>'mexico',
                       'idioma'=>'espanol',
                       'moneda'=>'peso'),
                 array('pais'=>'eua',
                       'idioma'=>'ingles',
                       'moneda'=>'dolar'),
                 array('pais'=>'francia',
                       'idioma'=>'ingles',
                       'moneda'=>'dolar')
                );

    printf("<b>Pais</b>  = %s<br>",$pais[1]['pais']);
    printf("<b>Idioma</b>= %s<br>",$pais[1]['idioma']);
    printf("<b>Moneda</b>= %s<br>",$pais[1]['moneda']);


    foreach($pais as $x)
    {
        foreach($x as $indice=>$valor)
        {
        printf("%s = %s <br>",$indice,$valor);
        }
    }
    ?>


    <h2>Matriz Asociativa</h2>
	 <h2>-----------------------------------------------</h2>
    <?php
    $pais=array( 'mex'=>array('pais'=>'mexico',
                              'idioma'=>'espanol',
                              'moneda'=>'peso'),
                 'eua'=>array('pais'=>'eua',
                              'idioma'=>'ingles',
                              'moneda'=>'dolar'),
                 'fra'=>array('pais'=>'francia',
                              'idioma'=>'ingles',
                              'moneda'=>'dolar')
                );
    printf("<b>Pais</b>  = %s<br>",$pais['mex']['pais']);
    printf("<b>Idioma</b>= %s<br>",$pais['mex']['idioma']);
    printf("<b>Moneda</b>= %s<br>",$pais['mex']['moneda']);
    ?>



</body>
</html>