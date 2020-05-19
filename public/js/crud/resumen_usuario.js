var url_actual = 1;

function cargarDatos() {
    var id_usuario = $('#id_usuario').val();
    var ruta = '/pagosusuario/' + id_usuario;
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
    var id_usuario = $('#id_usuario').val();
    var ruta = '/pagosusuario/' + id_usuario;

    $.ajax({
        url: ruta,
        data: {page: pagina},
        dataType: 'JSON',
        success: function (datos) {
            url_actual = pagina;
            cargarDatos();
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
            $(".alert-info").fadeTo(4000, 600).slideUp(600, function () {
                $(".alert-info").slideUp(600);
            });
        }
    });
}