// 📌 Importar y hacer jQuery accesible globalmente
import $ from 'jquery';
window.$ = window.jQuery = $;

// 📌 Importar estilos CSS
import 'bootstrap/dist/css/bootstrap.min.css';
import '@fortawesome/fontawesome-free/css/all.min.css';

// 📌 Importar Bootstrap y hacerlo accesible globalmente
import * as bootstrap from 'bootstrap';
window.bootstrap = bootstrap;

// 📌 Importar DataTables con Bootstrap 5
import 'datatables.net-bs5';
import 'datatables.net-buttons-bs5';
import 'datatables.net-responsive-bs5';

// 📌 Importar SweetAlert y hacerlo accesible globalmente
import Swal from 'sweetalert2';
window.Swal = Swal;

// 📌 Importar Alpine.js y ejecutarlo
import Alpine from 'alpinejs';
window.Alpine = Alpine;
Alpine.start();

// 📌 Importar archivos propios del proyecto
import './bootstrap';
import './scripts.js';
import './modules/gastosTotal.js';
import './modules/formatoPesos.js';

