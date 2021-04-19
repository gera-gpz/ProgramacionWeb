// $(document).ready( function() {

//     $("#boton1").click(asociaClase);
//     $("#boton2").click(desasociaClase);

//     function asociaClase() { $("#contenedor").addClass("recuadro");  }
//     function desasociaClase() { $("#contenedor").removeClass("recuadro");} 
// });


$(document).ready(function () {
    $("#boton1").click(function () {
        $("#contenedor").addClass("recuadro");
    });
    $("#boton2").click(function () {
        $("#contenedor").removeClass("recuadro");
    });
});