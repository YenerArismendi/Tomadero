<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <!-- Configuración de codificación de caracteres para que el navegador interprete correctamente el contenido -->
    <meta charset="UTF-8">

    <!-- Configuración para que la página sea responsiva y se adapte a diferentes tamaños de pantalla -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Incluye los archivos CSS y JS generados por Vite para gestionar estilos y scripts del proyecto -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Define el título dinámico de la página, que puede ser sobreescrito en las vistas -->
    <title>@yield('title')</title>
</head>

<body class="sb-nav-fixed">
<!-- Barra de navegación fija en la parte superior de la página -->
<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
    <!-- Logotipo o nombre de la aplicación, que redirige a la página principal -->
    <a class="navbar-brand ps-3" href="{{ route('dashboard') }}">@yield('tituloPagina')</a>

    <!-- Botón que controla la visibilidad del menú lateral en pantallas pequeñas -->
    <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!">
        <i class="fas fa-bars"></i> <!-- Ícono que representa el botón -->
    </button>

    <!-- Barra de búsqueda, visible en dispositivos medianos y grandes -->
    <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
        <div class="input-group">
            <!-- Campo de texto para ingresar los términos de búsqueda -->
            <input class="form-control" type="text" placeholder="Buscar..." aria-label="Buscar..."
                   aria-describedby="btnNavbarSearch"/>
            <!-- Botón para iniciar la búsqueda -->
            <button class="btn btn-primary" id="btnNavbarSearch" type="button">
                <i class="fas fa-search"></i> <!-- Ícono de lupa -->
            </button>
        </div>
    </form>

    <!-- Menú desplegable de usuario -->
    <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4" style="list-style-type: none;">
        <li class="nav-item dropdown">
            <!-- Botón que abre el menú de opciones de usuario -->
            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button"
               data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fas fa-user fa-fw"></i> <!-- Ícono de usuario -->
                {{ Auth::user()->name }} <!-- Muestra el nombre del usuario autenticado -->
            </a>
            <!-- Opciones disponibles en el menú de usuario -->
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <li>
                    <!-- Opción de cerrar sesión -->
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        {{ __('Cerrar sesión') }}
                    </a>
                    <!-- Formulario de cierre de sesión -->
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>
            </ul>
        </li>
    </ul>
</nav>

<!-- Contenedor principal que divide la pantalla en menú lateral y contenido -->
<div id="layoutSidenav">
    <!-- Menú lateral (navegación secundaria) -->
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">
                    <!-- Encabezado de una sección del menú -->
                    <div class="sb-sidenav-menu-heading">Principal</div>
                    <!-- Enlace a la sección de cuentas -->
                    <a class="nav-link" href="{{ route('cuentas.index') }}">
                        <div class="sb-nav-link-icon"><i class="fa fa-tasks" aria-hidden="true"></i></div>
                        Dashboard
                    </a>

                    <!-- Enlace a la sección de ventas -->
                    <a class="nav-link" href="{{ route('ventas.index') }}">
                        <div class="sb-nav-link-icon"><i class="fa-solid fa-shop"></i></div>
                        Ventas
                    </a>

                    <!-- Enlace a la sección de cuentas -->
                    <a class="nav-link" href="{{ route('cuentas.index') }}">
                        <div class="sb-nav-link-icon"><i class="fa fa-tasks" aria-hidden="true"></i></div>
                        Cuenta
                    </a>

                    <!-- Enlace a la sección de productos -->
                    <a class="nav-link" href="{{ route('productos.index') }}">
                        <div class="sb-nav-link-icon"><i class="fa-solid fa-folder-closed"></i></div>
                        Productos
                    </a>

                    <!-- Enlace a la sección de personal -->
                    <a class="nav-link" href="{{ route('personal.index') }}">
                        <div class="sb-nav-link-icon"><i class="fa-solid fa-user"></i></div>
                        Personal
                    </a>

                    <!-- Enlace a la sección de mesas -->
                    <a class="nav-link" href="{{ route('mesas.index') }}">
                        <div class="sb-nav-link-icon"><i class="fa-solid fa-table"></i></div>
                        Mesas
                    </a>

                    <!-- Enlace a la sección de productos -->
                    <a class="nav-link" href="{{ route('productos.index') }}">
                        <div class="sb-nav-link-icon"><i class="fa-solid fa-folder-closed"></i></div>
                        Caja
                    </a>

                    <!-- Enlace a la sección de gastos -->
                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseGastos"
                       aria-expanded="false" aria-controls="collapseGastos">
                        <div class="sb-nav-link-icon"><i class="fa-solid fa-money-bill-transfer"></i></div>
                        Gastos
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapseGastos" aria-labelledby="headingAuth"
                         data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="{{ route('gastos.create') }}">Registrar gastos</a>
                            <a class="nav-link" href="{{route('gastos.index')}}">Gastos</a>
                        </nav>
                    </div>


                    <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne"
                         data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="{{ route('dashboard') }}">Menú de la semana</a>
                            <a class="nav-link" href="{{ route('dashboard') }}">Registrar menú</a>
                        </nav>
                    </div>
                </div>
            </div>
        </nav>
    </div>

    <!-- Área principal donde se cargará el contenido dinámico -->
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                @yield('content') <!-- Marcador para el contenido dinámico de cada página -->
            </div>
        </main>
        <!-- Pie de página -->
        <footer class="py-4 bg-light mt-auto">
            <div class="container-fluid px-4">
                <div class="d-flex align-items-center justify-content-between small">
                    <div class="text-muted">Copyright &copy; Your Website 2023</div>
                    <div>
                        <a href="#">Política de privacidad</a>
                        &middot;
                        <a href="#">Términos &amp; Condiciones</a>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</div>
</body>
</html>

