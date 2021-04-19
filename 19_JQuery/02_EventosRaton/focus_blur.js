
$(document).ready(function () {
    $("#buscar").focus(focusEnBuscar);
    $(".entry").focus(tomaFoco);
    $(".entry").blur(pierdeFoco);
});


function focusEnBuscar() {
    $("#buscar").attr("value", "");
    $("#boton1").attr("disabled", false);

}


function tomaFoco() {
    $(this).css("background-color", "#f00");
    $(this).css("color", "white");
}

function pierdeFoco() {
    $(this).css("background-color", "white");
    $(this).css("color", "black");
}