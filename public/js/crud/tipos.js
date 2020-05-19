var url_actual = 1;

$(document).on('ready', function () {
    $('.panel-heading .panel-title .panel-control')
        .removeClass('hidden')
        .html('<a href="/tipos/create" class="btn btn-primary btn-sm btn-bordered">Agregar Tipo Cliente <i class="fa fa-plus-circle"></i></a>');
});


function cargarDatos() {
    var ruta = '/clientes/tipos/';
    $.ajax({
        url: ruta,
        data: {page: url_actual},
        dataType: 'JSON',
        success: function (datos) {
            $('#tipos').html(datos);
        }
    });
}

$(document).on('click', '.pagination a', function (even) {
    even.preventDefault();
    var pagina = $(this).attr('href').split('page=')[1];
    var ruta = '/clientes/tipos/';
    $.ajax({
        url: ruta,
        data: {page: pagina},
        dataType: 'JSON',
        success: function (datos) {
            url_actual = pagina;
            $('#tipos').html(datos);
        }
    });

});

function seleccionEliminar(elemento) {
    $('#id_tipo').val(elemento.id);
}

function eliminar(tipos) {

    var token = $('input[name="_token"]').val();
    var id_tipo = tipos.value;
    var ruta = '/tipos/' + id_tipo;

    $.ajax({
        url: ruta,
        headers: {'X-CSRF-TOKEN': token},
        type: 'DELETE',
        dataType: 'JSON',
        data: {id_tipo: id_tipo},
        success: function () {
            cargarDatos();
            $('#modalEliminar').modal('toggle');
            $(".alert-info").fadeTo(4000, 600).slideUp(600, function () {
                $(".alert-info").slideUp(600);
            });
        },
        error: function (respuesta) {
            $('#modalEliminar').modal('toggle');
            $(".alert-danger").fadeTo(4000, 600).slideUp(600, function () {
                $(".alert-danger").slideUp(600);
            });
        }
    });
}
