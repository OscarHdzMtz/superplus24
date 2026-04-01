<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="imagenes" href="{{ asset('img/favicon.ico') }}">
    <title>JLDM | Productos</title>

    <!--CSS-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <link type="text/css" href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
    @yield('redes')
    <section id="headerSection_nosotros">
        @yield('navbar_top')
        @yield('navbar')
        @yield('banner')
    </section>
    @yield('title')
    <div class="body_categorias">
        @yield('products')
    </div>
    @yield('footer')

    <!--SCRIPTS-->
    <script src="{{ asset('js/jquery-3.5.1.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/responsive.js') }}"></script>
    <script src="{{ asset('js/security.js') }}"></script>
    <script src="{{ asset('js/typed.js') }}"></script>
    <script>
        var typed = new Typed('.type', {
            strings: ['<span><i class="fas fa-check"></i></span> CELULARES',
                '<span><i class="fas fa-check"></i></span> LAPTOPS',
                '<span><i class="fas fa-check"></i></span> REPUESTOS'],
            typeSpeed: 60, backSpeed: 60, loop: true
        });
    </script>
</body>
</html>
