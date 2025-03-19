document.addEventListener("DOMContentLoaded", function () {
    $('#datatablesSimple').DataTable({
        responsive: true,
        language: {
            // url: '/lang/datatable-es.json' // Traducción al español
        }
    });
    $('#datatablesPersonal').DataTable({
        responsive: true
    });
    $('#datatablesArriendo').DataTable({
        responsive: true
    });
    $('#datatablesServicios').DataTable({
        responsive: true
    });
});

document.addEventListener("DOMContentLoaded", function() {
    const sidebarToggle = document.getElementById("sidebarToggle");
    if (sidebarToggle) {
        sidebarToggle.addEventListener("click", function(event) {
            event.preventDefault();
            document.body.classList.toggle("sb-sidenav-toggled");
        });
    }
});




