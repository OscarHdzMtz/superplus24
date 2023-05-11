<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="imagenes" href="{{ asset('img/estaticos/logopalomita.png') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
    {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> --}}
    <link type="text/css" href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    {{-- animaciones al hacer scroll --}}
    {{-- <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" /> --}}
    <link type="text/css" href="{{ asset('css/aos.css') }}" rel="stylesheet">

    <title>Facturación | Super Plus</title>
    {{-- nuevas metadatos agragados para que google lo reconosca mas facil --}}
    <meta name="description" content="Genere y descarge su Factura Electrónica.">
    <link rel="canonical" href="https://superplus24horas.com/facturacion">
    <meta property="og:locale" content="es_MX">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Facturación | Super Plus">
    <meta property="og:description" content="Genere y descarge su Factura Electrónica.">
    <meta property="og:url" content="https://superplus24horas.com/facturacion">
    <meta property="og:site_name" content="Super Plus">

    <!-- Fonts-->
    <link href="{{ asset('css/stylenos.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> --}}
    <!-- Styles -->
</head>

<body>
    {{-- <div id="preloader">
        <div class="loader-page-img">
            <div class="loader-page"></div>
        </div>
    </div> --}}
    <!--oncontextmenu = "return false"-->
    {{-- @yield('redes') --}}
    <section {{-- id="headerSection_promo" --}}>
        @if ($getPublicidadSeleccionado)
            @include('modals.publicidadEmergente')
        @endif
        @yield('navbar_top')
        @yield('navbar')
        {{-- @yield('banner') --}}
        @yield('Content_messege')
    </section>
    {{-- @yield('cards_service') --}}
    {{-- @yield('Content_messege') --}}
    @yield('footer')

    {{-- EMPIEZAN LOS SCRIPTS --}}
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
        crossorigin="anonymous"></script>
    <script src="{{ asset('js/jquery-3.5.1.js') }}"></script>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>

    <script src="{{ asset('js/responsive.js') }}"></script>
    <script src="{{ asset('js/security.js') }}"></script>
    <script src="{{ asset('js/typed.js') }}"></script>
    {{-- preloader --}}
    <script src="{{ asset('js/preloader/loader.js') }}"></script>

    {{-- js de prueba --}}
    <script src="{{ asset('js/prueba.js') }}"></script>

    <script>
        var typed = new Typed('.type', {
            strings: ['<span><i class="fas fa-check"></i></span> ¡DALE UN PLUS A TU DIA!',
                '<span><i class="fas fa-building"></i></span> SERVICIO LAS 24 HORAS',
                '<span><i class="fas fa-motorcycle"></i></span> SERVICIO A DOMICILIO'
            ],
            typeSpeed: 60,
            backSpeed: 60,
            loop: true
        });
    </script>

    {{-- aimaciones al hacer scroll --}}
    {{-- <script src="https://unpkg.com/aos@next/dist/aos.js"></script> --}}
    <script src="{{ asset('js/aos.js') }}"></script>
    <script>
        AOS.init({
            easing: 'ease-in-out-sine',
            duration: 1000
        });
    </script>
    {{-- se activa cuando se ha terminado de cargar el DOM (estructura de la página) pero antes de que se hayan cargado todos los recursos externos como imágenes y hojas de estilo. --}}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Aquí va la función que quieres ejecutar
            /* console.log('La página se ha cargado'); */
            $("#modalPublicidadEmergente").modal("show");
        });
    </script>
</body>

</html>
