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
    <div id="carouselExampleSlidesOnly" class="banner_nosotros" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="{{ asset('img/slider/58.png') }}" alt="First slide">
            </div>
        </div>
    </div>
@endsection

@section('historia')

@endsection

@section('title2')
    <div class="col-12">
        <div class="testimonial-title">
            <h5>CONOCE</h5>
            <h3>ACERCA DE NOSOTROS</h3>
            <hr class="style6">
        </div>
    </div>
@endsection

@section('foda')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="blog-card">
                    <div class="meta">
                        <div class="photo"
                            style="background-image: url(https://storage.googleapis.com/chydlx/codepen/blog-cards/image-1.jpg)">
                        </div>
                        <ul class="details logohover">

                        </ul>
                    </div>
                    <div class="description">
                        <h1>Mision</h1>
                        {{-- <h2>Opening a door to the future</h2> --}}
                        <p>
                            Brindar a nuestros clientes una gran variedad de productos y servicios las 24 horas del día,
                            ofreciéndoles siempre nuestro plus con la calidad de nuestro servicio.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="blog-card {{-- alt --}}">
                    <div class="meta">
                        <div class="photo"
                            style="background-image: url(https://storage.googleapis.com/chydlx/codepen/blog-cards/image-2.jpg)">
                        </div>
                        <ul class="details logohover">
                        </ul>
                    </div>
                    <div class="description">
                        <h1>Vision</h1>
                        {{-- <h2>Java is not the same as JavaScript</h2> --}}
                        <p>
                            Ser la empresa líder en la región Mixteca, en tiendas de conveniencia, incrementando nuestra
                            rentabilidad y competitividad.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="blog-card">
            <div class="meta">
                <div class="photo"
                    style="background-image: url(https://storage.googleapis.com/chydlx/codepen/blog-cards/image-1.jpg)">
                </div>
                <ul class="details logohover">

                </ul>
            </div>
            <div class="description">
                <h1>Valores</h1>
                {{-- <h2>Opening a door to the future</h2> --}}
                <P>
                <ul>
                    <i class="fas fa-check-circle fa-2x"></i><a> Puntualidad</a> <br>
                    <i class="fas fa-check-circle fa-2x"></i><a> Responsabilidad</a> <br>
                    <i class="fas fa-check-circle fa-2x"></i><a> Lealtad</a> <br>
                    <i class="fas fa-check-circle fa-2x"></i><a> Liderazgo</a> <br>
                    <i class="fas fa-check-circle fa-2x"></i><a> Compromiso</a> <br>
                    <i class="fas fa-check-circle fa-2x"></i><a> Honestidad</a> <br>
                </ul>
                </P>
            </div>
        </div>
    </div>
@endsection
@section('Instalacion')
    {{-- <div class="swiper-container">
        <div class="swiper-wrapper">
            @foreach ($Instalacion as $cliente)
                <div class="swiper-slide">
                    <img class="client_img text-center" src="{{ asset('/img/Instalacion/' . $cliente->image) }}"
                        alt="{{ $cliente->image }}" class="card-img-top">
                </div>
            @endforeach
        </div>
    </div> --}}
    <!-- about us -->
    <section class="historia">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 order-1 order-md-2 mb-4 mb-md-0">
                    {{-- <h5 >CONOCE</h5> --}}
                    <div class="testimonial-title">
                        <h3>NUESTRA HISTORIA</h3>
                        <hr class="style6 historia-title">
                    </div>
                    <p class="historia-text">SUPERPLUS Inicia operaciones el 21 de agosto del 2010 con 1 tienda ubicada en
                        la Col. Sta. Cruz
                        de la Cd. de Huajuapan de León. ​
                        Nuestra denominación social Comercializadora Pícaros de la Mixteca S.A de C.V, y nuestro nombre
                        comercial SUPERPLUS con un horario de atención las 24 horas del día, los 365 días del año ​
                        Ofreciendo a nuestros clientes los mejores productos en el mercado tanto en cerveza, abarrotes,
                        vinos, licores y comida rápida, entre otras.
                        Presencia en Huajuapan, Putla, Juxtlahuaca, Tonala, Tamazulapan, Tlaxiaco, Chalcatongo,
                        Mariscala y Nochixtlan, con apertura de expansión a otros lugares.</p>
                </div>
                <div class="col-md-6 order-2 order-md-1">
                    <img class="img-fluid w-100" src="{{ asset('img/nosotros.jpg') }}" alt="about image">
                </div>
            </div>
        </div>
    </section>
    <!-- /about us -->
@endsection

@section('footer')
    <div data-aos="fade-up" class="footer-dark">
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
                    <img style="margin-top: -30px; margin-left:-20px; margin-right: -20px" src="{{ asset('img/logop.png') }}" width="90px" height="55px" alt="">
                    <div class="box-sm yellow "></div>
                    <div class="box-sm yellow "></div>
                    <div class="box-sm yellow "></div>
                    <div class="box-sm yellow "></div>
                </div>
                <div style="padding-top: 0px" class="new_footer_top">
                    <div class="footer_bg">
                        <div class="footer_bg_one"></div>
                        <div class="footer_bg_two"></div>
                    </div>
                </div>
                <!-- Copyright -->
                <div class="text-center p-3" style="background-color:#1266f1">
                    © 2021 Copyright:
                    <a class="text-white" href="">SuperPlus</a>
                </div>
                <!-- Copyright -->

            </footer>
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
