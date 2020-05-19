var url_actual = 1;

function cargarDatos() {
    var ruta = '/pagos/usuario';
    $.ajax({
        url: ruta,
        data: {page: url_actual},
        dataType: 'JSON',
        success: function (datos) {
            $('#usuarios').html(datos);
        }
    });
}

$(document).on('click', '.pagination a', function (even) {
    even.preventDefault();
    var pagina = $(this).attr('href').split('page=')[1];
    var ruta = '/pagos/usuario';

    $.ajax({
        url: ruta,
        data: {page: pagina},
        dataType: 'JSON',
        success: function (datos) {
            url_actual = pagina;
            $('#usuarios').html(datos);
        }
    });

});

