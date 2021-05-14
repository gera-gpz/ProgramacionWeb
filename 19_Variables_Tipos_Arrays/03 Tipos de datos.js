

// ----------------------------------
// Una variable puede cambiar de tipo
// ----------------------------------

let variable = "Juan";    // Declaración de variable y asignación de un string
console.log(variable);

variable = 5000;          // Cabiamos su valor (su tipo) a number
console.log(variable);

variable = "Fernando";    // Cabiamos su valor (su tipo) a string
console.log(variable);





// ---------------------------------------------------------------------------------------------
// Operador typeof para saber el Tipo de dato de una variable, isInteger para saber si es entero
// ---------------------------------------------------------------------------------------------

let miVar;
console.log('El tipo de miVar es... '+typeof(miVar));

miVar="Sistemas";
console.log('El tipo de miVar es... '+typeof(miVar));

console.log('miVar es Integer?... '+Number.isInteger(miVar));

variable = 5000;
console.log(typeof(variable));





// ---------------------------------------
// Tipos Primitivos = Asignacion por valor
// ---------------------------------------
let a = 1;
let b = a;
console.log(a,b);

b=2;
console.log(a,b);



// -----------------------------------------------
// Tipos No-primitivos = Asignacion por referencia
// -----------------------------------------------
let a = [1,2,3];
let b = a;

console.log(a,b);

b.push(4);
console.log(a,b);



// --------------------------------------------------
// Pasando Primitivos a una funcion, se pasa el valor
// --------------------------------------------------
function sumaUno(arg) {
    arg = arg + 1;
    return arg;
}

let a = 1;
let b= sumaUno(a);

console.log(a);
console.log(b);



// ----------------------------------------------------
// Pasando objetos a una funcion, se pasa la referencia
// ----------------------------------------------------
function agregaElemento(arg) {
    arg.push(4)
    return arg;
}

let a = [1,2,3];
let b = agregaElemento(a);

console.log(a);
console.log(b);




// -----------------
// Coercion de tipos
// ------------------
let a = '2'
let b = 8

console.log(typeof(a + b));  // string + number = string
console.log(typeof(a * b));  // string * number = number

