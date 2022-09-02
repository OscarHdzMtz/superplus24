@extends('layouts.fronted.facturacion')
@section('redes')
    <div class="red">
        <div id="facebook">
            <a href="" target="none" class="fab fa-facebook-f "></a>
        </div>
        <div id="instagram">
            <a href="" target="none" class="fab fa-instagram"></a>
        </div>
        <div id="twiter">
            <a href="" target="none" class="fab fa-twitter-square"></a>
        </div>
        <div id="whatsaap">
            <a href="" target="none" class="fab fa-whatsapp"></a>
        </div>
    </div>
@endsection
@section('navbar_top')
    {{-- <div data-aos="fade-up" style="padding-top: 2px" class="header-top">
        <div class="container d-flex justify-content-between">
            <div class="d-inline-flex ml-auto">
                <div style="color: black" class="headcont">
                    <i class="fas fa-2x fa-mobile-alt messenge"></i>
                    953 138 2693
                </div>
                <div style="color: black" class="headcont">
                    <i class="fas fa-2x fa-envelope messenge"></i>
                    SuperPlus24Hrs
                </div>
            </div>
        </div>
    </div> --}}
    {{-- <div data-aos="zoom-in-down" class="header-top">
        <img class="imgnavbartop" src="{{ asset('img/estaticos/1.png') }}" alt="SuperPlus">
    </div> --}}
@endsection
@section('navbar')
    <div class="img-fixed">
        <div {{-- data-aos="zoom-in-down" --}}>
            <img class="imgnavbartop" src="{{ asset('img/estaticos/navbar.jpg') }}" alt="SuperPlus">
        </div>
        <nav class="navbar sticky-top navbar-expand-custom navbar-mainbg">
            {{-- <a href="#" class="logo">
            <img class="imgtamaño" src="{{ asset('dist/img/logo.png') }}" alt="SuperPlus">
        </a> --}}
            <a href="#" class="logo">
                <img class="imgtamaño">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars text-white"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <div class="hori-selector">
                        <div class="left"></div>
                        <div class="right"></div>
                    </div>
                    <li class="nav-item">
                        <a href="/" class="nav-link" href="javascript:void(0);"><i
                                class="fas fa-tachometer-alt"></i>INICIO</a>
                    </li>
                    <li class="nav-item" active>
                        <a href="/promociones" class="nav-link" href="javascript:void(0);"><i
                                class="fas fa-percentage"></i>PROMOCIONES</a>
                    </li>
                    <li class="nav-item">
                        <a href="/nosotros" class="nav-link" href="javascript:void(1);"><i
                                class="fas fa-check-circle"></i>NOSOTROS</a>
                    </li>
                    <li class="nav-item">
                        <a href="/empleo" class="nav-link" href="javascript:void(0);"><i class="fas fa-building"></i>BOLSA
                            DE TRABAJO</a>
                    </li>
                    <li class="nav-item">
                        <a href="/contact" class="nav-link" href="javascript:void(0);"><i
                                class="fas fa-phone"></i>CONTACTANOS</a>
                    </li>
                    <li class="nav-item active">
                        <a href="https://picaroscomer.dyndns.org/WebFlec/facturacion_01.aspx" target="_blank"
                            class="nav-link" href="javascript:void(0);"><i class="far fa-copy"></i>FACTURACION</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    @if (session('info'))
        {{-- <script>
            alert("{{ session('info') }}");
        </script> --}}
        <div classs="container ">
            <div class="row no-gutters fixed-bottom">
                <div class="col-lg-4 col-md-12 ml-auto">
                    <div class="alert alert-gradient shadow" role="alert">
                        <div class="row">
                            <div style="margin-left: -10px" class="col-2">
                                <img class="d-block w-100" src="{{ asset('/img/logop.png') }}" alt="First slide">
                            </div>
                            <div class="col-10 my-auto">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true" style="color: #000">&times;</span>
                                </button>
                                <h5 style="margin-left: -25px" class="alert-heading-gradient">{{ session('info') }}</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <style>
            .alert-gradient {
                background: #5cb85c;
                border-radius: 5px;
                border: none;
                color: #fff;
            }

            .alert-heading-gradient {
                color: #fff;
                font-weight: 1.3em;
            }
        </style>
    @endif
@endsection
@section('banner')
    <div id="carouselExampleSlidesOnly" class="banner_nosotros" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="{{ asset('/img/estaticos/contactanos.png') }}" alt="First slide">
            </div>
        </div>
    </div>
@endsection
{{-- @section('cards_service')
@endsection --}}

@section('Content_messege')
    @foreach ($getFacturacion as $setFacturacion)
        @if ($setFacturacion->label == 'banner')
            <div id="carouselExampleSlidesOnly" class="banner_nosotros" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="{{ asset('/img/facturacion/' . $setFacturacion->image) }}"
                            alt="FacturacionPlus">
                    </div>
                </div>
            </div>            
        @elseif($setFacturacion->label == 'textoImagen')
            {{-- <div class="px-5"> --}}
                <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6 order-1 order-md-2 mb-4 mb-md-0">
                        {{-- <h5 >CONOCE</h5> --}}
                        <div class="testimonial-title">
                            <h3>{{ $setFacturacion->titulo }}</h3>
                            {{-- <hr class="style6 historia-title"> --}}
                        </div>
                        <div class="container text-justify justify-content-md-center">
                            <p style="text-align: justify" class="historia-text">{!! $setFacturacion->description !!}</p>
                        </div>
                    </div>
                    <div class="col-md-6 order-2 order-md-1">
                        <img class="img-fluid w-100" src="{{ asset('/img/facturacion/' . $setFacturacion->image) }}"
                            alt="about image">
                    </div>
                </div>
            </div>
        @elseif($setFacturacion->label == 'titulo')
            <div class="testimonial-title">
                {{-- <h5>CONOCE</h5> --}}
                <h1>{{ $setFacturacion->titulo }}</h1>
                <hr class="style6">
            </div>   
            <br>         
        @elseif($setFacturacion->label == 'subtitulo')
            <div class="container">
                {{-- <h5>CONOCE</h5> --}}
                <div class="container text-center justify-content-md-center">
                    <p style="color: black; text-align: center">{!! $setFacturacion->subtitulo !!}</p>
                </div>
            </div>
        @elseif($setFacturacion->label == 'boton')
            <div>
                {{-- <h5>CONOCE</h5> --}}
                <div class="container text-center justify-content-md-center">
                    <div class="">                      
                            <a style="background: #003BAA; color: blanchedalmond" href="{{ $setFacturacion->subtitulo }}"
                                class="btn_modal_wel mt-5">{{ $setFacturacion->titulo }}</a>
                    </div>
                </div>
            </div>
        @endif
    @endforeach
@endsection

@section('footer')
    <div style="margin-top: 35px" data-aos="fade-up" class="footer-dark">
        <footer>
            <footer class="new_footer_area bg_color">
                <div class="box">
                    {{-- <div class="box-sm red"></div> --}}
                    {{-- <div class="box-sm orange"></div> --}}
                    <div class="box-sm blue "></div>
                    {{-- <div class="box-sm green "></div> --}}
                    <div class="box-sm blue "></div>
                    {{-- <div class="box-sm purple"></div> --}}
                    <div class="box-sm blue "></div>
                    <div class="box-sm blue "></div>
                    <img style="margin-top: -30px; margin-left:-20px; margin-right: -20px;position: relative;"
                        src="{{ asset('img/logop.png') }}" width="90px" height="55px" alt="">
                    <div class="box-sm yellow "></div>
                    <div class="box-sm yellow "></div>
                    <div class="box-sm yellow "></div>
                    <div class="box-sm yellow "></div>
                </div>
                {{-- pie de pagina --}}
                <div style="margin-top: -60px" class="footer-basic">
                    <footer>
                        <div class="col-md-12 py-0 text-center justify-content-md-center">
                            <div class="mb-3 flex-center">
                                <div class="estilo2">
                                    <ul>
                                        <li>
                                            <a href="https://www.facebook.com/superplus24horas/" class=""
                                                target="_blank">
                                                <span class="fa-stack fa-lg fa-2x">
                                                    <span class="fa fa-circle-thin fa-stack-2x prueba"></span>
                                                    <div class="icono">
                                                        <span class="fa fa-facebook fa-stack-1x"></span>
                                                    </div>
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.instagram.com/superplus24hrs/" class=""
                                                target="_blank">
                                                <span class="fa-stack fa-lg fa-2x">
                                                    <span class="fa fa-circle-thin fa-stack-2x prueba"></span>
                                                    <div class="icono">
                                                        <span class="fab fa-instagram fa-stack-1x"></span>
                                                    </div>
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://vm.tiktok.com/ZMNA67fEu/" class="" target="_blank">
                                                <span class="fa-stack fa-lg fa-2x">
                                                    <span class="fa fa-circle-thin fa-stack-2x prueba"></span>
                                                    <div class="icono">
                                                        <span class="fab fa-tiktok fa-stack-1x"></span>
                                                    </div>
                                                </span>
                                            </a>
                                        </li>
                                        <ul>
                                </div>
                            </div>
                        </div>
                        <ul class="list-inline">
                            <li class="list-inline-item"><a href="/index">Inicio</a></li>
                            <li class="list-inline-item"><a href="/promociones">Promociones</a></li>
                            <li class="list-inline-item"><a href="/empleo">Bolsa de trabajo</a></li>
                            <li class="list-inline-item"><a href="/nosotros">Nosotros</a></li>
                            <li class="list-inline-item"><a href="#">Política de privacidad</a></li>
                        </ul>
                        <p class="copyright">¡DALE UN PLUS A TU DIA!</p>
                    </footer>
                </div>

                <!-- Copyright -->
                <div class="text-center p-3" style="background-color:#003baa; color: white">
                    <strong> ©{{ now()->year }} </strong>
                    <a class="text-white" href=""><strong>SUPERPLUS</strong>. Todos los derechos reservados.</a>
                </div>
                <!-- Copyright -->

            </footer>
        </footer>
    </div>
    {{-- <footer class="footer">
   
</footer> --}}
    <script>
        function countChars(obj) {
            document.getElementById("charNum").innerHTML = obj.value.length + ' caracteres';
        }
    </script>
@endsection
