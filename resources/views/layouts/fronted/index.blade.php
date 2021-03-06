<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" type="imagenes" href="{{ asset('img/favicon.ico') }}">
    <title>SuperPlus</title>

    <!--ESTILO ICONOS Y TIPOS DE LETRAS-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Open+Sans&display=swap" rel="stylesheet">
    <link type="text/css" href="{{ asset('css/styleletras.css') }}" rel="stylesheet">

    {{-- ESTILO BOOTSTRAP --}}
    {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> --}}
    {{-- local --}}
    <link type="text/css" href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">


    {{-- animaciones al hacer scroll --}}
    {{-- <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" /> --}}
    <link type="text/css" href="{{ asset('css/aos.css') }}" rel="stylesheet">

    {{-- ESTILO DE SWWAPPER(SLIDER) --}}
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

    {{-- estilo de prueba --}}
    <link type="text/css" href="{{ asset('css/stylenos.css') }}" rel="stylesheet">

    <!-- ESTILOS PROPIOD -->
    <link type="text/css" href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link type="text/css" href="{{ asset('css/slick.css') }}" rel="stylesheet">

    {{-- estilos de efectos de slider productos nuevos --}}
    <link type="text/css" href="{{ asset('css/slider/slider.css') }}" rel="stylesheet">
</head>

<body>
    <div id="preloader">
        <div class="loader-page-img">
            <div class="loader-page"></div>
        </div>
    </div>
    {{-- @yield('redes') --}}
    {{-- <section id="headerSection"> --}}
    @yield('navbar_top')
    @yield('navbar')
    @yield('banner')
    {{-- </section> --}}
    @yield('cards_service')
    @yield('title')
    <div class="body_cards">
        @yield('cards')
    </div>
    @yield('title5')
    @yield('Proveedores')
    @yield('title2')
    @yield('products')
    @yield('footer')
    @yield('modals')
    @yield('whats')


    <!--SCRIPT-->
    {{-- ONLINE --}}
    {{-- <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
                        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
                        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> --}}
    {{-- LOCAL --}}
    <script src="{{ asset('js/jquery-3.5.1.js') }}"></script>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>

    <script src="{{ asset('js/hgnka.js') }}"></script>
    <script src="{{ asset('js/security.js') }}"></script>
    <script src="{{ asset('js/provee.js') }}"></script>
    <script src="{{ asset('js/slick.min.js') }}"></script>
    <script src="{{ asset('js/typed.js') }}"></script>
    {{-- js de prueba --}}
    <script src="{{ asset('js/prueba.js') }}"></script>
    <script src="{{ asset('js/counter.js') }}"></script>

    <script src="{{ asset('js/preloader/loader.js') }}"></script>

    {{-- aimaciones al hacer scroll --}}
    {{-- <script src="https://unpkg.com/aos@next/dist/aos.js"></script> --}}
    <script src="{{ asset('js/aos.js') }}"></script>
    <script>
        AOS.init({
            easing: 'ease-in-out-sine',
            duration: 1000
        });
    </script>

    {{-- SCRIPT DESCARGADADO Y DE INICIALIZACION DE SWAPPER --}}
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
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
                320: {
                    slidesPerView: 2,
                    spaceBetween: 40
                },
                480: {
                    slidesPerView: 3,
                    spaceBetween: 60
                },
                640: {
                    slidesPerView: 4,
                    spaceBetween: 80
                },
                992: {
                    slidesPerView: 6,
                    spaceBetween: 120
                }
            }
        });
    </script>


    {{-- texto en movimiento --}}
    <script>
        var typed = new Typed('.type', {
            strings: ['<span><i class="fas fa-check"></i></span> DALE UN PLUS A TU DIA!!',
                '<span><i class="fas fa-building"></i></span> SERVICIO LAS 24 HORAS',
                /* '<span><i class="fas fa-motorcycle"></i></span> SERVICIO A DOMICILIO' */
            ],
            typeSpeed: 60,
            backSpeed: 60,
            loop: true
        });
    </script>
    
    
</body>

</html>
