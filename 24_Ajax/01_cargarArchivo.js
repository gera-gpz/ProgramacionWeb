function ajaxRequest() {

var xmlhttp = new XMLHttpRequest();          //Crear objeto XMLHttpRequest

xmlhttp.onreadystatechange = function() {   // En esta propiedad declaramos la funcion a ejecutar
                                            // cuando cambie el status del objeto XMLHttpRequest

    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {                 // La respueta esta lista
        document.getElementById("MyDiv").innerHTML = xmlhttp.responseText;  // La propiedad responseText tiene la respuesta en texto
}};

xmlhttp.open("GET", "01_cargarArchivo.txt", true);
xmlhttp.send();
}

function ponerHeader() {
	document.getElementById("MyDiv").innerHTML = "<h2>Este es un Header nivel 2<h2>"; 
}
