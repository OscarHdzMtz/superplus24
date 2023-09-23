<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="imagenes" href="{{ asset('img/estaticos/logopalomita.png') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
    {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> --}}
    {{-- local --}}
    <link type="text/css" href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

    {{-- animaciones al hacer scroll --}}
    {{-- <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" /> --}}
    <link type="text/css" href="{{ asset('css/aos.css') }}" rel="stylesheet">

    <title>Promociones | SuperPlus</title>
    {{-- nuevas metadatos agragados para que google lo reconosca mas facil --}}
    <meta name="description" content="Promociones SuperPlus 24 Horas Contigo">
    <link rel="canonical" href="https://superplus24horas.com/promociones">
    <meta property="og:locale" content="es_MX">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Promociones | SuperPlus">
    <meta property="og:description" content="Promociones SuperPlus 24 Horas Contigo">
    <meta property="og:url" content="https://superplus24horas.com/promociones">
    <meta property="og:site_name" content="SuperPlus">

    <!-- Fonts-->
    <link href="{{ asset('css/stylenos.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">    
    <!-- Styles -->
    @livewireStyles
</head>

<body>
    {{--  <div id="preloader">
        <div class="loader-page-img">
            <div class="loader-page"></div>
        </div>
    </div> --}}
    @yield('redes')
    <section {{-- id="headerSection_promo" --}}>
        @if ($getPublicidadSeleccionado)
            @include('modals.publicidadEmergente')
        @endif
        @yield('navbar_top')
        @yield('navbar')
        @yield('banner')
        @yield('title')   
        @yield('promocionesConLivewire')     
    </section>
    {{-- <div>
            @yield('timespace')
        </div> --}}
    {{-- @yield('title') --}}
    {{-- <div class="body_Instalacion">
            @yield('Instalacion')
        </div> --}}
    {{-- @yield('title2') --}}
    @yield('foda')
    @yield('footer')
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
        crossorigin="anonymous"></script>
    {{-- se agragro bootstrap.min.js para que sirva navbar en modo cel --}}
    {{-- LOCAL --}}
    <script src="{{ asset('js/jquery-3.5.1.js') }}"></script>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>


    <script src="{{ asset('js/responsive.js') }}"></script>
    <script src="{{ asset('js/security.js') }}"></script>
    <script src="{{ asset('js/nosotros.js') }}"></script>
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
    <script src="{{ asset('js/typed.js') }}"></script>

    {{-- estilo nuevo navbar --}}
    <script src="{{ asset('js/prueba.js') }}"></script>

    <script>
        var typed = new Typed('.type', {
            strings: ['<span><i class="fas fa-check"></i></span> ¡DALE UN PLUS A TU DIA!',
                '<span><i class="fas fa-building"></i></span> SERVICIO LAS 24 HORAS',
                /* '<span><i class="fas fa-motorcycle"></i></span> SERVICIO A DOMICILIO' */
            ],
            typeSpeed: 60,
            backSpeed: 60,
            loop: true
        });
    </script>
    {{-- SCRIPT PRELOADER DE CARGA DE PAGINA --}}
    <script>
        $(window).on('load', function() {
            setTimeout(function() {
                $(".loader-page").css({
                    visibility: "hidden",
                    opacity: "0"
                })
            }, 2000);
            setTimeout(function() {
                $(".loader-page-img").css({
                    visibility: "hidden",
                    opacity: "0"
                })
            }, 2000);
            setTimeout(function() {
                $("#preloader").css({
                    visibility: "hidden",
                    opacity: "0"
                })
            }, 2000);

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

    {{-- SCRIPT QUE OBTIENE LA IMAGEN DE LAS PROMOCIONES PARA MANDARLO A UN MODAL --}}
    <script>
        $(function() {
            $('.clic_abre_modal').on('click', function() {
                $('.set_imagen_promo').attr('src', $(this).find('img').attr('src'));
                $('#modalpromo').modal('show');
            });
        });
    </script>

    {{-- <script>
    $(document).ready(function() {
        $("#modalPublicidadEmergente").modal("show");
    });
</script> --}}
    {{-- se activa cuando se ha terminado de cargar el DOM (estructura de la página) pero antes de que se hayan cargado todos los recursos externos como imágenes y hojas de estilo. --}}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Aquí va la función que quieres ejecutar
            /* console.log('La página se ha cargado'); */
            $("#modalPublicidadEmergente").modal("show");
        });
    </script>
    @livewireScripts
</body>

</html>
