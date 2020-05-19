
function seleccionarUsuario(elemento) {
    $('#id_usuario').val(elemento.id);
}


function eliminarUsuario(usuario) {

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
            cargarDatosUsuario();
            $('#modalEliminarUsuario').modal('toggle');
            $(".alert-info").fadeTo(4000, 600).slideUp(600, function () {
                $(".alert-info").slideUp(600);
            });
        },
        error: function (respuesta) {
            $('#modalEliminarUsuario').modal('toggle');
            $(".alert-danger").fadeTo(4000, 600).slideUp(600, function () {
                $(".alert-danger").slideUp(600);
            });
        }
    });
}


//