
$('#departamento').change(function (evento) {
    $.get('/listamunicipios/' + evento.target.value, function (respuesta, estado) {
        $('#municipio').empty();
        for (i = 0; i < respuesta.length; i++) {
            $('#municipio').append("<option value='" + respuesta[i].id_municipio + "'>" + respuesta[i].descripcion + "</option>");
        }
    });
});

$('.alert-danger').click( function () {
    $('.errors').remove();

});