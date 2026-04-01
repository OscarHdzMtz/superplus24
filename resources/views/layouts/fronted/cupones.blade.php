<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="imagenes" href="{{ asset('img/estaticos/logopalomita.png') }}">
    <title>Cupones | SuperPlus</title>
    <meta name="description" content="Cupones Super Plus 24 Horas Contigo">
    <link rel="canonical" href="https://superplus24horas.com/cupones">
    <meta property="og:locale" content="es_MX">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Cupones | SuperPlus">
    <meta property="og:description" content="Cupones Super Plus 24 Horas Contigo">
    <meta property="og:url" content="https://superplus24horas.com/cupones">
    <meta property="og:site_name" content="SuperPlus">

    <!--CSS-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.3.0/css/all.css">
    <link type="text/css" href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link type="text/css" href="{{ asset('css/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('css/stylenos.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
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
    <script src="{{ asset('js/html2canvas.js') }}"></script>
    <script src="{{ asset('js/prueba.js') }}"></script>
    <script src="{{ asset('js/aos.js') }}"></script>

    <script>
        AOS.init({
            easing: 'ease-in-out-sine',
            duration: 1000
        });
    </script>
    <script>
        var typed = new Typed('.type', {
            strings: ['<span><i class="fas fa-check"></i></span> ¡DALE UN PLUS A TU DIA!',
                '<span><i class="fas fa-building"></i></span> SERVICIO LAS 24 HORAS',
            ],
            typeSpeed: 60,
            backSpeed: 60,
            loop: true
        });
    </script>
    <script>
        function exportarHTMLaPNG(divId, filename) {
            var domElement = document.getElementById(divId);
            html2canvas(domElement, {
                onrendered: function(domElementCanvas) {
                    var context = domElementCanvas.getContext('2d');
                    var link = document.createElement('a');
                    link.href = domElementCanvas.toDataURL("image/png");
                    link.download = filename;
                    if (document.createEvent) {
                        var event = document.createEvent('MouseEvents');
                        event.initMouseEvent("click", true, true, window, 0, 0, 0, 0, 0, false, false, false, false, 0, null);
                        link.dispatchEvent(event);
                    } else {
                        link.click();
                    }
                }
            });
        }
    </script>
    <script>
        $(document).ready(function() {
            $("#modalCuponGenerado").modal("show");
        });
    </script>
    <script>
        $(document).ready(function() {
            $("#errorModalCupon").modal("show");
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            $("#modalPublicidadEmergente").modal("show");
        });
    </script>
</body>

</html>
