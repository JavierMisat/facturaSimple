
var url_actual = 1;

$(document).on('ready', function () {
    $('.panel-heading .panel-title .panel-control')
        .removeClass('hidden')
        .html('<a href="/usuarios/create" class="btn btn-primary btn-sm btn-bordered">Agregar Usuario <i class="fa fa-plus-circle"></i></a>');
});

function cargarDatos() {
    var ruta = '/usuarios';
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
    var ruta = '/usuarios';

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


function seleccionEliminar(elemento) {
    $('#id_usuario').val(elemento.id);
}


function eliminar(usuario) {

    var token = $('input[name="_token"]').val();
    var id_usuario = usuario.value;
    var ruta = '/usuarios/' + id_usuario;

    $.ajax({
        url: ruta,
        headers: {'X-CSRF-TOKEN': token},
        type: 'DELETE',
        dataType: 'JSON',
        data: {id_usuario: id_usuario},
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


//