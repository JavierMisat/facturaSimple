$(document).on('ready', function () {
    var tab = $(location).attr('href').split('oficinas')[1];
    if (tab != "") {
        $('a[href$=' + tab + ']').click();
    }
});


$('a[href$="Pacho"]').on('click', function () {
    $('#mapaPacho').html('<iframe src="https://www.google.com/maps/d/u/0/embed?mid=1Dwt41mnamktp3fUwvBYgDUhbkx8" width="640" height="480"></iframe>');
});

$('a[href$="Caparrapi"]').on('click', function () {
    $('#mapaCaparrapi').html('<iframe src="https://www.google.com/maps/d/u/0/embed?mid=1IJodB0ab6LapFxdkRGpCtrmxMvs" width="640" height="480"></iframe>');
});

$('a[href$="Palma"]').on('click', function () {
    $('#mapaPalma').html('<iframe src="https://www.google.com/maps/d/u/0/embed?mid=1cW3jsYVxI5IRT8-xrITpFhqCJp0" width="640" height="480"></iframe>');
});

$('a[href$="Yacopi"]').on('click', function () {
    $('#mapaYacopi').html('<iframe src="https://www.google.com/maps/d/u/0/embed?mid=1CLm4knGANv_NLqPVXwPmfnfG-nI" width="640" height="480"></iframe>');
});

