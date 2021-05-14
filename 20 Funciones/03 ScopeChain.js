var miVariable= 1;

break;

function funcionUno() {
    console.log(miVariable);
}


function funcionDos() {
    var miVariable=2;
    console.log(miVariable)
    funcionUno();
}

funcionDos();
