<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="imagenes" href="{{ asset('img/estaticos/logopalomita.png') }}">
    <title>Nosotros | SuperPlus</title>
    <meta name="description" content="SuperPlus, fundada en el año 2010, en la ciudad de Huajuapan de León Oaxaca, brindado  servicio las 24 horas del día los 365 días del año,  con una experiencia de 12 años en el mercado, esmerándos en llevar a nuestros clientes productos y servicios  de calidad.">
    <link rel="canonical" href="https://superplus24horas.com/nosotros">
    <meta property="og:locale" content="es_MX">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Nosotros | SuperPlus">
    <meta property="og:description" content="SuperPlus, fundada en el año 2010, en la ciudad de Huajuapan de León Oaxaca, brindado  servicio las 24 horas del día los 365 días del año,  con una experiencia de 12 años en el mercado, esmerándos en llevar a nuestros clientes productos y servicios  de calidad.">
    <meta property="og:url" content="https://superplus24horas.com/nosotros">
    <meta property="og:site_name" content="SuperPlus">

    <!--CSS-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <link type="text/css" href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link type="text/css" href="{{ asset('css/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('css/stylenos.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>

<body>
    <section>
        @if ($getPublicidadSeleccionado)
            @include('modals.publicidadEmergente')
        @endif
        @yield('navbar_top')
        @yield('navbar')
        @yield('banner')
    </section>
    <section style="padding-top: 20px">
        @yield('footer')
    </section>

    <!--SCRIPTS-->
    <script src="{{ asset('js/jquery-3.5.1.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/responsive.js') }}"></script>
    <script src="{{ asset('js/security.js') }}"></script>

    <script src="{{ asset('js/prueba.js') }}"></script>
    <script src="{{ asset('js/typed.js') }}"></script>
    <script src="{{ asset('js/aos.js') }}"></script>

    <script>
        AOS.init({
            easing: 'ease-in-out-sine',
            duration: 1000
        });
    </script>
    <script>
        if (document.querySelector('.type')) {
            var typed = new Typed('.type', {
                strings: ['<span><i class="fas fa-check"></i></span> ¡DALE UN PLUS A TU DIA!',
                    '<span><i class="fas fa-building"></i></span> SERVICIO LAS 24 HORAS',
                    '<span><i class="fas fa-motorcycle"></i></span> SERVICIO A DOMICILIO'
                ],
                typeSpeed: 60,
                backSpeed: 60,
                loop: true
            });
        }
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            $("#modalPublicidadEmergente").modal("show");
        });
    </script>
</body>

</html>
