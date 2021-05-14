

let vector = [];
vector.push(1,2);
vector.push(3,4);
vector.shift(1);
vector.push(8);
console.log(vector);


// [ 2, 3, 4, 8 ]   OK
// [ 1, 2, 3, 8 ]
// [ 8, 2, 3, 4 ]




// ------------------------------------------------------------------------------------
// 9 La segunda variable declarada con let solo sera visible dentro de su propio bloque
// ------------------------------------------------------------------------------------
let version = '1';
console.log(version);

if (true) {
    let version = '2';
    console.log(version);
}

console.log(version);

// 1   2   1    OK
// 1   2   2





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
    console.log(frase);
    var frase='Hola';
}
saludar();

