$('document').ready(function () {

$('#botonAceptar').click(botonIniciarSesion);

$('#inputPassword').keypress(function(e) {
        if (e.keyCode == 13 ) { botonIniciarSesion(); }
});


function botonIniciarSesion() {

    var vLog = $('#inputLogin').val();
    var vPas = $('#inputPassword').val();

    $.post('./php/login.php', {Login:vLog,Password:vPas}, function(ret) {

        console.log(ret);
        if (ret['resultado'] != 0) {
            console.log('login incorrecto');

            $('#myModal .modal-header').addClass('modal-header-danger');
            $('#myModal .modal-header h2').text(ret.mensaje);
            $('#myModal .modal-body h3').text(ret.detalle);
            $('#myModal').modal();

            $("#myModal").on('shown.bs.modal',function() {
                $('#botonCerrar').focus();
            });
            $("#myModal").on('hidden.bs.modal',function() {
                $('#myModal .modal-header').removeClass('modal-header-danger');
                $('#inputLogin').focus();
            });
        }
        else {
            console.log('login correcto');

            console.log(ret);

            $('#myModal .modal-header').addClass('modal-header-success');
            $('#myModal .modal-header h2').text(ret.mensaje);
            $('#myModal .modal-body h3').text(ret.detalle);
            $('#myModal').modal();

            $("#myModal").on('shown.bs.modal',function() {
                $('#botonCerrar').focus();
                });
            $("#myModal").on('hidden.bs.modal',function() {
                $('#myModal .modal-header').removeClass('modal-header-success');
                $(location).attr('href',"index.php");
                });
        }
    },'json');

}});