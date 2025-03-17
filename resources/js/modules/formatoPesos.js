document.addEventListener("DOMContentLoaded", function () {
    window.formatCurrency = function (input) {
        let value = input.value.replace(/\./g, '').replace(/\D/g, '');
        let formatted = new Intl.NumberFormat('es-CO').format(value);
        input.value = formatted;
    };
});
