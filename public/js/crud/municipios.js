var url_actual = 1;

$(document).on('ready', function () {
    $('.panel-heading .panel-title .panel-control')
        .removeClass('hidden')
        .html('<a href="/pagos/municipio" class="btn btn-primary btn-sm btn-bordered">Ver Municipios Donde Estamos Presentes <i class="fa fa-globe"></i></a>');
});

function cargarDatos() {
    var id_municipio = $('#id_municipio').val();
    var ruta = '/municipios/' + id_municipio;
    $.ajax({
        url: ruta,
        data: {page: url_actual},
        dataType: 'JSON',
        success: function (datos) {
            $('#pagos').html(datos);
        }
    });
}

$(document).on('click', '.tabPagos a', function (even) {
    even.preventDefault();
    var pagina = $(this).attr('href').split('page=')[1];
    var id_municipio = $('#id_municipio').val();
    var ruta = '/municipios/' + id_municipio;
    $.ajax({
        url: ruta,
        data: {page: pagina},
        dataType: 'JSON',
        success: function (datos) {
            url_actual = pagina;
            $('#pagos').html(datos);
        }
    });

});


function seleccionEliminar(elemento) {
    $('#id_pago').val(elemento.id);
}


function eliminar(pago) {

    var token = $('input[name="_token"]').val();
    var id_pago = pago.value;
    var ruta = '/pagos/' + id_pago;

    $.ajax({
        url: ruta,
        headers: {'X-CSRF-TOKEN': token},
        type: 'DELETE',
        dataType: 'JSON',
        data: {id_pago: id_pago},
        success: function () {
            cargarDatos();
            $('#modalEliminar').modal('toggle');
            $(".alert-success").fadeTo(4000, 600).slideUp(600, function () {
                $(".alert-success").slideUp(600);
            });
        }
    });
}
