    // Después de cargar el DOM
    // Call the dataTables jQuery plugin
    import Swal from "sweetalert2";

    window.addEventListener('DOMContentLoaded', event => {
        const datatablesSimple = document.getElementById('datatablesSimple');
        if (datatablesSimple) {
            $(datatablesSimple).DataTable({
            });
        }
    });

