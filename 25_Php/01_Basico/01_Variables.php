<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Variables php</title>
</head>
<body>
    <h3>Características de las variables en php</h3>
    <ol>
        <li>Compienzan con $</li>
        <li>Son sensibles a mayúsculas y minúsculas</li>
        <li>No hay tipos de datos</li>
        <li>No es necesario declararlas (se declaran al asignarles un valor)</li>
    </ol>

    <?php
    $dia    = 10;           // declaración de variable tipo integer
    $sueldo = 800.32;       // declaración de variable tipo float
    $nombre = "gerardo";    // declaración de variable tipo string
    $activo = true;         // declaración de variable tipo booleana
    $cadena1= "cadena1";
    $cadena2= "cadena2";

    echo "<b>el dia es </b>";
    echo $dia;
    echo "<br>";

    echo "<b>el sueldo es </b>";
    echo $sueldo;
    echo "<br>";

    echo "<b>el nombre es </b>";
    echo $nombre;
    echo "<br>";

    echo "<b>el status es </b>";
    echo $activo;
    echo "<br><br><br>";

    echo "<b>Hoy es el día</b> $dia <b>y su nombre es</b> $nombre";
    echo "<br>";
    echo "<b>Esta es la cadena1 </b>".$cadena1." <b>Esta es la cadena2 </b>".$cadena2;

?>
</body>
</html>


