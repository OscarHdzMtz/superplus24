<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="imagenes" href="{{ asset('img/estaticos/logopalomita.png') }}">
    {{-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"> --}}
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.3.0/css/all.css">
    {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> --}}
    <link type="text/css" href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    {{-- animaciones al hacer scroll --}}
    {{-- <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" /> --}}
    <link type="text/css" href="{{ asset('css/aos.css') }}" rel="stylesheet">

    <title>Cupones</title>

    <!-- Fonts-->
    <link href="{{ asset('css/stylenos.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> --}}
    <!-- Styles -->
</head>

<body>
    {{-- <div id="preloader">
        <div class="loader-page-img">
            <div class="loader-page"></div>            
            <h6 align="center">Generando cupón</h6>
        </div>        
    </div>   --}}
    @yield('redes')
    <section {{-- id="headerSection_promo" --}}>
        @yield('navbar_top')
        @yield('navbar')
        @yield('banner')
        @yield('title')
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
    {{-- EMPIEZAN LOS SCRIPTS --}}
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
        crossorigin="anonymous"></script>
    <script src="{{ asset('js/jquery-3.5.1.js') }}"></script>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>

    <script src="{{ asset('js/responsive.js') }}"></script>
    <script src="{{ asset('js/security.js') }}"></script>
    <script src="{{ asset('js/typed.js') }}"></script>
    {{-- preloader --}}
    {{-- <script src="{{ asset('js/preloader/loader.js') }}"></script> --}}

    {{-- <script type="text/javascript" src="https://github.com/niklasvh/html2canvas/releases/download/0.4.1/html2canvas.js"></script> --}}
    <script src="{{ asset('js/html2canvas.js') }}"></script>

    <script type="text/javascript" src="http://www.nihilogic.dk/labs/canvas2image/base64.js"></script>
    <script type="text/javascript" src="http://www.nihilogic.dk/labs/canvas2image/canvas2image.js"></script>


    {{-- js de prueba --}}
    <script src="{{ asset('js/prueba.js') }}"></script>
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
        function preloaderCupon() {
            console.log('prueb');
            const fragment = document.createDocumentFragment();
            //CREAMOS EL EL ELEMENTO DIV                
            const preloader = document.createElement("div");
            //ASIGNAMOS NOMVRE DE ID
            preloader.id = 'preloader';
            //CREAMOS EL EL ELEMENTO DIV
            const loaderPageImg = document.createElement("div");
            //ASIGNAMOS NOMVRE DE la CLASE                
            loaderPageImg.className = 'loader-page-img';
            //CREAMOS EL EL ELEMENTO H5
            var h5 = document.createElement("h5");
            //ASIGNAMOS NOMVRE DE ESTILO
            h5.style = "text-align: center"
            h5.innerHTML = "Generando Cupón";
            const loaderPage = document.createElement("div");
            loaderPage.className = 'loader-page';

            preloader.appendChild(loaderPageImg);
            /* preloader.appendChild(h1); */
            loaderPageImg.appendChild(loaderPage);
            loaderPageImg.appendChild(h5);
            document.body.appendChild(preloader);
        }

        $(window).on('load', function() {
            setTimeout(function() {
                $(".loader-page").css({
                    visibility: "hidden",
                    opacity: "0"
                })
            }, 100);
            setTimeout(function() {
                $(".loader-page-img").css({
                    visibility: "hidden",
                    opacity: "0"
                })
            }, 100);
            setTimeout(function() {
                $("#preloader").css({
                    visibility: "hidden",
                    opacity: "0"
                })
            }, 100);

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
    {{-- ABRIR AUTOMATICAMENTE EL MODAL DESPUES DE GENERAR CUPON --}}
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
        $(document).ready(function() {                        
            $("#modalCookie").modal("show");            
        });
        function cerrarModalCookie(){
            $("#modalCookie").modal("hide");
            $("#modalPoliticaPrivacidad").modal("show");  
        }
    </script>

    {{-- SCRIPT DESCARGAR CUPON A PNG --}}
    <script>
        function exportarHTMLaPNG(divId, filename) {
            // Obteniendo la etiqueta la cual se desea convertir en imagen
            var domElement = document.getElementById(divId);

            // Utilizando la función html2canvas para hacer la conversión
            html2canvas(domElement, {
                onrendered: function(domElementCanvas) {
                    // Obteniendo el contexto del canvas ya generado
                    var context = domElementCanvas.getContext('2d');

                    // Creando enlace para descargar la imagen generada
                    var link = document.createElement('a');
                    link.href = domElementCanvas.toDataURL("image/png");
                    link.download = filename;

                    // Chequeando para browsers más viejos
                    if (document.createEvent) {
                        var event = document.createEvent('MouseEvents');
                        // Simulando clic para descargar
                        event.initMouseEvent("click", true, true, window, 0,
                            0, 0, 0, 0,
                            false, false, false, false,
                            0, null);
                        link.dispatchEvent(event);
                    } else {
                        // Simulando clic para descargar
                        link.click();
                    }
                }
            });
        }
        // Haciendo la conversión y descarga de la imagen al presionar el botón
        /*  $('#boton-descarga').click(function() {
             exportarHTMLaPNG('imagen', 'imagen.png');
         }); */
    </script>
</body>

</html>
