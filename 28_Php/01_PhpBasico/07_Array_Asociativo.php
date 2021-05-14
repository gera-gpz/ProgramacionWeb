<!DOCTYPE html>
<html>
<head>
    <title>ArrayAsoc</title>
</head>
<body>
    <h2>Array Asociativo</h2>
    <p>En los arrays asociatios en lugar de tener un indice numerico, se tiene un nombre</p>
    <h3>Forma 1 </h3>
    <?php
	$registro['num']='1';
	$registro['nom']='gerardo';
    $registro['dir']='washington';
	$registro['tel']='1000691';

    printf("<b>Numero    =</b> %s <br>",$registro['num']);
    printf("<b>Nombre    =</b> %s <br>",$registro['nom']);
    printf("<b>Direccion =</b> %s <br>",$registro['dir']);
    printf("<b>Telefono  =</b> %s <br>",$registro['tel']);
    ?>


    <h3>Forma 2</h3>
    <?php
    $registros=array('num'=>'1',
                     'nom'=>'gerardo',
                     'dir'=>'washington',
                     'tel'=>'1000691');

    foreach($registros as $indice => $dato)
        { printf("<b>%s</b> = %s <br>",$indice,$dato); }
	?>

</body>
</html>
