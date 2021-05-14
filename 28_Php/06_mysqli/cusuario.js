$(document).ready(function () {

    var vusuarios=["Gerardo","Gabriela","Gustavo",
                   "Angel","Adalberto","Adolfo",
                   "Fabian","Fernanda","Facundo",
                   "Jazmin","Jacinta","Julieta"];

    console.log(vusuarios);

    $('#bGrabar').click(Grabar);

    $('#buscar').autocomplete({ source:vusuarios });

});


function Grabar() {
    alert('Grabando...');
}

