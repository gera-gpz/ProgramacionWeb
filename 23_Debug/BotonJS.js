window.onload = function() {

    var miVariable= 1;
    document.getElementById('boton').addEventListener(`click`,funcionAlerta,false);


    function funcionUno() {
        console.log(miVariable);
    }


    function funcionDos() {
        var miVariable=2;
        console.log(miVariable)
        funcionUno();
    }


    function funcionAlerta() {
        debugger;
        alert("Presionaste el boton");
        funcionDos();
    }

};
