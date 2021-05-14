<!DOCTYPE html>
<html>
<head>
	<title>Arrays</title>
</head>
<body>
    <h2>Vector Tradicional</h2>

    <h3>Forma 1</h3>
    <?php
    echo 'Crendo el array usando el constructor array<br>';

    $dias = array("Dom","Lun","Mar","Mie","Jue","Vie","Sab");
    for($i=0; $i<=count($dias)-1; $i++)
        { printf("<b>Dia de la semana</b> %s <br>",$dias[$i]); }
    ?>

    <h3>Forma 2</h3>
    <?php
    echo '<br><br>Creando un array usando brackets<br>';

    $meses = ["Ene","Feb","Mar","Abr","May","Jun","Jul"];
    for($i=0; $i<=count($meses)-1; $i++)
        { printf("<b>Meses del año</b> %s <br>",$meses[$i]); }

    $meses[]='Ago';
    $meses[]='Sep';
    {printf("<b>Meses del año</b> %s <br>",$meses[7]); }
    {printf("<b>Meses del año</b> %s <br>",$meses[8]); }
    ?>



    <h3>Forma 3</h3>
    <?php
    $dias1[]="Dom";
	$dias1[]="Lun";
	$dias1[]="Mar";
	$dias1[]="Mie";
	$dias1[]="Jue";
	$dias1[]="Vie";	/* Php asigna el siguiente indice consecutivo*/
	$dias1[]="Sab";

    foreach ($dias1 as $elemento) {
        print $elemento.'<br>';

    }
    ?>


</body>

</html>
