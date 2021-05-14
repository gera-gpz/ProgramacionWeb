
$("document").ready(function () {
    
     $("#sortable-1").sortable({   placeholder: "highlight",
                                   update: function(event,ui)
                                            {
                                             var resultado = $(this).sortable('toArray').toString();
                                             
                                             $("#orden").text(resultado);
                                            }
                                 });

});
