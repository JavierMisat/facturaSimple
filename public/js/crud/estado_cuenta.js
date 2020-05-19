var url_actual = 1;

function cargarDatos() {
    var id_cliente = $('#id_cliente').val();
    var ruta = '/estadocuenta/' + id_cliente;
    $.ajax({
        url: ruta,
        data: {page: url_actual},
        dataType: 'JSON',
        success: function (datos) {
            $('#facturas').replaceWith(datos);
        }
    });
}

$(document).on('click', '.pagination a', function (even) {
    even.preventDefault();
    var pagina = $(this).attr('href').split('page=')[1];
    var id_cliente = $('#id_cliente').val();
    var ruta = '/estadocuenta/' + id_cliente;

    $.ajax({
        url: ruta,
        data: {page: pagina},
        dataType: 'JSON',
        success: function (datos) {
            url_actual = pagina;
            cargarDatos();
            $('#facturas').replaceWith(datos);
        }
    });

});
