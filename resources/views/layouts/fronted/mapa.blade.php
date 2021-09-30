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
    <title>Empleo</title>

    <!-- Fonts-->
    <link href="{{ asset('css/stylenos.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/styleempleo.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Styles -->
</head>

<body>
    {{-- @yield('redes') --}}
    {{-- <section id="headerSection_empleo"> --}}
        {{-- @yield('navbar_top') --}}
        {{-- @yield('navbar') --}}
        {{-- @yield('banner') --}}
    {{-- </section> --}}
    {{-- <div>
            @yield('timespace')
        </div> --}}
    <section class="cta-section ">
        {{-- @yield('navbar') --}}
        @yield('body')
        @yield('mapa')
    </section>
    @yield('title')
    {{-- <div class="body_Instalacion">
            @yield('Instalacion')
        </div> --}}
    {{-- @yield('title2') --}}
    @yield('foda')
    @yield('footer')
    
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
        crossorigin="anonymous"></script>
    {{-- se agragro bootstrap.min.js para que sirva navbar en modo cel --}}
    {{-- <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> --}}
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
            strings: ['<span><i class="fas fa-check"></i></span> DALE UN PLUS A TU DIA!!',
                '<span><i class="fas fa-building"></i></span> SERIVICIO LAS 24 HORAS',
                '<span><i class="fas fa-motorcycle"></i></span> SERVICIO A DOMICILIO'
            ],
            typeSpeed: 60,
            backSpeed: 60,
            loop: true
        });
    </script>
    {{-- SCRIPT COMNTADOR NUMERICO --}}
    <script>
        $.fn.jQuerySimpleCounter = function(options) {
            var settings = $.extend({
                start: 0,
                end: 100,
                easing: 'swing',
                duration: 400,
                complete: ''
            }, options);

            var thisElement = $(this);

            $({
                count: settings.start
            }).animate({
                count: settings.end
            }, {
                duration: settings.duration,
                easing: settings.easing,
                step: function() {
                    var mathCount = Math.ceil(this.count);
                    thisElement.text(mathCount);
                },
                complete: settings.complete
            });
        };
        var seEjecuto = 0;
        $(window).scroll(function() {
            if ($(this).scrollTop() >= $("#projectFacts").position().top && seEjecuto === 0) {
                seEjecuto = 1;
                $('#number1').jQuerySimpleCounter({
                    start: 0,
                    end: 150,
                    duration: 4000
                });
                $('#number2').jQuerySimpleCounter({
                    start: 0,
                    end: 30,
                    duration: 4000
                });
                $('#number3').jQuerySimpleCounter({
                    start: 0,
                    end: 5,
                    duration: 4000
                });
                $('#number4').jQuerySimpleCounter({
                    start: 0,
                    end: 8,
                    duration: 4500
                });
            }
        });
    </script>

</body>

</html>
