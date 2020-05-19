var url_actual = 1;

$(document).on('ready', function () {
    $('.panel-heading .panel-title .panel-control')
        .removeClass('hidden')
        .html('<a href="/pagos/create" class="btn btn-primary btn-sm btn-bordered">Agregar Pago <i class="fa fa-plus-circle"></i></a>');
});

function cargarDatos() {
    var ruta = '/pagos';
    $.ajax({
        url: ruta,
        data: {page: url_actual},
        dataType: 'JSON',
        success: function (datos) {
            $('#pagos').html(datos);
        }
    });
}

$(document).on('click', '.pagination a', function (even) {
    even.preventDefault();
    var pagina = $(this).attr('href').split('page=')[1];
    var ruta = '/pagos';
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


function eliminar(pagos) {

    var token = $('input[name="_token"]').val();
    var id_pago = pagos.value;
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
            $(".alert-info").fadeTo(4000, 600).slideUp(600, function () {
                $(".alert-info").slideUp(600);
            });
        }
    });
}
