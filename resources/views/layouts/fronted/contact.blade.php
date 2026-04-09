<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="imagenes" href="{{ asset('img/estaticos/logopalomita.png') }}">
    <title>Contacto | SuperPlus</title>
    <link rel="canonical" href="https://superplus24horas.com/contacto">
    <meta property="og:locale" content="es_MX">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Contacto | SuperPlus">
    <meta property="og:url" content="https://superplus24horas.com/contacto">
    <meta property="og:site_name" content="SuperPlus">

    <!--CSS-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <link type="text/css" href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link type="text/css" href="{{ asset('css/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('css/stylenos.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <!-- Turbo Drive: navegaciÃ³n sin recarga completa de pÃ¡gina -->
    <script src="{{ asset('js/turbo.min.js') }}"></script>
</head>

<body>
    <section>
        @if ($getPublicidadSeleccionado)
            @include('modals.publicidadEmergente')
        @endif
        @yield('navbar_top')
        @yield('navbar')
        @yield('banner')
        @yield('Content_messege')
    </section>
    @yield('footer')

    <!--SCRIPTS-->
    <!-- Core & Hybrid Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/@hotwired/turbo@7.8.0/dist/turbo.es2017-umd.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>

    <!--SCRIPTS DE INICIALIZACION-->
    <script>
        function initializeComponents() {
            // 1. AOS
            if (typeof AOS !== 'undefined') {
                AOS.init({ easing: 'ease-in-out-sine', duration: 1000, once: true });
                setTimeout(function() { AOS.refresh(); }, 200);
            }

            // 2. Carousels
            if (typeof $ !== 'undefined' && $('.carousel').length > 0) {
                $('.carousel').carousel({ interval: 5000, pause: 'hover' });
            }

            // 3. Typed.js
            if (document.querySelector('.type') && typeof Typed !== 'undefined') {
                new Typed('.type', {
                    strings: ['<span><i class="fas fa-check"></i></span> ¡DALE UN PLUS A TU DIA!',
                              '<span><i class="fas fa-building"></i></span> SERVICIO LAS 24 HORAS'],
                    typeSpeed: 60, backSpeed: 60, loop: true
                });
            }

            // 4. Modals
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
