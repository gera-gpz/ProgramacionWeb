$('document').ready(function () {

    presidentes = [{
            "Nombre": "Andrés Manuel López",
            "Edad": 70,
            "Direccion": "Jalisco 726",
            "Pais": 1,
            "Casado": true
        },
        {
            "Nombre": "Enrique Peña Nieto",
            "Edad": 50,
            "Direccion": "Reforma 2007",
            "Pais": 1,
            "Casado": false
        },
        {
            "Nombre": "Felipe Calderón",
            "Edad": 65,
            "Direccion": "Guererro 2801",
            "Pais": 1,
            "Casado": false
        },
        {
            "Nombre": "Vicente Fox",
            "Edad": 70,
            "Direccion": "Ocamp0 825",
            "Pais": 1,
            "Casado": true
        },
        {
            "Nombre": "Erneso Zedillo",
            "Edad": 68,
            "Direccion": "Linconln 2138",
            "Pais": 1,
            "Casado": false
        }
     ];

    var paises = [{
            Pais: "",
            Id: 0
        },
        {
            Pais: "México",
            Id: 1
        },
        {
            Pais: "Estados Unidos",
            Id: 2
        },
        {
            Pais: "Canada",
            Id: 3
        }
    ];


    $("#jsGrid").jsGrid({
        width: "100%",
        height: "400px",
        inserting: true,
        editing: true,
        sorting: true,
        paging: true,
        data: presidentes,
        fields: [{
                name: "Nombre",
                type: "text",
                width: 150,
                validate: "required"
            },
            {
                name: "Edad",
                type: "number",
                width: 50
            },
            {
                name: "Direccion",
                type: "text",
                width: 200
            },
            {
                name: "Pais",
                type: "select",
                items: paises,
                valueField: "Id",
                textField: "Pais"
            },
            {
                name: "Casado",
                type: "checkbox",
                title: "Casado",
                sorting: false
            },
            {
                type: "control"
            }
        ]
    });

});