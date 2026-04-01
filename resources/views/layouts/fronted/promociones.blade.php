<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="imagenes" href="{{ asset('img/estaticos/logopalomita.png') }}">
    <title>Promociones | SuperPlus</title>
    <meta name="description" content="Promociones SuperPlus 24 Horas Contigo">
    <link rel="canonical" href="https://superplus24horas.com/promociones">
    <meta property="og:locale" content="es_MX">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Promociones | SuperPlus">
    <meta property="og:description" content="Promociones SuperPlus 24 Horas Contigo">
    <meta property="og:url" content="https://superplus24horas.com/promociones">
    <meta property="og:site_name" content="SuperPlus">

    <!--CSS-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <link type="text/css" href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link type="text/css" href="{{ asset('css/aos.css') }}" rel="stylesheet">
    <link type="text/css" href="{{ asset('css/stylenos.css') }}" rel="stylesheet">
    <link type="text/css" href="{{ asset('css/style.css') }}" rel="stylesheet">
    <!-- Turbo Drive: navegación sin recarga. Livewire requiere recarga completa en esta página -->
    <script src="https://cdn.jsdelivr.net/npm/@hotwire/turbo@7.3.0/dist/turbo.umd.js"></script>
    <meta name="turbo-visit-control" content="reload">
    @livewireStyles
</head>

<body>
    @yield('redes')
    <section>
        @if ($getPublicidadSeleccionado)
            @include('modals.publicidadEmergente')
        @endif
        @yield('navbar_top')
        @yield('navbar')
        @yield('banner')
        @yield('title')
        @yield('promocionesConLivewire')
    </section>
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
    <script src="{{ asset('js/aos.js') }}"></script>

    <script>
        AOS.init({
            easing: 'ease-in-out-sine',
            duration: 1000
        });
    </script>

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper('.swiper-container', {
            effect: 'coverflow',
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: 'auto',
            coverflowEffect: {
                rotate: 20,
                stretch: 0,
                depth: 200,
                modifier: 1,
                slideShadows: true,
            },
            loop: true,
            autoplay: {
                delay: 3500,
                disableOnInteraction: false,
            },
        });
    </script>

    <script>
        if (document.querySelector('.type')) {
            var typed = new Typed('.type', {
                strings: ['<span><i class="fas fa-check"></i></span> ¡DALE UN PLUS A TU DIA!',
                    '<span><i class="fas fa-building"></i></span> SERVICIO LAS 24 HORAS'
                ],
                typeSpeed: 60,
                backSpeed: 60,
                loop: true
            });
        }
    </script>

    <script>
        $(function() {
            $('.clic_abre_modal').on('click', function() {
                $('.set_imagen_promo').attr('src', $(this).find('img').attr('src'));
                $('#modalpromo').modal('show');
            });
        });
    </script>
    <script>
        $(function() {
            $("#modalPublicidadEmergente").modal("show");
        });
    </script>
    @livewireScripts
</body>

</html>
