<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="imagenes" href="{{ asset('img/estaticos/logopalomita.png') }}">
    <title>Nosotros | SuperPlus</title>
    <meta name="description" content="SuperPlus, fundada en el año 2010... (truncado)">
    <link rel="canonical" href="https://superplus24horas.com/nosotros">
    <meta property="og:locale" content="es_MX">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Nosotros | SuperPlus">
    <meta property="og:description" content="SuperPlus, fundada en el año 2010... (truncado)">
    <meta property="og:url" content="https://superplus24horas.com/nosotros">
    <meta property="og:site_name" content="SuperPlus">

    <!--CSS-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <link type="text/css" href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link type="text/css" href="{{ asset('css/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('css/stylenos.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    
    <!-- Core & Hybrid Scripts -->
    <script src="{{ asset('js/turbo.min.js') }}"></script>
    <script src="{{ asset('js/typed.js') }}"></script>
    <script src="{{ asset('js/jquery-3.5.1.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/aos.js') }}" defer></script>
    <script src="{{ asset('js/prueba.js') }}" defer></script>
    <script src="{{ asset('js/security.js') }}" defer></script>
</head>

<body>
    <section>
        @if ($getPublicidadSeleccionado)
            @include('modals.publicidadEmergente')
        @endif
        @yield('navbar_top')
        @yield('navbar')
        @yield('banner')
    </section>
    @yield('footer')

    <!-- Scripts de inicialización -->
    <script>
        function initializeComponents() {
            // 1. AOS
            if (typeof AOS !== 'undefined') {
                AOS.init({ easing: 'ease-in-out-sine', duration: 1000, once: true });
                setTimeout(function() { AOS.refresh(); }, 200);
            }

            // 2. Typed.js
            if (document.querySelector('.type') && typeof Typed !== 'undefined') {
                new Typed('.type', {
                    strings: ['<span><i class="fas fa-check"></i></span> ¡DALE UN PLUS A TU DIA!',
                              '<span><i class="fas fa-building"></i></span> SERVICIO LAS 24 HORAS'],
                    typeSpeed: 60, backSpeed: 60, loop: true
                });
            }

            // 3. Modales
            if (typeof $ !== 'undefined') {
                $('#modalPublicidadEmergente').modal('show');
            }
        }

        document.addEventListener('DOMContentLoaded', initializeComponents);
        document.addEventListener('turbo:load', initializeComponents);
        document.addEventListener('turbo:render', function() { if (typeof AOS !== 'undefined') AOS.refresh(); });
    </script>
</body>

</html>
