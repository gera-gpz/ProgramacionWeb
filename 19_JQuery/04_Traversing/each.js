$('document').ready(function() {


    // $('.lista li').each(function(indice, elemento) { alert('indice=' + indice + '  elemento=' + $(elemento).text()); });

    //$('.lista li').each( function() { alert( $(this).text() ); } );
    //var vector = ['Gerardo','Fabian','Angel','Beto'];
    //$.each(vector, function(indice,elemento) { alert('indicevector='+indice+' elemento='+elemento); } );

    $('#tabla tr').each(function() { alert($(this).text()); });


    // var vectorPersona = ['Elena', 'Isabel', 'Ana'];
    // $.each(vectorPersona, function(ind, elem) { console.log('¡Hola :' + elem + '!'); });

});
