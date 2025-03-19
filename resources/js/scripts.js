document.addEventListener("DOMContentLoaded", function () {
    $('#datatablesSimple').DataTable({
        "pageLength": 5,
        responsive: true,
        language: {
            // url: '/lang/datatable-es.json' // Traducción al español
        }
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




