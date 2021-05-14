
function agregaElemento(arg) {
    arg.push(4);
    return arg;
}

let a = [1,2,3];
let b = agregaElemento(a);

console.log(a);   // [1,2,3,4]
console.log(b);   // [1,2,3,4]


