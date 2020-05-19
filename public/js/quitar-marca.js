$(document).on('ready', function(a) {
    function quitarMarca() {
        $('tspan').remove();
        console.log('eliminada marca')
    }
    setInterval(quitarMarca, 3);
});