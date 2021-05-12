<!DOCTYPE html>
<html>
<head>
    <title>Ejemplo de formulario de proceso</title>
</head>
<body>
    <?php
    echo "Se ingreso el nombre :",$_POST['nombre'];
    echo " y la direccion : ",$_POST['direccion'],'<br><br>';
    echo "Su comentario fue :",$_POST['comentario'],'<br><br>';
    if ($_POST['radio1']=="suma")
         { echo "seleccionaste suma";  }
    else { echo "seleccionaste resta"; }
    ?>
</body>
</html>