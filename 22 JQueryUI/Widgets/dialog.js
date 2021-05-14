$('document').ready(function() {

    $("#dialogMsg").dialog({
      autoOpen: false
    });


    $('#boton').click( function() { 
      $('#dialogMsg').dialog("open"); 
    });

});

