$(function () {


     $("#Lista1, #Lista2").sortable({
       connectWith: "#Lista1, #Lista2",
       placeholder: "highlight"
     });


     $("#Lista3, #Lista4").sortable({
       connectWith: "#Lista3, #Lista4",
       placeholder: "highlight"
     });

});