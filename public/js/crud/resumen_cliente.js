var url_actual = 1;

$(document).on('ready', function () {
    $('.panel-heading .panel-title .panel-control')
        .removeClass('hidden');
});


function cargarDatos() {
    var id_cliente = $('#id_cliente').val();
    var ruta = '/facturascliente/' + id_cliente;
    $.ajax({
        url: ruta,
        data: {page: url_actual},
        dataType: 'JSON',
        success: function (datos) {
            $('#facturas').html(datos);
        }
    });
}

$(document).on('click', '.pagination a', function (even) {
    even.preventDefault();
    var pagina = $(this).attr('href').split('page=')[1];
    var id_cliente = $('#id_cliente').val();
    var ruta = '/facturascliente/' + id_cliente;

    $.ajax({
        url: ruta,
        data: {page: pagina},
        dataType: 'JSON',
        success: function (datos) {
            url_actual = pagina;
            cargarDatos();
            $('#facturas').html(datos);
        }
    });

});

function seleccionEliminar(elemento) {
    $('#id_factura').val(elemento.id);
}

function eliminar(factura) {
    var token = $('input[name="_token"]').val();
    var id_factura = factura.value;
    var ruta = '/facturas/' + id_factura;
    $.ajax({
        url: ruta,
        headers: {'X-CSRF-TOKEN': token},
        type: 'DELETE',
        dataType: 'JSON',
        data: {id_factura: id_factura},
        success: function () {
            cargarDatos();
            $('#modalEliminar').modal('toggle');
            $(".alert-info").fadeTo(4000, 600).slideUp(600, function () {
                $(".alert-info").slideUp(600);
            });
        }
    });
}