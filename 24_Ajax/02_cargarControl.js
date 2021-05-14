function ajaxFunction() {

    // Creamos el objeto XMLHttpRequest para comunicarnos con el servidor
    //-------------------------------------------------------------------
    var ajaxRequest;
    ajaxRequest = new XMLHttpRequest();


    // When Dinosaurs rule the earth
    // try { // Firefox Chrome Safar Opera
    //      var ajaxRequest;
    //      ajaxRequest = new XMLHttpRequest();
    // } catch (e) {
    //     try { // Internet Explorer Browsers
    //         ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
    //     } catch (e) {
    //         try {
    //             ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
    //         } catch (e) { // Something went wrong
    //             alert("Navegador chafo!");
    //             return false;
    //         }
    //     }
    // }


    // Funcion para procesar la respuesta del servidor
    //-------------------------------------------------
    ajaxRequest.onreadystatechange = function() {
        if (ajaxRequest.readyState == 4)                                // La respuesta esta lista?
        { document.formulario1.hora.value = ajaxRequest.responseText; } // Obtenemos la respuesta
    };

    ajaxRequest.open("GET","02_cargarControl.php",true);  //Configurar la solicitud
    ajaxRequest.send();                                  //Enviamos la solicitud

}
