document.addEventListener("DOMContentLoaded", function () {
    const cantidadInput = document.getElementById("cantidad");
    const precioInput = document.getElementById("precio");
    const totalInput = document.getElementById("total");

    // Formateador de números a COP
    function formatoCOP(valor) {
        return new Intl.NumberFormat("es-CO", {
            style: "currency",
            currency: "COP",
            minimumFractionDigits: 0
        }).format(valor);
    }

    function limpiarNumero(valor) {
        return valor.replace(/\D/g, ""); // Elimina todo lo que no sea número
    }

    function formatearInput(input) {
        let valor = limpiarNumero(input.value);
        if (valor) {
            input.value = formatoCOP(parseInt(valor)).replace("$", ""); // Remueve el símbolo de pesos
        }
    }

    function calcularTotal() {
        const cantidad = parseInt(limpiarNumero(cantidadInput.value)) || 0;
        const precio = parseInt(limpiarNumero(precioInput.value)) || 0;
        const total = cantidad * precio;

        totalInput.value = total ? formatoCOP(total) : "";
    }

    precioInput.addEventListener("input", function () {
        formatearInput(precioInput);
        calcularTotal();
    });

    cantidadInput.addEventListener("input", function () {
        calcularTotal();
    });
});

