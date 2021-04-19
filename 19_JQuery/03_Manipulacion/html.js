
$('document').ready(inicializarEventos);


function inicializarEventos() {
    $("#boton1").click(mostrarFormulario);
}

function mostrarFormulario() {
    var contenidoHtml="<form>" +
                      "<label for='nombre'>Nombre:</label>" +
                      "<input type='text' id='nombre'><br>" +
                      "<label for='apellidos'>Apellidos:</label>" +
                      "<input type='text' id='apellidos'><br>" +
                      "<button id='boton3' name='buton'>Confirmar</button>" +
                      "</form>";
    $("#formulario").html(contenidoHtml);
}

