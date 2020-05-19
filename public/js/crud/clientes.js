var url_actual = 1;

$(document).on('ready', function () {
    $('.panel-heading .panel-title')
        .removeClass('hidden')
        .html( $('#buscador') );
    $('.panel-heading .panel-title #btnAgregar')
        .removeClass('hidden')
        .html('<a href="/clientes/create" class="btn btn-primary btn-lg btn-bordered">Agregar Cliente <i class="fa fa-plus-circle"></i></a>');

    $('#buscador').removeClass('hidden');
});


$('#busqueda').on('keyup', function () {
   var busqueda = $(this).val();
   $.ajax({
      type: 'GET',
       url: '/clientes',
       data:{'busqueda':busqueda},
       success: function (datos) {
           $('#clientes').replaceWith(datos);
           $('#registrosEncontrados').html( ' <span class="label label-default pull-right" style="font-size: 17px;">' +$('#numClientes').val() + ' CLIENTES ENCONTRADOS' + '</span>');
       }
   });
});


function limpiarBusqueda() {
    $('#busqueda').val('');
    cargarDatos();
}


function cargarDatos() {
    var ruta = '/clientes';
    $.ajax({
        url: ruta,
        data: {page: url_actual},
        dataType: 'JSON',
        success: function (datos) {
            $('#clientes').replaceWith(datos);
        }
    });
}

$(document).on('click', '.pagination a', function (even) {
    even.preventDefault();
    var pagina = $(this).attr('href').split('page=')[1];
    var ruta = '/clientes';

    $.ajax({
        url: ruta + '?page=' + pagina,
        data: {'busqueda': $('#busqueda').val()},
        dataType: 'JSON',
        success: function (datos) {
            url_actual = pagina;
            $('#clientes').replaceWith(datos);
        }
    });

});


function seleccionEliminar(elemento) {
    $('#id_cliente').val(elemento.id);
}


function eliminar(cliente) {

    var token = $('input[name="_token"]').val();
    var id_cliente = cliente.value;
    var ruta = '/clientes/' + id_cliente;

    $.ajax({
        url: ruta,
        headers: {'X-CSRF-TOKEN': token},
        type: 'DELETE',
        dataType: 'JSON',
        data: {id_cliente: id_cliente},
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