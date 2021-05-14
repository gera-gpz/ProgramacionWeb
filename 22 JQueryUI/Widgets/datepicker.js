 $('document').ready(function () {

    $("#cFecha1").datepicker({
       dateFormat: "dd/mm/yy",
       altField: "#cFecha2",
       altFormat: "mm/dd/yy"
    });


    $("#cFecha3").datepicker();

 });