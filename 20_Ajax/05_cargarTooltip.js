$(document).ready( function() {

    $("body").append('<div id="divTooltip"></div>');
    $("#divTooltip").hide();

    $(".cuadrado").hover(function(e) {
            $("#divTooltip").show();
            $("#divTooltip").css("left", e.clientX + document.body.scrollLeft + 5);
            $("#divTooltip").css("top", e.clientY + document.body.scrollTop + 5);
            $("#divTooltip").load("05_cargarTooltip.php?cod=" + $(this).attr('id'));
        },
        function() {
            $("#divTooltip").hide();
        }
    );

    $(".cuadrado").mousemove(function(e) {
        $("#divTooltip").css("left", e.clientX + document.body.scrollLeft + 5);
        $("#divTooltip").css("top", e.clientY + document.body.scrollTop + 5);
    });

});
