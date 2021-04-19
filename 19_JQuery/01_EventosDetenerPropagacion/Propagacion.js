
$(document).ready(function() {

    /* Deteniendo la propagacion del evento*/

    $('.contenedor1').click(function (event) {
        event.stopPropagation();
        console.log('Click ' + $(this).attr('id'));
    })

    /* Dejando que el evento se propague*/
    $('.contenedor2').click(function () {
        console.log('Click ' + $(this).attr('id'));
    });

});