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
    {{-- @livewireStyles --}}
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
        if (document.querySelector('.swiper-container')) {
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
        }
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
            $(document).on('click', '.clic_abre_modal', function(e) {
                e.preventDefault();
                var $this = $(this);
                var imgSrc = $this.find('img').attr('src');
                var $modalImg = $('.set_imagen_promo');
                
                // 1. Limpiar y ocultar imagen previa
                $modalImg.removeClass('loaded').attr('src', '');
                
                // 2. Crear objeto de imagen para pre-carga
                var imgPreload = new Image();
                imgPreload.onload = function() {
                    // 3. Cuando esté cargada, asignar y mostrar de inmediato
                    $modalImg.attr('src', imgSrc);
                    $('#modalpromo').modal('show');
                };
                imgPreload.src = imgSrc;
            });
        });
    </script>
    <script>
        $(function() {
            $("#modalPublicidadEmergente").modal("show");
        });
    </script>
    {{-- @livewireScripts --}}
</body>

</html>
