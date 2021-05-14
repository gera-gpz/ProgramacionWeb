$('document').ready(function () {

$('#botonAceptar').click(botonIniciarSesion);

$('#inputPassword').keypress(function(e) {
        if (e.keyCode == 13 ) { botonIniciarSesion(); }
});


function botonIniciarSesion() {

    var vLog = $('#inputLogin').val();
    var vPas = $('#inputPassword').val();

        if (vLog == 'gerardop' && vPas=='gpineda') ||
           (vLog == 'juanp' && vPas=='jperez'){

            console.log('login correcto');

            $('#myModal .modal-header').addClass('modal-header-success');
            $('#myModal .modal-header h2').text('Acceso Concedido');
            $('#myModal .modal-body h3').text('Bienvenido');
            $('#myModal').modal();

            $("#myModal").on('shown.bs.modal',function() {
                $('#botonCerrar').focus();
                });
            $("#myModal").on('hidden.bs.modal',function() {
                $('#myModal .modal-header').removeClass('modal-header-success');
                $(location).attr('href',"main.html");
                });

        }
        else {
            console.log('login incorrecto');

            $('#myModal .modal-header').addClass('modal-header-danger');
            $('#myModal .modal-header h2').text('Acceso Denegado');
            $('#myModal .modal-body h3').text('Credeciales incorrectas');
            $('#myModal').modal();

            $("#myModal").on('shown.bs.modal',function() {
                $('#botonCerrar').focus();
            });
            $("#myModal").on('hidden.bs.modal',function() {
                $('#myModal .modal-header').removeClass('modal-header-danger');
                $('#inputLogin').focus();
            });

        }

}});