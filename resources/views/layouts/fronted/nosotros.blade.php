<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="imagenes" href="{{ asset('img/favicon.ico') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
    {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> --}}
    <link type="text/css" href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <title>Nosotros</title>

    <!-- Fonts-->    
    <link href="{{ asset('css/stylenos.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Styles -->
</head>

<body>
    {{-- <div id="preloader">
        <div class="loader-page-img">
            <div class="loader-page"></div>
        </div>
    </div> --}}
    {{-- @yield('redes')     --}}
    <section {{-- id="headerSection_promo" --}}>
        {{-- @yield('navbar_top') --}}
        @yield('navbar')
        @yield('banner')            
    </section>
    <section style="padding-top: 20px">
        @yield('footer')
    </section>
    <{{-- div>
        @yield('timespace')
    </div>
    @yield('title')
    <div class="body_Instalacion">
        @yield('Instalacion')
    </div>
    @yield('title2')
    @yield('historia')
    @yield('foda') --}}
    
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
        crossorigin="anonymous"></script>
    {{-- LOCAL --}}
    <script src="{{ asset('js/jquery-3.5.1.js') }}"></script>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>

    <script src="{{ asset('js/responsive.js') }}"></script>
    <script src="{{ asset('js/security.js') }}"></script>
    <script src="{{ asset('js/nosotros.js') }}"></script>
    {{-- preloader --}}
    <script src="{{ asset('js/preloader/loader.js') }}"></script>

    <script src="{{ asset('js/prueba.js') }}"></script>

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
    <script>
        var typed = new Typed('.type', {
            strings: ['<span><i class="fas fa-check"></i></span> DALE UN PLUS A TU DIA!!',
                '<span><i class="fas fa-building"></i></span> SERVICIO LAS 24 HORAS',
                '<span><i class="fas fa-motorcycle"></i></span> SERVICIO A DOMICILIO'
            ],
            typeSpeed: 60,
            backSpeed: 60,
            loop: true
        });
    </script>
</body>

</html>
