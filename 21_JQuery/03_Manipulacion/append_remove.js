$('document').ready(inicio);

function inicio() {
    $("#botonAdd").click(function () {
        var x = $('#list1 li').length+1;
        console.log(x);

        $("#list1 ul").append('<li><a href="#">Elemento'+x+' </a></li>');
    });


    $("#botonDel").click(function () {
        $("#list1 ul li:last-child").remove();
    });
}