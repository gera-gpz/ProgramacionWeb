$('document').ready(function () {

$.post('./getUsuarios.php', function (ret) {


        if ( ret['resultado'] !=0 ) {
             alert('Error de carga');
        } else {
             $("#jsGrid").jsGrid({
             width: "100%",
             height: "400px",
             inserting: true,
             editing: true,
             sorting: true,
             paging: true,
             data: ret['detalle'],
             onItemDeleted: function(args) {   console.log(args.item);  },
             fields: [{ name: "idUsuario",type: "text",title: "ID",
                       width: 100,validate: "required"},
                     { name: "nombre",type: "text",title: "Nombre",
                       width: 100},
                     { name: "apPaterno",type: "text",title: "Ap.Paterno",
                       width: 200},
                     { name: "apMaterno",type: "text",title: "Ap.Materno",
                       width: 200},
                     { name: "login",type: "text",title: "Login",
                       width: 200},
                     { type: "control"}],
            });
        }

},'json');




});