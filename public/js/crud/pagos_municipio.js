/**
 * Created by usuario on 3/11/2016.
 */
var url_actual = 1;

function cargarDatos() {
    var ruta = '/pagos/municipio';
    $.ajax({
        url: ruta,
        data: {page: url_actual},
        dataType: 'JSON',
        success: function (datos) {
            $('#municipios').html(datos);
        }
    });
}

$(document).on('click', '.pagination a', function (even) {
    even.preventDefault();
    var pagina = $(this).attr('href').split('page=')[1];
    var ruta = '/pagos/municipio';

    $.ajax({
        url: ruta,
        data: {page: pagina},
        dataType: 'JSON',
        success: function (datos) {
            url_actual = pagina;
            $('#municipios').html(datos);
        }
    });

});

