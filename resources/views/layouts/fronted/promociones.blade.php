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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;700&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <link type="text/css" href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link type="text/css" href="{{ asset('css/aos.css') }}" rel="stylesheet">
    <link type="text/css" href="{{ asset('css/stylenos.css') }}" rel="stylesheet">
    <link type="text/css" href="{{ asset('css/style.css') }}" rel="stylesheet">
    @livewireStyles
    
    <!-- Core & Hybrid Scripts -->
    <script src="{{ asset('js/turbo.min.js') }}"></script>
    <script src="{{ asset('js/typed.js') }}"></script>
    <script src="{{ asset('js/jquery-3.5.1.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/aos.js') }}" defer></script>
    <script src="{{ asset('js/swiper-bundle.min.js') }}" defer></script>
    <script src="{{ asset('js/prueba.js') }}" defer></script>
</head>

<body style="overflow-x:hidden">
    @yield('redes')
    <div>
        @if ($getPublicidadSeleccionado)
            @include('modals.publicidadEmergente')
        @endif
        @yield('navbar_top')
        @yield('navbar')
        @yield('banner')
        @yield('title')
        @yield('promocionesConLivewire')
    </div>
    @yield('foda')
    @yield('footer')

    <!--SCRIPTS DE INICIALIZACION-->
    <script>
        function initializeComponents() {
            // 1. AOS
            if (typeof AOS !== 'undefined') {
                AOS.init({ easing: 'ease-in-out-sine', duration: 1000, once: true });
                setTimeout(function() { AOS.refresh(); }, 200);
            }

            // 2. Swiper (Promociones)
            if (document.querySelector('.swiper-container') && typeof Swiper !== 'undefined') {
                new Swiper('.swiper-container', {
                    effect: 'coverflow', grabCursor: true, centeredSlides: true, slidesPerView: 'auto',
                    coverflowEffect: { rotate: 20, stretch: 0, depth: 200, modifier: 1, slideShadows: true },
                    loop: true, autoplay: { delay: 3500, disableOnInteraction: false }
                });
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


        // Click Abre Modal (fuera de turbo:load para usar delegación de eventos)
        $(document).on('click', '.clic_abre_modal', function(e) {
            e.preventDefault();
            var $this = $(this);
            var imgSrc = $this.find('img').attr('src');
            var $modalImg = $('.set_imagen_promo');
            $modalImg.removeClass('loaded').attr('src', '');
            var imgPreload = new Image();
            imgPreload.onload = function() {
                $modalImg.attr('src', imgSrc);
                $('#modalpromo').modal('show');
            };
            imgPreload.src = imgSrc;
        });
    </script>
    @livewireScripts
</body>

</html>
