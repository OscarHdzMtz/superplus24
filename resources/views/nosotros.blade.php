@extends('layouts.fronted.nosotros')
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
    <div class="header-top">
        <div class="container d-flex justify-content-between">
            <div class="d-inline-flex ml-auto">
                <div class="headcont">
                    <i class="fas fa-2x fa-mobile-alt messenge"></i>
                    953 138 2693
                </div>
                <div class="headcont">
                    <i class="fas fa-2x fa-envelope messenge"></i>
                    SuperPlus24Hrs
                </div>
            </div>
        </div>
    </div>
@endsection
@section('navbar')
    <nav class="navbar navbar-expand-custom navbar-mainbg">
        <a href="#" class="logo">
            <img class="imgtamaño" src="{{ asset('dist/img/logo.png') }}" alt="SuperPlus">
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
                <li class="nav-item">
                    <a href="/promociones" class="nav-link" href="javascript:void(0);"><i
                            class="fas fa-percentage"></i>PROMOCIONES</a>
                </li>
                <li class="nav-item active">
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
                <li class="nav-item">
                    <a href="http://picaroscomer.dyndns.org:81/WebflecHJ/facturacion_01.aspx" target="_blank"
                        class="nav-link" href="javascript:void(0);"><i class="far fa-copy"></i>FACTURACION</a>
                </li>
            </ul>
        </div>
    </nav>
@endsection



@section('banner')
    @foreach ($empresafront as $empresa)
        @if ($empresa->label == 'banner')
            <div id="carouselExampleSlidesOnly" class="banner_nosotros" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="{{ asset('/img/miempresa/' . $empresa->image) }}"
                            alt="First slide">
                    </div>
                </div>
            </div>        
        @elseif($empresa->label == 'historia')   
        <div class="historia">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6 order-1 order-md-2 mb-4 mb-md-0">
                        {{-- <h5 >CONOCE</h5> --}}
                        <div class="testimonial-title">
                            <h3>{{ $empresa->titulo }}</h3>
                            <hr class="style6 historia-title">
                        </div>
                        <p class="historia-text">{{ $empresa->description }}</p>
                    </div>
                    <div class="col-md-6 order-2 order-md-1">
                        <img class="img-fluid w-100" src="{{ asset('/img/miempresa/' . $empresa->image) }}" alt="about image">
                    </div>
                </div>
            </div>   
        </div> 
        @elseif($empresa->label == 'titulo')
        <div class="testimonial-title-padding">
            <div class="col-12">
                <div class="testimonial-title">
                    {{-- <h5>CONOCE</h5> --}}
                    <h3>{{ $empresa->titulo }}</h3>
                    <hr class="style6">
                </div>
            </div>
        </div>     
        @else
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="blog-card">
                            <div class="meta">
                                <div class="photo"
                                style="background-image: url('{{ asset('/img/miempresa/' . $empresa->image) }}')">
                                </div>
                                <ul class="details logohover "
                                    style="background-image: url('{{ asset('/img/miempresa/' . $empresa->imghover) }}')">
                                </ul>
                            </div>
                            <div class="description">
                                <h1>{{ $empresa->titulo }}</h1>
                                {{-- <h2>Opening a door to the future</h2> --}}
                                <p>{!! $empresa->description !!}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
        @endif      
    @endforeach
@endsection

{{-- @section('historia')
@endsection

@section('title2')
@endsection

@section('foda')
@endsection
 --}}
@section('footer')
    <div style="padding-top: 10px" data-aos="fade-up" class="footer-dark">        
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
                    <img style="margin-top: -30px; margin-left:-20px; margin-right: -20px"
                        src="{{ asset('img/logop.png') }}" width="90px" height="55px" alt="">
                    <div class="box-sm yellow "></div>
                    <div class="box-sm yellow "></div>
                    <div class="box-sm yellow "></div>
                    <div class="box-sm yellow "></div>
                </div>
                <div style="margin-top: -55px" class="footer-basic">
                    <footer>
                        <div class="col-md-12 py-0 text-center justify-content-md-center">
                            <div class="mb-3 flex-center">
                                <div class="estilo2">
                                    <ul>
                                        <li>
                                            <a href="instragram" class="" target="_blank">
                                                <span class="fa-stack fa-lg fa-2x">
                                                    <span class="fa fa-circle-thin fa-stack-2x prueba"></span>
                                                    <div class="icono">
                                                        <span class="fa fa-facebook fa-stack-1x"></span>
                                                    </div>
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="instragram" class="" target="_blank">
                                                <span class="fa-stack fa-lg fa-2x">
                                                    <span class="fa fa-circle-thin fa-stack-2x prueba"></span>
                                                    <div class="icono">
                                                        <span class="fa fa-whatsapp fa-stack-1x"></span>
                                                    </div>
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="instragram" class="" target="_blank">
                                                <span class="fa-stack fa-lg fa-2x">
                                                    <span class="fa fa-circle-thin fa-stack-2x prueba"></span>
                                                    <div class="icono">
                                                        <span class="fa fa-google fa-stack-1x"></span>
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
                            <li class="list-inline-item"><a href="/contact">Contactanos</a></li>
                            <li class="list-inline-item"><a href="#">Politica de privacidad</a></li>
                        </ul>
                        <p class="copyright">Dale un plus a tu dia!</p>
                    </footer>
                </div>    
                <!-- Copyright -->
                <div class="text-center p-3" style="background-color:#1266f1">
                    © 2021 Copyright:
                    <a class="text-white" href="">SuperPlus</a>
                </div>
                <!-- Copyright -->
            </footer>        
    </div>
    {{-- <footer class="footer">
   
</footer> --}}
@endsection

@section('title')
    <h1 align="center" class="textmov"><span class="type"></span></h1>
    <div class="col-12">
        <div class="testimonial-title">
            <h5>CONOCE</h5>
            <h3>NUESTRAS INSTALACIONES</h3>
            <hr class="style6">
        </div>
    </div>
@endsection
