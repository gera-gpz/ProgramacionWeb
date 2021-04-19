$('document').ready(function () {


    $(".li1").mouseover(function () {
        $(this).css("background-color", "#82FA58");
        $(this).css("border", "1px solid blue");
    });
    
    $(".li1").mouseout(function () {
        $(this).css("background-color", "#fff");
        $(this).css("border", "1px white");
    });


    $(".li2").hover(function () {
            $(this).css("background-color", "#FFFF00");
        },
        function () {
            $(this).css("background-color", "#fff");
        }
    );
});