window.onload = function() {

for (let f = 1; f <= 7; f++) {
    document.getElementById('enlace' + f).addEventListener('click', presionEnlace, false);
}

function presionEnlace(evento) {
    evento.preventDefault();
    cargarLenguaje(evento.target.getAttribute('href'));
}

function cargarLenguaje(scriptPhp) {
    var solicitudAjax = new XMLHttpRequest();

    solicitudAjax.onreadystatechange = function () {
         if (solicitudAjax.readyState == 4) {
            document.getElementById("detalles").innerHTML = solicitudAjax.responseText;
        } else {
            document.getElementById("detalles").innerHTML = 'Cargando.....';
        }
    };

    solicitudAjax.open("GET", scriptPhp, true);
    solicitudAjax.send(null);
}

}