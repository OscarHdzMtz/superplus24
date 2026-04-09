<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" type="imagenes" href="{{ asset('img/estaticos/logopalomita.png') }}">
    <title>SuperPlus | ¡DALE UN PLUS A TU DIA!</title>
    <meta name="description" content="Somos tiendas de conveniencia cuya finalidad es satisfacer las necesidades de nuestros clientes, con una amplia oferta de productos y servicios  de calidad, en espacios limpios y seguros">
    <link rel="canonical" href="https://superplus24horas.com/">
    <meta property="og:locale" content="es_MX">
    <meta property="og:type" content="website">
    <meta property="og:title" content="SuperPlus | ¡DALE UN PLUS A TU DIA!">
    <meta property="og:description" content="Somos tiendas de conveniencia cuya finalidad es satisfacer las necesidades de nuestros clientes, con una amplia oferta de productos y servicios  de calidad, en espacios limpios y seguros">
    <meta property="og:url" content="https://superplus24horas.com/">
    <meta property="og:site_name" content="SuperPlus">

    <!--CSS-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Open+Sans&display=swap" rel="stylesheet">
    <link type="text/css" href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link type="text/css" href="{{ asset('css/aos.css') }}" rel="stylesheet">
    <link type="text/css" href="{{ asset('css/stylenos.css') }}" rel="stylesheet">
    <link type="text/css" href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link type="text/css" href="{{ asset('css/styleletras.css') }}" rel="stylesheet">
    <link type="text/css" href="{{ asset('css/slick.css') }}" rel="stylesheet">
    <link type="text/css" href="{{ asset('css/slider/slider.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/swiper-bundle.min.css') }}">
    @livewireStyles
    
    <!-- Scripts Core -->
    <script src="{{ asset('js/jquery-3.5.1.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/slick.min.js') }}" defer></script>
    <script src="{{ asset('js/aos.js') }}" defer></script>
    <script src="{{ asset('js/swiper-bundle.min.js') }}" defer></script>
    <script src="{{ asset('js/typed.js') }}" defer></script>
    <script src="{{ asset('js/prueba.js') }}" defer></script>
    <script src="{{ asset('js/hgnka.js') }}" defer></script>
    <script src="{{ asset('js/provee.js') }}" defer></script>
    <script src="{{ asset('js/security.js') }}" defer></script>

    <!-- Turbo Drive -->
    <script src="{{ asset('js/turbo.min.js') }}"></script>
</head>

<body>
    @include('partials.preloader')
    @include('modals.cookies')
    @if ($getPublicidadSeleccionado)
        @include('modals.publicidadEmergente')
    @endif
    @yield('navbar_top')
    @yield('navbar')
    @yield('banner')
    @yield('cards_service')
    @yield('title')
    <div class="body_cards">
        @yield('cards')
    </div>
    @yield('title5')
    @yield('Proveedores')
    @yield('title1')
    @yield('redessociales')
    @yield('title2')
    @yield('products')
    @yield('footer')
    @yield('modals')

    <!--SCRIPTS DE INICIALIZACION-->
    <script>
        document.addEventListener('turbo:load', function() {
            // AOS
            if (typeof AOS !== 'undefined') {
                AOS.init({
                    easing: 'ease-in-out-sine',
                    duration: 1000
                });
            }

            // Swiper
            if (document.querySelector('.clients-slider') && typeof Swiper !== 'undefined') {
                new Swiper('.clients-slider', {
                    speed: 400,
                    loop: true,
                    autoplay: {
                        delay: 5000,
                        disableOnInteraction: false
                    },
                    slidesPerView: 'auto',
                    pagination: {
                        el: '.swiper-pagination',
                        type: 'bullets',
                        clickable: true
                    },
                    breakpoints: {
                        320: { slidesPerView: 2, spaceBetween: 40 },
                        480: { slidesPerView: 3, spaceBetween: 60 },
                        640: { slidesPerView: 4, spaceBetween: 80 },
                        992: { slidesPerView: 6, spaceBetween: 120 }
                    }
                });
            }

            // Typed
            if (document.querySelector('.type') && typeof Typed !== 'undefined') {
                new Typed('.type', {
                    strings: ['<span><i class="fas fa-check"></i></span> ¡DALE UN PLUS A TU DIA!',
                        '<span><i class="fas fa-building"></i></span> SERVICIO LAS 24 HORAS',
                    ],
                    typeSpeed: 60,
                    backSpeed: 60,
                    loop: true
                });
            }

            // Modales
            $('#cookieModal').modal('show');
            $("#modalPublicidadEmergente").modal("show");
        });
    </script>
    @livewireScripts
</body>

</html>
