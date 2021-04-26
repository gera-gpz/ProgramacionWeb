$('document').ready(function () {

    $('#botonSalir').click(function () {
        $('#modalSalida').modal();
    });

     $("#botonMenu").click(function (e) {
        e.preventDefault();
        $("#contenedorPrin").toggleClass("toggled");
    });

     $("#opcion1").click(function (e) {
        e.preventDefault();
        $("#contenedorPrin .contenido h1").html('Catálogos');
     });

    $("#opcion2").click(function (e) {
        e.preventDefault();
        $("#contenedorPrin .contenido h1").html('Pólizas');
     });

    $("#opcion3").click(function (e) {
        e.preventDefault();
        $("#contenedorPrin .contenido h1").html('Endosos');
     });

    $("#opcion4").click(function (e){
        e.preventDefault();
        $("#contenedorPrin .contenido h1").html('Reportes');
     });

});

