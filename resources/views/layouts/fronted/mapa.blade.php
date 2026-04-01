<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="imagenes" href="{{ asset('img/favicon.ico') }}">
    <title>Ubicacion</title>

    <!--CSS-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <link type="text/css" href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/stylenos.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <!-- Turbo Drive: navegación sin recarga completa de página -->
    <script src="https://cdn.jsdelivr.net/npm/@hotwired/turbo@7.3.0/dist/turbo.es2017-umd.js"></script>
</head>

<body>
    <section class="cta-section ">
        @yield('body')
        @yield('mapa')
    </section>
    @yield('title')
    @yield('foda')
    @yield('footer')

    <!--SCRIPTS-->
    <script src="{{ asset('js/jquery-3.5.1.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/responsive.js') }}"></script>
    <script src="{{ asset('js/security.js') }}"></script>

    <script src="{{ asset('js/typed.js') }}"></script>
    <script src="{{ asset('js/prueba.js') }}"></script>

    <script>
        if (document.querySelector('.type')) {
            var typed = new Typed('.type', {
                strings: ['<span><i class="fas fa-check"></i></span> ¡DALE UN PLUS A TU DIA!',
                    '<span><i class="fas fa-building"></i></span> SERVICIO LAS 24 HORAS',
                    '<span><i class="fas fa-motorcycle"></i></span> SERVICIO A DOMICILIO'
                ],
                typeSpeed: 60,
                backSpeed: 60,
                loop: true
            });
        }
    </script>
</body>

</html>
