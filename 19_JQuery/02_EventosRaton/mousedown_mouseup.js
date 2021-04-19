$('document').ready(function() {

    $("td").mousedown(clickMouse);
    $("td").mouseup(unclickMouse);
});

function clickMouse() {
    $(this).css("background", "#f75586");
    $(this).css("color", "#e6f536");
}

function unclickMouse() {
    $(this).css("background", "#e8edff");
    $(this).css("color", "#669");
}
