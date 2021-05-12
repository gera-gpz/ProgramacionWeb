<!DOCTYPE html>
<html lang="es">
<! 
<?php
session_start();
if ( !isset($_SESSION['idUsuario']) || empty($_SESSION['idUsuario']) ) {
    header("Location: ./login.html");
}
?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Descripción">
    <meta name="author" content="Contenido">
    <title>Sistema</title>

    <link rel="stylesheet" href="./resources/bootstrap/css/bootstrap.min.css">
    <script src="./resources/jquery/jquery-1.11.3.min.js"></script>
    <script src="./resources/bootstrap/js/bootstrap.min.js"></script>
    <link rel='stylesheet' href='./css/ModalHeaderColor.css'/>

    <link rel="stylesheet" href="./resources/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="./css/index.css">
    <script src="./js/index.js"></script>
</head>

<body>
    <div id="contenedorPrin">

        <!-- Modal de Confirmación -->
        <div class="modal fade" id="modalSalida" role="dialog">
        <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header modal-header-primary">
                <button type="button" class="close" data-dismiss="modal">X</button>
                <h2 class="modal-title text-center">Confirmación</h2>
            </div>
            <div class="modal-body text-center">
                <h3>Desea salir del Sistema?</h3>
            </div>
            <div class="modal-footer">
               <a href="./php/logout.php" class="btn btn-default">Si</a>
               <a href="#" data-dismiss="modal" class="btn btn-default">No</a>
            </div>
        </div>
        </div>
        </div>

        <!-- Menu Lateral -->
        <div id="contenedorMenu">
            <div class="titulo-menu">Sistema</div>
            <ul class="menu">
                <li><a id="opcion1" href="#">Catálogos</a></li>
                <li><a id="opcion2" href="#">Pólizas</a></li>
                <li><a id="opcion3" href="#">Endosos</a></li>
                <li><a id="opcion4" href="#">Reportes</a></li>
            </ul>
        </div>

        <!-- Contenido -->
        <div id="contenedorConte">
            <div class="container-fluid">
                <div class="row encabezado">
                     <div class="col-xs-6 col-sm-6 enca1">
                         <a href="#botonMenu" class="btn btn-default btn-lg" id="botonMenu">
                         <i class="fa fa-bars"></i></a>
                     </div>

                     <div class="col-xs-6 col-sm-6 enca2">
                         <button type="button" class="btn btn-default btn-lg" id="botonUsuario"><?php echo $_SESSION['nombre'];?><i class="fa fa-user"></i></button>
                         <button type="button" class="btn btn-danger btn-lg" id="botonSalir">Salida<i class="fa fa-sign-out"></i></button>
                     </div>
                </div>

                <div class="row contenido">
                    <div class="jumbotron">
                         <h1>Bienvenid@</h1>
                    </div>
                </div>
            </div>
        </div>

    </div>
</body>
</html>