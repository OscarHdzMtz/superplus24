<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="imagenes" href="{{ asset('img/estaticos/logopalomita.png') }}">
    <title>Empleo | SuperPlus</title>
    <meta name="description" content="VEN Y FORMA PARTE DE UNA DE LAS EMPRESAS COMERCIALES MAS IMPORTANTES Y EN EXPANSION DE LA REGION MIXTECA.">
    <link rel="canonical" href="https://superplus24horas.com/empleo">
    <meta property="og:locale" content="es_MX">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Empleo | SuperPlus">
    <meta property="og:description" content="VEN Y FORMA PARTE DE UNA DE LAS EMPRESAS COMERCIALES MAS IMPORTANTES Y EN EXPANSION DE LA REGION MIXTECA.">
    <meta property="og:url" content="https://superplus24horas.com/empleo">
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
        @yield('image')
        @yield('body')
        @yield('title')
        @yield('cards')
    </section>
    @yield('title5')
    <section>
        @yield('banempleo')
    </section>
    @yield('foda')
    @yield('footer')

    <!--SCRIPTS-->
    <!-- Core & Hybrid Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/@hotwired/turbo@7.8.0/dist/turbo.es2017-umd.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <script src="{{ asset('js/jquery-3.5.1.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/aos.js') }}" defer></script>
    <script src="{{ asset('js/prueba.js') }}" defer></script>
    <script src="{{ asset('js/security.js') }}" defer></script>

    <script>
        AOS.init({
            easing: 'ease-in-out-sine',
            duration: 2000
        });
    </script>
    <script>
        if (document.querySelector('.type')) {
            var typed = new Typed('.type', {
                strings: ['<span><i class="fas fa-check"></i></span> Â¡DALE UN PLUS A TU DIA!',
                    '<span><i class="fas fa-building"></i></span> SERVICIO LAS 24 HORAS',
                    '<span><i class="fas fa-motorcycle"></i></span> SERVICIO A DOMICILIO'
                ],
                typeSpeed: 60,
                backSpeed: 60,
                loop: true
            });
        }
    </script>
    <script src="{{ asset('js/dashboard/counter.js') }}" defer></script>
    <script>
        $(function() {
            $("#modalPublicidadEmergente").modal("show");
        });
    </script>
</body>

</html>
