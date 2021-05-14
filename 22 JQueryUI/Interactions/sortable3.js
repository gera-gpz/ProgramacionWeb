$("document").ready( function() {


   $("#items1,#items2,#items3").sortable({
                connectWith: "#items1,#items2,#items3",
                start: function (event, ui) { ui.item.toggleClass("highlight"); },
                stop: function (event, ui) { ui.item.toggleClass("highlight"); }
   });

});

