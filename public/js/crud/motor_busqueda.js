$(document).on('ready', function () {
    $('#documento').focus();
});

$(document).keydown(function (event) {
    if (event.which === 13) {
        buscarCliente(this);
    }
});

function buscarCliente(documento) {
    var ruta = '/consultarcliente';
    var documento = $('#documento').val()

    $.ajax({
            url: ruta,
            data: {documento: documento},
            dataType: 'JSON',
            success: function (datos) {

                $('#clientes').replaceWith(datos);
                $('#sinResultados').fadeTo(3000, 600).slideUp(600, function () {
                    $('#sinResultados').slideUp(600);
                });
            }, error: function (respuesta) {
                $(".alert-danger").fadeTo(4000, 600).slideUp(600, function () {
                    $(".alert-danger").slideUp(600);
                });
            }
        }
    );
}

