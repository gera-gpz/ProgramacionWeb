$(document).ready(function() {

$("#menu a").click(presionEnlace);

function presionEnlace() {

    var scriptPhp = $(this).attr("href");   //extrae el atributo href del disparador

    $("#detalles").load(scriptPhp); //load  1) establece comunicacion asincrona
                                    //      2) Recibe los datos
                                    //      3) anade la informacion al selector
    return false;
}

});