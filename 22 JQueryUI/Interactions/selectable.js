$("document").ready(function () {

    $("#opciones").selectable({
        selected: function () {
            var seleccion = $("#seleccion").empty();

            $(".ui-selected", this).each(function () {
                var indice = $("#opciones li").index(this);
                seleccion.append(" #" + (indice + 1));
            });
        },
        unselected: function () {
            var seleccion = $("#seleccion").empty();

            $(".ui-selected", this).each(function () {
                var indice = $("#opciones li").index(this);
                seleccion.append(" #" + (indice + 1));
            });
        }
    });

});