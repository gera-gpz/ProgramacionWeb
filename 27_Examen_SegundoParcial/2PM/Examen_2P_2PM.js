

let vector = [];
vector.push('a','b');
vector.push('c','d');
vector.shift();
vector.push('e');
console.log(vector);


// [ a, b, c, e ]
// [ b, c, d, e ]   OK
// [ a, b, c, d ]




// ------------------------------------------------------------------------------------
// La segunda segunda declaracion con var es una reasignacion
// ------------------------------------------------------------------------------------

var version = '1';
console.log(version);

if (true) {
    var version = '2';
    console.log(version);
}

console.log(version);

// 1   2   1
// 1   2   2    OK





// ------------------------------------------------------------------------------------------------
// Las variables declaradas con let son visibles solo en el bloque de codigo donde esten declaradas
// ------------------------------------------------------------------------------------------------

function Hola() {
    let saludo = "Hola";
}
Hola();
console.log(saludo);


// Reference Error   OK
// undefined
// Saludo





// ------------------------------------------------------------------------------
// ------------------------------------------------------------------------------
//  Hoisting. Solo se elevara la declaracion, la asigacion se quedara donde este.
// -------------------------------------------------------------------------------

function saludar() {
    var frase;
    console.log(frase);
    frase='Hola';
}
saludar();

// Reference Error
// undefined         OK
// Saludo



