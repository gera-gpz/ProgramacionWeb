$('document').ready(function () {
    inicializarEventos();
});


function inicializarEventos() {
    $("#boton1").click(obtieneParrafo);
    $("#boton2").click(modificaParrafo);
}


function obtieneParrafo() {
    var x = $("#parrafo1").text();
    alert(x);
}


function modificaParrafo() {
    var x = 'nam tamen legam te varias distinguantur id o sint quo labore fore est singulis in fidelissimae anim e eram iudicem';
    $('#parrafo1').text(x);
}

