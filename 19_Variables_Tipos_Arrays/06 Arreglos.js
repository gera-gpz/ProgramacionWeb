
// Declaración de un arreglo con corchetes
// Esta es la forma más usada
// ---------------------------------------
let vector1=[1,2,3,4,5];
console.log(vector1);


// Declaración de un arreglo usando new Array()
// Esto creará un array con la longitud especificada
// pero sin elementos
// -------------------------------------------------
let vector2 = new Array(4);
console.log(vector2);


// Accedemos a los elementos con brackets, empezando de cero
// ---------------------------------------------------------
let vector1=[1,2,3,4,5];
console.log(vector1[3]);


// Los elementos de un arreglo pueden ser de diferentes tipos
// ----------------------------------------------------------
let vector1=[1,'Juan',true,{nombre:"Juan",edad:20},function(){ console.log("Hola Mundo"); } ];

console.log(vector1[0]);
console.log(vector1[1]);
console.log(vector1[2]);
console.log(vector1[3]);
console.log(vector1[3].nombre);
console.log(vector1[3].edad);
console.log(vector1[4]);

vector1[4]();     //ejecuta la función del arreglo


// Los arreglos se copian por referencia
// -------------------------------------
let arreglo1 = [1,2,3,4,5];
let arreglo2 = arreglo1

console.log(arreglo1);
console.log(arreglo2);

arreglo2.push(6);

console.log(arreglo1);
console.log(arreglo2);




// La propiedad length es igual al último índice+1
// todos los métodos de array ajustan automáticamente la propiead length.
// ---------------------------------------------------------------------
let vector3=[1,2,3,4,5];
console.log(vector3.length);
console.log(vector3);



// Si reducimos el valor de length, truncaremos el array
// -----------------------------------------------------
let vector3=[1,2,3,4,5];
vector3.length=3;
console.log(vector3.length);
console.log(vector3);



// Simulación de una pila, usando los métodos push y pop
// -----------------------------------------------------
let pila = [];

pila.push(1);
pila.push(2);
pila.push(3,4);

let ultimo = pila.pop();
console.log(ultimo);



// Simulación de una cola, usando los metodos push y shift
// -------------------------------------------------------
let cola = [];

cola.push(1);
cola.push(2);
cola.push(3,4);

let primero = cola.shift();
console.log(primero);



// Con unshift podemos agregar un elemento al inicio del array
// -----------------------------------------------------------
let vector = [];

vector.push(1);
vector.push(2);
vector.push(3,4);

console.log(vector);
vector.unshift(0);
console.log(vector);



// Como los arrays son objetos podemos usar el operador `delete` Para remover elementos
// Pero como delete se usa para remover propiedades de un elemento
// Nos dejará el espacio en el arreglo
// ------------------------------------------------------------------------------------
let arreglo = [1,2,3,4,5,6,7,8,9];

delete arreglo[2];
console.log(String(arreglo));       // [1,2, ,4,5,6,7,8,9]
console.log(arreglo[2]);




// Metodo splice para remover, reemplazar, insertar elementos
// ----------------------------------------------------------
// Remover
let vector = [1,2,3,4,5,6];
console.log(vector);
vector.splice(1,2);              // Del indice 1 remueve 2 elementos
console.log(vector);

//Remplazar
let vector = [1,2,3,4,5,6];
console.log(vector);
vector.splice(1,2,200,300);      // Del indice 1 reemplaza 2 elementos
console.log(vector);

//Insertar
let vector = [1,2,3,4,5,6];
console.log(vector);
vector.splice(1,0,200,300);      // Del indice 1 no remueve e inserta 2 elementos
console.log(vector);




// Metodo slice para obetener una "rebanada" del arreglo
// -----------------------------------------------------
let vector1 = [1,2,3,4,5,6,7];
let vector2 = vector1.slice(1, 4);   // Regresa un arreglo de la posición 1 a la 4
console.log(vector2);                // Sin tomar la posicion 4




// Método concat para concatenar arreglos
// --------------------------------------
let vector1=[1,2,3];
let vector2=[4,5,6];

let vector3=vector1.concat(vector2);
console.log(vector3);




// Recorrer arreglos
// -----------------
// for clásico
let vector=['uno','dos','tres'];
for (let i=0; i<vector.length; i++) {
    console.log(vector[i]);
}

//for of
let vector=['uno','dos','tres'];
for (let elemento of vector) {
    console.log(elemento);
}

// forEach
let vector=['uno','dos','tres'];
vector.forEach(function(elemento, indice, arreglo) { 
    console.log(indice+' = '+elemento+' = '+arreglo); 
} );


