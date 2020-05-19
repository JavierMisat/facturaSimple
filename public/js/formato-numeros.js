$('#valor_pago').ready(function () {
    var precio = $('#valor_pago')[0].value;
    $('#valor_pago')[0].value = accounting.formatNumber($('#valor_pago')[0].value, 2);
});

$("#valor_pago").on({

    "focus": function(event) {
        $(event.target).select();
    },
    "keyup": function(event) {
        $(event.target).val(function(index, value) {
            return value.replace(/\D/g, "")
                .replace(/([0-9])([0-9]{2})$/, '$1.$2')
                .replace(/\B(?=(\d{3})+(?!\d)\.?)/g, ",");
        });
    }
});


