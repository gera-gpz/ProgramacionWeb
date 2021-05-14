<!DOCTYPE html>
<html>
<head>
    <title>Ejemplo de formulario de proceso</title>
</head>
<body>
    <?php
    echo "Se ingreso el nombre    : ",$_GET['nombre'];
    echo " y la direccion : ",$_GET['direccion'],'<br><br>';
    echo "Su comentario fue :",$_GET['comentario'],'<br><br>';
    if ($_GET['radio1']=="suma")
         { echo "seleccionaste suma";  }
    else { echo "seleccionaste resta"; }
    ?>
</body>
</html>