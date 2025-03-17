// document.addEventListener('DOMContentLoaded', function () {
//     // Inicialización del toggle del sidebar
//     const sidebarToggle = document.body.querySelector('#sidebarToggle');
//     if (sidebarToggle) {
//         sidebarToggle.addEventListener('click', event => {
//             event.preventDefault();
//             document.body.classList.toggle('sb-sidenav-toggled');
//             localStorage.setItem('sb|sidebar-toggle', document.body.classList.contains('sb-sidenav-toggled'));
//         });
//     }
//
//     // Espera a que DataTables esté completamente cargado antes de ejecutar cualquier código relacionado
//     $(document).ready(function () {
//         // Inicialización de DataTables
//         if ($.fn.DataTable) {
//             $('#miTabla').DataTable(); // Cambia #datatablesSimple al ID de tu tabla
//         }
//
//         // Formateo de precios para todos los campos con la clase .price
//         document.querySelectorAll('.price').forEach(priceInput => {
//             // Evento para formatear con puntos de miles mientras el usuario escribe
//             priceInput.addEventListener('input', function (e) {
//                 let valor = e.target.value.replace(/\./g, ''); // Elimina puntos existentes
//                 e.target.value = valor.replace(/\B(?=(\d{3})+(?!\d))/g, '.'); // Añade puntos de miles
//             });
//
//             // Antes de enviar el formulario, elimina los puntos
//             const form = priceInput.closest('form'); // Encuentra el formulario asociado
//             if (form) {
//                 form.addEventListener('submit', function () {
//                     priceInput.value = priceInput.value.replace(/\./g, ''); // Elimina los puntos antes de enviar
//                 });
//             }
//         });
//     });
// });
//

document.addEventListener("DOMContentLoaded", function () {
    $('#datatablesSimple').DataTable({
        responsive: true,
        language: {
            // url: '/lang/datatable-es.json' // Traducción al español
        }
    });
});


