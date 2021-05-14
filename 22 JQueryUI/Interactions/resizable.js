$(function () {

    $("#cajaVariable1").resizable({
        animate: true,
        alsoResize: "#cajaVariable2"
    });


    $("#cajaVariable2").resizable({
        ghost: true,
        autoHide: true
    });


    $("#cajaVariable3").resizable({
        ghost: true,
        containment: "#contenedor",
        minWidth: 200,
        minHeight: 150
    });
});