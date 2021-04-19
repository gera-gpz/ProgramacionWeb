$('document').ready(function () {

    $("#boton1").click(agregaBorde);
    $("#boton2").click(recuperaBorde);
    $("#boton3").click(eliminaBorde);

    function agregaBorde() {
    $("#tabla1").attr("border", 1);
    }



    function recuperaBorde() {
    var x = $("#tabla1").attr("border")

    if ( x != undefined)
        alert("El border es : "+x);
    else
        alert("No hay borde definido");
    }


    function eliminaBorde() {
    // $("#tabla1").attr("border",0);
    $("#tabla1").removeAttr("border");
    }
});
