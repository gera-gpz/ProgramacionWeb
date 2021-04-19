$(document).ready(iniciarEventos);

function iniciarEventos() {
    $("#b_show").click(function() { $("#descripcion1").show("slow"); });

    $("#b_hide").click(function() { $("#descripcion1").hide("slow"); });

    $("#b_fadeIn").click(function() { $("#descripcion1").fadeIn("slow"); });
    $("#b_fadeOut").click(function() { $("#descripcion1").fadeOut("slow"); });

    $("#b_fadeTo_1").click(function() { $("#descripcion1").fadeTo("slow", 1); });
    $("#b_fadeTo_05").click(function() { $("#descripcion1").fadeTo("slow", 0.5); });
    

    $("#Pulsar").click(function() {
        $("img").fadeIn(10000);
        $("#marcoImagen").slideToggle("fast", "linear");
    });

    $('#Pulsar').mouseover(function() { $('#Pulsar').css('cursor', 'pointer'); });
}
