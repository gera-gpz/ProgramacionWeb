$('document').ready(function () {
    iniciarEventos();
});


function iniciarEventos() {
    $("#titulo1").click(presionTitulo)
    $("#botonListaOculta").click(presionBotonListaOculta);
    $("#botonListaMuestra").click(presionBotonListaMuestra);
    $("td").click(presionData);
}



function presionTitulo() {
    var x;
    x = $("#titulo1");
    x.css("color", "#ff0000");
    x.css("background-color", "ffff00");
    x.css("font-family", "Courier");
}



function presionBotonListaOculta() {
    var x;
    x = $("#lista1");
    x.hide();
}

function presionBotonListaMuestra() {
    var x;
    x = $("#lista1");
    x.show();
}


function presionData() {
    var x;
    x = $(this);
    x.css("background-color","blue");
    x.css("color","white");
}
