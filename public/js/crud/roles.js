$(document).on('ready', function () {
    $('.panel-heading .panel-title .panel-control')
        .removeClass('hidden')
        .html('<a href="/roles/create" class="btn btn-primary btn-sm btn-bordered">Agregar Rol <i class="fa fa-plus-circle"></i></a>');
});
