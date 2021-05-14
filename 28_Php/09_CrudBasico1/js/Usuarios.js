$('document').ready(function () {

    $("#buscar").autocomplete({
        source: "./php/UsuarioBuscarObj.php",
        minLength: 1,
        focus: function (event, ui) {
            event.preventDefault();
        },
        select: function ( event, ui ) {
            event.preventDefault();
            //console.log(ui);
            $("#nombre").val(ui.item.label);
            $("#idUsuario").val(ui.item.value.idUsuario);
            $("#apPaterno").val(ui.item.value.apPaterno);
            $("#apMaterno").val(ui.item.value.apMaterno);
            $("#login").val(ui.item.value.login);
            $("#password").val(ui.item.value.password);
            $("#buscar").val(ui.item.value.idUsuario);

            $('#b_nuevo').prop("disabled", false);     //Enabled
            $('#b_grabar').prop("disabled", true);     //Disabled
            $('#b_eliminar').prop("disabled", false);  //Enabled
        }
    });



    $("#b_limpiar").click(function () {
        $('input').val('');
        $('.form-control').prop("disabled", true);
        $('#b_nuevo').prop("disabled", false);
        $('#b_grabar').prop("disabled", true);
    });



    $("#b_nuevo").click(function () {
        $('input').val('');
        $('#b_nuevo').prop("disabled", true);
        $('#b_grabar').prop("disabled", false);
        $('#b_eliminar').prop("disabled", true);

        $('.form-control').prop("disabled", false);
        $('#idUsuario').prop("disabled", true);
        $("#nombre").focus();
    });



    $("#b_grabar").click(function () {
        var vidu = $('#idUsuario').val();
        var vnom = $('#nombre').val();
        var vapp = $('#apPaterno').val();
        var vapm = $('#apMaterno').val();
        var vlog = $('#login').val();
        var vpas = $('#password').val();

        $.post('./php/UsuarioGrabar.php',
                {idu: vidu, nom: vnom, app: vapp, apm: vapm, log: vlog, pas: vpas},
                function (ret) {
                 //console.log("Error Grabar");
                 //console.log(ret.resultado);
                if (ret['resultado'] != 0) {

                console.log('Error Insercion');

                $('#modalMensaje .modal-header').addClass('modal-header-danger');
                $('#modalMensaje .modal-header h2').text(ret['mensaje']);
                $('#modalMensaje .modal-body h3').text(ret['detalle']);
                $('#modalMensaje').modal();

                $("#modalMensaje").on('shown.bs.modal', function () {
                    $('#botonCerrar').focus();
                });
                $("#modalMensaje").on('hidden.bs.modal', function () {
                    $('#modalMensaje .modal-header').removeClass('modal-header-danger');
                });
                }
                else {
                //console.log("Registro Grabado");
                //console.log(ret['mensaje']);
                $('#idUsuario').val(ret['detalle']);

                $('#modalMensaje .modal-header').addClass('modal-header-success');
                $('#modalMensaje .modal-header h2').text(ret['mensaje']);
                $('#modalMensaje .modal-body h3').text("ID de Usuario : "+ret['detalle']);
                $('#modalMensaje').modal();

                $("#modalMensaje").on('shown.bs.modal', function () {
                    $('#botonCerrar').focus();
                });
                $("#modalMensaje").on('hidden.bs.modal', function () {
                    $('#myModal .modal-header').removeClass('modal-header-success');
                });

                $('#b_nuevo').prop("disabled", false);    //Enabled
                $('#b_grabar').prop("disabled", true);    //Disabled
                $('#b_eliminar').prop("disabled", false); //Enabled
            }
        },'json');

        $('.form-control').prop("disabled", true);
        $('#b_nuevo').prop("disabled",true);
        $('#b_grabar').prop("disabled",false);
        $('#b_eliminar').prop("disabled",true);
        $("#nombre").focus();
    });



    $('#b_eliminar').click( function() {
        var vidu = $('#idUsuario').val();

        if (confirm('Borrar')) {
            $.post('./php/UsuarioBorrar.php',
            {idUsuario: vidu},
            function (ret) {
                alert("Borrado");
            },'json');

            $('input').val('');
            $('.form-control').prop("disabled", true);
            $('#b_nuevo').prop("disabled", false);
            $('#b_grabar').prop("disabled", true);
            $('#b_eliminar').prop("disabled", true);
        } else {
            alert("No se borra");
        }
    });

});