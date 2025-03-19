document.addEventListener("DOMContentLoaded", function () {
    window.formatCurrency = function (input) {
        if (!input) return; // Evita errores si el input es null

        let value = input.value.replace(/\./g, '').replace(/\D/g, '');
        let formatted = new Intl.NumberFormat('es-CO').format(value);
        input.value = formatted;
    };

    // Aplicar formato automáticamente a los inputs con la clase .currency
    let currencyInputs = document.querySelectorAll(".currency");
    if (currencyInputs.length > 0) {
        currencyInputs.forEach(input => {
            input.addEventListener("input", function () {
                formatCurrency(this);
            });
        });
    }
});
