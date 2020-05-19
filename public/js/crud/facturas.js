var url_actual = 1;

$(document).on('ready', function () {

    $('.panel-heading .panel-title')
        .removeClass('hidden')
        .html($('#buscador'));

    $('.panel-heading .panel-title #btnAgregar')
        .removeClass('hidden')
        .html('<a href="/facturas/create" class="btn btn-primary btn-sm btn-bordered">Agregar factura <i class="fa fa-plus-circle"></i></a>');

    $('#buscador').removeClass('hidden');
});


$('#busqueda').on('keyup', function () {
    var busqueda = $(this).val();
    $.ajax({
        type: 'GET',
        url: '/facturas',
        data:{'busqueda':busqueda},
        success: function (datos) {
            $('#facturas').replaceWith(datos);
            $('#registrosEncontrados').html( ' <span class="label label-default pull-right" style="font-size: 17px;">' +$('#numFacturas').val() + ' FACTURAS ENCONTRADAS' + '</span>');
        }
    });
});


function limpiarBusqueda() {
    $('#busqueda').val('');
    cargarDatos();
}


function cargarDatos() {
    var ruta = '/facturas';
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
    var ruta = '/facturas';
    $.ajax({
        url: ruta + '?page=' + pagina,
        data: {'busqueda': $('#busqueda').val()},
        dataType: 'JSON',
        success: function (datos) {
            url_actual = pagina;
            $('#facturas').replaceWith(datos);
        }
    });

});


function seleccionEliminar(elemento) {
    $('#id_factura').val(elemento.id);
}

function eliminar(facturas) {

    var token = $('input[name="_token"]').val();
    var id_factura = facturas.value;
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
