$(document).ready(function () {

  $("#muestra").click(function () {
    $("#zona").removeClass();
    $("#zona").addClass("muestra");
  });

  $("#oculta").click(function () {
    $("#zona").removeClass();
    $("#zona").addClass("oculta");
  });

});