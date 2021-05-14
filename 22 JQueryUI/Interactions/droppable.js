$("document").ready(function () {


    $(".elementos").draggable({
        revert: "invalid"
    });


    $("#frutas").droppable({
        tolerance: "fit",
        accept: ".fruta",
        activeClass: "active",
        hoverClass: "hover",
        drop: function (event, ui) {
            $(this).addClass("ui-state-highlight");
        }
    });

    $("#verduras").droppable({
        tolerance: "fit",
        accept: ".verdura",
        activeClass: "active",
        hoverClass: "hover",
        drop: function (event, ui) {
            $(this).addClass("ui-state-highlight");
        },
        over: function (event, ui) {
            $(this).html("Moving in");
        },
        out: function (event, ui) {
            $(this).html("Moving out");
        },
    });

});