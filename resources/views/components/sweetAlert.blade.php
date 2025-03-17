<script>
    // Se ejecuta cuando el contenido de la página se ha cargado completamente
    document.addEventListener("DOMContentLoaded", function() {

        // Mostrar alertas basadas en los mensajes de sesión (exito, info, error)

        // Si hay un mensaje de éxito en la sesión, mostrar una alerta de éxito
        @if(session('success'))
        Swal.fire({
            icon: 'success',              // Tipo de alerta: éxito
            title: '¡Éxito!',              // Título de la alerta
            text: '{{ session("success") }}',  // El texto del mensaje (proporcionado desde la sesión)
            confirmButtonText: 'Aceptar'  // Texto del botón de confirmación
        });
        @endif

        // Si hay un mensaje de información en la sesión, mostrar una alerta de información
        @if(session('info'))
        Swal.fire({
            icon: 'info',                // Tipo de alerta: información
            title: 'Información',        // Título de la alerta
            text: '{{ session("info") }}',   // El texto del mensaje
            confirmButtonText: 'Aceptar'   // Texto del botón de confirmación
        });
        @endif

        // Si hay un mensaje de error en la sesión, mostrar una alerta de error
        @if(session('error'))
        Swal.fire({
            icon: 'error',               // Tipo de alerta: error
            title: '¡Error!',            // Título de la alerta
            text: '{{ session("error") }}',   // El texto del mensaje
            confirmButtonText: 'Aceptar'   // Texto del botón de confirmación
        });
        @endif
    });

    // Función que maneja la confirmación de eliminación antes de enviar el formulario
    function confirmDelete(event, formId) {
        event.preventDefault();  // Previene el envío inmediato del formulario

        // Mostrar una alerta de confirmación utilizando SweetAlert2
        Swal.fire({
            title: '¿Estás seguro?',         // Título de la alerta
            text: "Esta acción no se puede deshacer.",  // Texto explicativo
            icon: 'warning',                  // Tipo de alerta: advertencia
            showCancelButton: true,           // Muestra un botón para cancelar la acción
            confirmButtonColor: '#d33',       // Color del botón de confirmación (rojo)
            cancelButtonColor: '#3085d6',     // Color del botón de cancelación (azul)
            confirmButtonText: 'Sí, eliminar',  // Texto del botón de confirmación
            cancelButtonText: 'Cancelar'      // Texto del botón de cancelación
        }).then((result) => {
            // Si el usuario confirma la eliminación (clic en "Sí, eliminar")
            if (result.isConfirmed) {
                // Enviar el formulario asociado al botón de eliminación
                document.getElementById(formId).submit();
            }
        });
    }
</script>
