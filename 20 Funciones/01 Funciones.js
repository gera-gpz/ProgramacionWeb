 // Immediately-invoked Function Expression IIFE (iffi)
//  Self Executed Function


// Declaración de funcion "normal" en Javascript
//----------------------------------------------
function miFuncion() {
    var cadena="Hola Mundo"
    console.log(cadena);
    return cadena;
};

miFuncion();



// Las IIFE se ejecutan tan pronto como son definidas:
// Sin "encerramos" la función entre parentesis
// Y creamos una expresión de función agregando () al final
// La convertimos en una IIFE o Self-Executing-Function
//----------------------------------------------
( function miFuncion() {
    var cadena="Hola Mundo"
    console.log(cadena);
    return cadena;
})();




// Puede ser anómina:
//-------------------
( function() {
    var cadena="Hola Mundo"
    console.log(cadena);
    return cadena;
})();




// Si necesitamos el valor de retorno
// Lo guardamos en una variable
//----------------------------------
let miCadena= ( function() {
    var cadena="Hola Mundo"
    console.log(cadena);
    return cadena;
})();

miCadena;




// Al asigar la IIFE a una variable no necesitamos
// encerrarla entre parentesis
//------------------------------------------------
let miCadena = function() {
    var cadena="Hola Mundo"
    console.log(cadena);
    return cadena;
}();

miCadena;
