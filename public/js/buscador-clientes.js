var ruta = '/buscarclientefactura';


$('input.typeahead').typeahead({
    hint: false,
    highlight: true,
    minLength: 1,

    source: function (request, process) {
        $.get(ruta, {clienteBuscar: request}, function (datos) {
            return process(datos);
        });
    },
    updater: function (item) {
        //logic on selected item here.. e.g. append it to div in html
        $('#cliente').val(item.id);
        $('#documento').val(item.documento);
        $('#telefono').val(item.telefono);
        return item;
    },
    sorter: function (items) {
        if (items.length == 0) {
            var noResult = new Object();
            items.push(noResult);
        }
        return items;
    },
    autoSelect: true,
    displayText: function (item) {
        return item.name;
    }

});

