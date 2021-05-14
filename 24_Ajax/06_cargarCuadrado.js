$(document).ready( function() {

$("#botonAjax").click(presionBoton);


function presionBoton() {
    var parnum = $("#num").val();

    $.get("06_cargarCuadrado.php", {num: parnum}, llegadaDatos);
    //return false;
}

function llegadaDatos(datos) {
    $('#resultado').html('<h3>El cuadrado es '+datos+'</h3>');
}

});


/*
$(document).ready( function() {

    $("#botonCalc").click(presionBoton);

    function presionBoton(e) {
        $.get("Ejemplo_get.php",
              { num: $("#num").val() },
              function (datos) {
                $('#resultado').html('<h3>El cuadrado es '+datos+'</h3>');
               });

        return false;
    }
});
*/



/*
$(document).ready( function() {

    $("#botonCalc").click(function() {
        $.get("Ejemplo_get.php",
              { num: $("#num").val() },
              function (datos) {
                $('#resultado').html('<h3>El cuadrado es '+datos+'</h3>');
               });
        return false;
    });
});

*/