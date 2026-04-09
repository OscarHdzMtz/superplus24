@extends('layouts.fronted.index')
@section('redes')
    <div class="red">
        <div id="facebook">
            <a href="" target="none" class="fab fa-facebook-f"></a>
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
        <picture>
            <source srcset="{{ asset('img/estaticos/navbar.webp') }}" type="image/webp">
            <img class="imgnavbartop" src="{{ asset('img/estaticos/navbar.jpg') }}" alt="SuperPlus">
        </picture>
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
                    <li class="nav-item active">
                        <a href="/" class="nav-link"><i class="fas fa-tachometer-alt"></i>INICIO</a>
                    </li>
                    <li class="nav-item">
                        <a href="/promociones" class="nav-link"><i class="fas fa-percentage"></i>PROMOCIONES</a>
                    </li>
                    <li class="nav-item">
                        <a href="/nosotros" class="nav-link"><i class="fas fa-check-circle"></i>NOSOTROS</a>
                    </li>
                    <li class="nav-item">
                        <a href="/empleo" class="nav-link"><i class="fas fa-building"></i>BOLSA DE TRABAJO</a>
                    </li>
                    <li class="nav-item">
                        <a href="/contact" class="nav-link"><i class="fas fa-phone"></i>CONTACTANOS</a>
                    </li>
                    <li class="nav-item">
                        <a href="/facturacion" class="nav-link"><i class="far fa-copy"></i>FACTURACION</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
@endsection


@section('banner')
    {{-- <div id="carouselExampleSlidesOnly" class="banner_index" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="{{ asset('img/superplus.jpg') }}" alt="First slide">
            </div>
        </div>
    </div> --}}

    <div id="carouselExampleControls" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner">
            @php $i = 1 @endphp
            @foreach ($sliderindex as $slider)
                <div class="carousel-item {{ $i == '1' ? 'active' : '' }}">
                    @php $i++ @endphp
                    @php $webpImage = \Illuminate\Support\Str::slug(pathinfo($slider->image, PATHINFO_FILENAME)) . '.webp'; @endphp
                    <picture>
                        <source srcset="{{ asset('/img/slider/' . $webpImage) }}" type="image/webp">
                        <img class="d-block w-100" src="{{ asset('/img/slider/' . $slider->image) }}" alt="First slide" {{ $i > 2 ? ' loading="lazy"' : '' }}>
                    </picture>
                    @if ($slider->description != '')
                        <div style="background-color: rgba(0, 0, 0, .5)" class="carousel-caption d-none d-md-block">
                            <h5 style="color: white"><strong>{!! $slider->description !!}</strong></h5>
                        </div>
                    @endif
                </div>
            @endforeach
        </div>
        {{-- <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a> --}}
    </div>
@endsection


@section('cards_service')
    {{-- TEXTO EN MOVIMIENTO --}}
    <h1 class="textmov"><span class="type"></span></h1>
    {{-- EMPIEZA LA SECCION QUIENES SOMOS --}}
    <div class="historia">
        <div class="container">
            <div class="row align-items-center">
                @foreach ($getitulo as $settitulo)
                    @if ($settitulo->label == 'titulofooter')
                        <div class="col-md-6 order-1 order-md-2 mb-4 mb-md-0">
                            <div class="testimonial-title">
                                <h3>{{ $settitulo->titulo }}</h3>
                                <hr class="{{ $settitulo->style }}">
                            </div>
                            <p class="historia-text">{{ $settitulo->description }}</p>
                        </div>
                    @endif
                @endforeach
                @foreach ($getimagen as $setimagen)
                    <div data-aos="fade-right" class="col-md-6 order-2 order-md-1">
                        @php $webpFooterImg = \Illuminate\Support\Str::slug(pathinfo($setimagen->image, PATHINFO_FILENAME)) . '.webp'; @endphp
                        @if(file_exists(public_path('img/imagenfooter/' . $webpFooterImg)))
                            <picture>
                                <source srcset="{{ asset('/img/imagenfooter/' . $webpFooterImg) }}" type="image/webp">
                                <img class="img-fluid w-100" src="{{ asset('/img/imagenfooter/' . $setimagen->image) }}" alt="about image" default-loading="lazy">
                            </picture>
                        @else
                            <img class="img-fluid w-100" src="{{ asset('/img/imagenfooter/' . $setimagen->image) }}" alt="about image" loading="lazy">
                        @endif
                    </div>
                @endforeach

            </div>
        </div>
    </div>
    {{-- TERMINA LA SECCION QUIENES SOMOS --}}
    <div class="container_cards">
        <div class="row_cards">
            @foreach ($gettarjeta as $settarjeta)
                <div data-aos="fade-up" class="col-md-3 col-sm-6 mb-3 text-center">
                    <div class="single-content_service">
                        <div class="service">
                            <i class="{{ $settarjeta->icono }} fa-4x"></i>
                            <h4 class="title_services">{{ $settarjeta->titulo }}</h4>
                            <p class="description_services">{{ $settarjeta->description }}</p><br>
                            @if ($settarjeta->modal != '1')
                                <a href="{{ $settarjeta->redireccion }}" class="btn_modal_wel mt-5">{{ $settarjeta->titulobtn }}</a>
                            @else
                                <a href="" class="btn_modal_wel mt-5" data-toggle="modal"
                                    data-target=".{{ $settarjeta->redireccion }}">{{ $settarjeta->titulobtn }}</a>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

{{-- SERIVIOSS --}}
@section('title')
    @foreach ($getitulo as $settitulo)
        @if ($settitulo->label == 'tituloservicios')
            <div class="col-12">
                <div class="testimonial-title">
                    <h5>{{ $settitulo->titulo }}</h5>
                    <h3>{{ $settitulo->description }}</h3>
                    <hr class="{{ $settitulo->style }}">
                </div>
            </div>
        @endif
    @endforeach
@endsection
<!--TARJETAS SERVICIOS-->
@section('cards')
    <div class="container_cards">
        <div class="row_cards">
            @foreach ($servicios as $servicios)
                <div data-aos="fade-up" class="col-md-3 col-sm-6 mb-3">
                    <div class="single-content">
                        <img src="{{ asset('/img/servicios/' . $servicios->image) }}" alt="ServiciosPlus" loading="lazy">
                        <div style="padding-top: 20px" class="text-content">
                            <img src="{{ asset('/img/servicios/' . $servicios->imghover) }}" alt="ServiciosPlus" loading="lazy">
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

{{-- PRODUCTOS NUEVOS --}}
@section('title5')
    {{-- TEXTO EN MOVIMIENTO --}}
    {{-- <h1 class="textmov"><span class="type"></span></h1> --}}
    {{-- EMPIEZA LA SECCION QUIENES SOMOS --}}
    @if (count($productos) > 0)
        @foreach ($getitulo as $settitulo)
            @if ($settitulo->label == 'tituloproductos')
                <div class="col-12">
                    <div class="testimonial-title">
                        <h5>{{ $settitulo->titulo }}</h5>
                        <h3>{{ $settitulo->description }}</h3>
                        <hr class="{{ $settitulo->style }}">
                    </div>
                </div>
            @endif
        @endforeach
    @endif
@endsection
@section('Proveedores')
    <div data-aos="fade-up" class="container-fluid">
        <div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner">
                @php $i = 1 @endphp
                @foreach ($productos as $productos)
                    <div class="carousel-item {{ $i == '1' ? 'active' : '' }}">
                        @php $i++ @endphp
                        <div class="mask flex-center">
                            <div class="container">
                                <div class="row align-items-center mt-1">
                                    <div class="col-md-6 col-12 mt-2 product-info-column text-left">
                                        <h4 class="product-name-modern">{{ $productos->name }}</h4>
                                        <div class="product-desc-modern">{!! $productos->descriptions !!}</div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <img src="{{ asset('/img/productos/' . $productos->image) }}" class="mx-auto img-fluid" alt="slide" loading="lazy">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                <span aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                <span aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
@endsection

{{-- titulo redes --}}
@section('title1')
    @foreach ($getitulo as $settitulo)
        @if ($settitulo->label == 'tituloredes')
            <div class="col-12">
                <div class="testimonial-title">
                    <h5>{{ $settitulo->titulo }}</h5>
                    <h3>{{ $settitulo->description }}</h3>
                    <hr class="{{ $settitulo->style }}">
                </div>
            </div>
        @endif
    @endforeach
@endsection

@section('redessociales')
    {{-- <div class="col-md-12 py-5 text-center justify-content-md-center">
        <div class="mb-3 flex-center">
            <div class="estilo3">
                <ul>
                    <li>
                        <a href="instragram" class="" target="_blank">
                            <span class="fa-stack fa-lg fa-5x">
                                <span class="fa fa-circle-thin fa-stack-2x prueba"></span>
                                <div class="icono">
                                    <span class="fa fa-facebook fa-stack-1x"></span>
                                </div>
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="instragram" class="" target="_blank">
                            <span class="fa-stack fa-lg fa-5x">
                                <span class="fa fa-circle-thin fa-stack-2x prueba"></span>
                                <div class="icono">
                                    <span class="fa fa-whatsapp fa-stack-1x"></span>
                                </div>
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="instragram" class="" target="_blank">
                            <span class="fa-stack fa-lg fa-5x">
                                <span class="fa fa-circle-thin fa-stack-2x prueba"></span>
                                <div class="icono">
                                    <span class="fa fa-whatsapp fa-tiktok fa-stack-1x"></span>
                                </div>
                            </span>
                        </a>
                    </li>
                    <ul>
            </div>
        </div>
    </div> --}}
    <section>
        <ul id="services">
            <li>
                <div class="facebook">
                    <a href="https://www.facebook.com/superplus24horas/">
                        <i class="fab fa-facebook-f" aria-hidden="true"></i>
                    </a>
                </div>
                <span>Facebook</span>
            </li>
            <li>
                <div class="instagram">
                    <a href="https://www.instagram.com/superplus24hrs/">
                        <i class="fab fa-instagram" aria-hidden="true"></i>
                    </a>
                </div>
                <span>Instagram</span>
            </li>
            <li>
                <div class="twitter">
                    <a href='https://vm.tiktok.com/ZMNA67fEu/'>
                        <i class="fab fa-tiktok" aria-hidden="true"></i>
                    </a>
                </div>
                <span>TikTok</span>
            </li>
        </ul>
    </section>
@endsection

{{-- MARCA PROVEDORES --}}
@section('title2')
    <div style="margin-top: 40px; margin-bottom: 10px;">
        @foreach ($getitulo as $settitulo)
            @if ($settitulo->label == 'titulomarcas')
                <div class="col-12">
                <div class="testimonial-title">
                    <h5>{{ $settitulo->titulo }}</h5>
                    <h3>{{ $settitulo->description }}</h3>
                    <hr class="{{ $settitulo->style }}">
                </div>
            </div>
        @endif
    @endforeach
    </div>
@endsection

@section('products')
    {{-- <div class="producst_body autoplay ">
        @foreach ($productos as $producto)
        <div class="wrapper">
            <div class="container">
                <img class="top" src="{{asset('/img/productos/'.$producto->image)}}" alt="{{$producto->image}}">
                <div class="bottom">
                    <div class="left">
                        <div class="details">
                            <h2 class="txt_products">{{$producto->name}}</h2>
                            <p>MXN {{$producto->price}}</p>
                        </div>
                        <div class="buy text-center">
                            <a href="{{route('product-details', $producto->slug)}}">
                                <i class="fas fa-eye"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="inside">
                <div class="icon"><i class="fas fa-plus"></i></div>
                <div class="contents">
                    <h1>{{$producto->extract}}</h1>
                    <h5 style="color: white">{{$producto->descriptions}}</h5>
                </div>
            </div>
        </div>
        @endforeach
    </div> --}}
    {{-- <div class="slider">
        <div class="slide-track">
            @foreach ($proveedores as $proveedores)
            <div class="slide">
                <img src="{{ asset('/img/proveedore/' . $proveedores->image) }}" height="100" width="250"
                    alt="{{ $proveedores->image }}" />
            </div>
            @endforeach
        </div>
    </div> --}}

    <!-- ======= MARCAS PROVEEDORES ======= -->
    <section id="clients" class="clients">
        <div class="container-fluid" data-aos="zoom-in">
            <div class="clients-slider swiper">
                <div class="swiper-wrapper align-items-center">
                    @foreach ($proveedores as $proveedores)
                        <div class="swiper-slide"><img src="{{ asset('/img/proveedore/' . $proveedores->image) }}"
                                class="img-fluid" alt="" loading="lazy"></div>
                    @endforeach
                </div>

                <div class="swiper-pagination"></div>

            </div>
        </div>
    </section><!-- End Clients Section -->
@endsection

@section('footer')
    <div style="margin-top: 30px" data-aos="fade-up" class="footer-dark">
        <footer class="new_footer_area bg_color">
                <div class="box">
                    <div class="box-sm blue "></div>
                    <div class="box-sm blue "></div>
                    <div class="box-sm blue "></div>
                    <div class="box-sm blue "></div>
                    <img style="margin-top: -30px; margin-left:-20px; margin-right: -20px"
                        src="{{ asset('img/logop.png') }}" width="90px" height="55px" alt="">
                </div>
                {{-- pie de pagina --}}
                <div style="margin-top: -60px" class="footer-basic">
                    <footer data-aos="fade-right">

                        <ul class="list-inline">
                            <li class="list-inline-item"><a href="/index">Inicio</a></li>
                            <li class="list-inline-item"><a href="/promociones">Promociones</a></li>
                            <li class="list-inline-item"><a href="/nosotros">Nosotros</a></li>
                            <li class="list-inline-item"><a href="/contact">Contáctanos</a></li>
                            <li style="color: black" class="list-inline-item"> <a data-toggle="modal"
                                    data-target=".politica">Política de privacidad</a></li>
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
    </div>
    @include('modalPoliticaPrivacidad')
    {{-- <footer class="footer">

    </footer> --}}
@endsection

<!--MODALS-->
@section('modals')
    {{-- Modal formas de pago --}}
    <div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="text-center modal-title" id="exampleModalCenterTitle">Formas de pago</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="principalPagos">
                    <div id="contenedor" class="row_p">
                        <div id="naranja" class="">
                            <img class="
                                popou_img" src="{{ asset('img/pagos.jpg') }}" alt="">
                        </div>
                        <div id="verde" class="content_pagos">
                            <h2 class=" frm_pagos text-center">FORMAS DE PAGO</h2>
                            <hr class="style3">

                            <div id="price">
                                <!--price tab-->
                                <div class="plan">
                                    <div class="plan-inner">
                                        <div class="entry-title">
                                            <h3>BCP</h3>
                                            <div class="price"><i class="mt-3 fa-2x fas fa-credit-card"></i>
                                            </div>
                                        </div>
                                        <div class="entry-content">
                                            <ul>
                                                <li>Número de cuenta</li>
                                                <li>******************</li>
                                                <li>N° de cta. interbancaria</li>
                                                <li>*********************</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- end of price tab-->
                                <!--price tab-->
                                <div class="plan basic">
                                    <div class="plan-inner">
                                        <div class="entry-title">
                                            <h3>BBVA</h3>
                                            <div class="price"><i class="mt-3 fa-2x fas fa-credit-card"></i>
                                            </div>
                                        </div>
                                        <div class="entry-content">
                                            <ul>
                                                <li>Número de cuenta</li>
                                                <li>*******************</li>
                                                <li>N° de cta. interbancaria</li>
                                                <li>**********************</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- end of price tab-->
                                <!--price tab-->
                                <div class="plan standard">
                                    <div class="plan-inner">
                                        <div class="entry-title">
                                            <h3>Yape</h3>
                                            <div class="price"><i class="mt-3 fa-2x fas fa-mobile-alt"></i>
                                            </div>
                                        </div>
                                        <div class="entry-content">
                                            <ul>
                                                <li>Número de Billetera Electronica</li>
                                                <li>999 086 095</li>
                                                <li>.</li>
                                                <li>.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- end of price tab-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- plus a domicilio --}}
    <div class="modal fade delivery" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div id="contenedor" class="row_p">
                <div id="naranja" class="">
                    <img class=" popou_img" src="{{ asset('img/entrega.png') }}" alt="">
                </div>
                <div id="verde" class="content_pagos">
                    <h2 style="color: black" class=" frm_pagos text-center">SUPERPLUS A DOMICILIO</h2>
                    <hr class="style3">
                    <h5>{{-- Primero se envía la cotización al cliente, luego de ello el cliente envía la orden de compra
                        por medio de nuestro correo y a las 24 horas
                        se le realiza el envío de los productos dentro de Lima sin costo alguno, a provincia se aplica un
                        adicional. --}}</h5>
                </div>
            </div>
        </div>
    </div>

    {{-- promociones en modal --}}
    <div class="modal fade modal fade ofertaexclusiva" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h5 class="text-center modal-title" id="exampleModalCenterTitle"><strong>PROMOCIONES
                            EXCLUSIVAS</strong></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="principal text-center justify-content-md-center ">
                    @if (count($ofertas) > 0)
                        <div data-aos="fade-up" class="container_cards">
                            <div class="row_cards">
                                @foreach ($ofertas as $oferta)
                                    <div class="col-md-4 col-sm-6 mb-4">
                                        @if ($oferta->texto != '')
                                            <div class="single-content">
                                                <img class="popou_img" src="{{ asset('/img/ofertas/' . $oferta->image) }}"
                                                    alt="{{ $oferta->image }}" loading="lazy">
                                                <div class="text-content">

                                                    <h2 class="frm_pagos text-center">{{ $oferta->texto }}</h2>
                                                </div>
                                            </div>
                                        @else
                                            <div class="">
                                                <img class="popou_img" src="{{ asset('/img/ofertas/' . $oferta->image) }}"
                                                    alt="{{ $oferta->image }}" loading="lazy">
                                            </div>
                                        @endif
                                    </div>
                                @endforeach
                            </div>
                            <div class="mb-5">
                                <a href="/promociones" class="btn_modal_promoexclusivo mt-5">Ver todas los promociones</a>
                            </div>
                        </div>
                    @else
                        <div class="sinpromo mt-5">
                            <p>No hay promociones exclusivas</p>
                            <a href="/promociones" class="btn_modal_promoexclusivo mt-5">Ver todas los promociones</a>
                        </div>
                    @endif
                </div>
                {{-- <div class="principal">
                    @foreach ($ofertas as $oferta)
                    <div id="contenedor" class="row_p">
                        <div id="naranja" class="">
                            <img class="popou_img" src="{{ asset('/img/ofertas/' . $oferta->image) }}"
                                alt="{{ $oferta->image }}">
                        </div>
                        <div id="verde" class="content_pagos">
                            <strong>
                                <h2 class=" frm_pagos text-center">{{ $oferta->titulo }}</h2>
                            </strong>
                            <br>
                            <h4>{{ $oferta->texto }}</h4>
                            <button type="button" class="btnwssp btn btn-outline-success btn-lg">
                                <a target="none"
                                    href="https://wa.me/51987654321?text=Hola%2CEstoy+interesad%40+en+la+oferta%3A+{{ $oferta->titulo }}">
                                    Preguntar
                                </a>
                            </button>
                        </div>
                    </div>
                    @endforeach
                </div> --}}
            </div>
        </div>
        {{-- <div class='icon-scroll'></div>
        <h6 style="color: white" class="text-center">Si hay más promociones por favor siga bajando</h6> --}}
    </div>
@endsection