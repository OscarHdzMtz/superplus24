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
        <!--<div id="linkeding">
                            <a href="https://www.linkedin.com/in/jose-diaz-mira/" target="none" class="fab fa-linkedin"></a>
                            EDITADO MIERCOLES
                        </div>-->
    </div>
@endsection


@section('navbar_top')
    <div data-aos="fade-up" style="padding-top: 2px" class="header-top">
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
                <li class="nav-item active">
                    <a href="/" class="nav-link" href="javascript:void(0);"><i
                            class="fas fa-tachometer-alt"></i>INICIO</a>
                </li>
                <li class="nav-item">
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
                            class="fas fa-phone"></i>CONTACTENOS</a>
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
<div id="carouselExampleSlidesOnly" class="banner slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="{{ asset('img/slider/plus.png') }}" alt="First slide">
      </div>      
    </div>
  </div>
@endsection


@section('cards_service')
    <h1 class="textmov"><span class="type"></span></h1>
    <div data-aos="fade-up" class="container_cards">
        <div class="row_cards">
            <div class="col-md-3 col-sm-6 mb-3 text-center">
                <div class="single-content_service">
                    <div class="service">
                        <i class="fas fa-percent fa-4x"></i>
                        <h4 class="title_services">Promociones</h4>
                        <p class="description_services">Ofertas especiales</p><br>
                        {{-- ESTA LINEA ABRE EL MODAL DE PROMOCIONES --}}
                        <a href="" class="btn_modal_wel mt-5" data-toggle="modal" data-target=".bd-example-modal-x3">Ver mas</a>
                        {{-- <a class="btn_modal_wel mt-5" href="{{ url('/promociones') }}">Ver mas</a> --}}
                    </div>
                </div>
            </div>
            {{-- <div class="col-md-3 col-sm-6 mb-3 text-center">
            <div class="single-content_service">
                <div class="service">
                    <i class="fas fa-shopping-cart fa-4x"></i>
                    <h4 class="title_services">Entrega Inmediata</h4>
                    <p class="description_services">Servicio de entrega inmediata</p><br>
                    <a href="" class="btn_modal_wel mt-5" data-toggle="modal" data-target=".bd-example-modal-xl2">Ver mas</a>  
                </div>
            </div>
        </div> --}}
            <div class="col-md-3 col-sm-6 mb-3 text-center">
                <div class="single-content_service">
                    <div class="service">
                        <i class="fas fa-map-marker-alt fa-4x"></i>
                        <h4 class="title_services">Buscador de plus</h4>
                        <p class="description_services">Localiza tu plus mas cercano</p><br>
                        <a href="/mapa" class="btn_modal_wel mt-5">Ver mapa</a>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 mb-3 text-center">
                <div class="single-content_service">
                    <div class="service">
                        <i class="fas fa-file-invoice fa-4x"></i>
                        <h4 class="title_services">Facturacion</h4>
                        <p class="description_services">genera y descarga tu Factura Electrónica.</p>
                        <a href="http://picaroscomer.dyndns.org:81/WebflecHJ/facturacion_01.aspx" target="_blank"
                            class="btn_modal_wel mt-5">Facturar</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 mb-3 text-center">
                <div class="single-content_service">
                    <div class="service">
                        <i class="fas fa-motorcycle fa-4x"></i>
                        <h4 class="title_services">Servicio a domicilio</h4>
                        <p class="description_services">SuperPlus</p>
                        <a href="" class="btn_modal_wel mt-5" data-toggle="modal" data-target=".bd-example-modal-xl2">Ver
                            mas</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

{{-- SERIVIOSS --}}
@section('title')
    <div class="col-12">
        <div class="testimonial-title">
            <h5>CONOCE</h5>
            <h3>NUESTROS SERVICIOS</h3>
            <hr class="style1">
        </div>
    </div>
@endsection
<!--TARJETAS SERVICIOS-->
@section('cards')
    <div data-aos="fade-up" class="container_cards">
        <div class="row_cards">
            @foreach ($servicios as $servicios)                            
            <div class="col-md-3 col-sm-6 mb-3">
                <div class="single-content">
                    <img src="{{ asset('/img/servicios/' . $servicios->image) }}" alt="ServiciosPlus">
                    <div class="text-content">
                        <h3>{{$servicios->name}}</h3>
                        <hr class="style2">
                        <h5>{{$servicios->description}}</h5>
                    </div>
                </div>
            </div>  
            @endforeach        
        </div>
    </div>
@endsection

{{-- PRODUCTOS NUEVOS --}}
@section('title5')
<div class="col-12">
    <div class="testimonial-title">
        <h5>CONOCE</h5>
        <h3>NUESTROS PRODUCTOS NUEVOS</h3>
        <hr class="style1">
    </div>
</div>
@endsection
@section('Proveedores')
    {{-- <div class="container_prove">
        <div class="carousel_prove">
            <div class="buttons_prove">
                <span class="prev"> &#8592; </span>
                <span class="next"> &#8594; </span>
            </div>
            @foreach ($proveedores as $proveedore)
                <div data-aos="fade-up" class="item">
                    <div class="content">
                        <h1>{{ $proveedore->name }}</h1>
                        <hr class="">
                <h5 style=" color: white">Dale un plus a tu dia!!</h5>
                    </div>
                    <div data-aos="fade-up" class="img">
                        <img src="{{ asset('/img/proveedore/' . $proveedore->image) }}" alt="">
                    </div>
                </div>
            @endforeach
        </div>
    </div> --}}

    <div data-aos="fade-up" class="container-fluid">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 text-center">
                <div class="col-lg-10 pl-5">                   
                    <div class="m-0 vh-10 row justify-content-center">
                        <a href="#">
                            <img class="imgtamaño" src="{{ asset('dist/img/logo.png') }}" alt="SuperPlus">
                        </a> 
                    </div>        
                    @foreach ($texproduct as $texproduct)                                            
                    <div class="service-content">                        
                        <h1>{!!$texproduct->texto!!}</h1>
                    </div>
                    @endforeach          
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 text-center">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        @php $i = 1 @endphp
                        @foreach ($productos as $productos)
                            <div class="carousel-item {{ $i == '1' ? 'active' : '' }}">
                                @php $i++ @endphp
                                <img class="d-block w-100" src="{{ asset('/img/productos/' . $productos->image) }}"
                                    alt="First slide">
                                {{-- <div class="carousel-caption d-none d-md-block">
                                    <h5 style="color: black"><strong>{{ $proveedore->name }}</strong></h5>
                                    <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                                  </div> --}}
                                <h5 style="color: black"><strong>{{ $productos->name }}</strong></h5>
                                <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                            </div>
                        @endforeach
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>

        </div>
    </div>
@endsection

{{-- MARCA PROVEDORES --}}
@section('title2')
    <div class="col-12">
        <div class="testimonial-title">
            <h5>CONOCE</h5>
            <h3>NUESTROS ...</h3>
            <hr class="style1">
        </div>
    </div>
@endsection

@section('products')
    {{-- <div class="producst_body autoplay ">
    @foreach ($productos as $producto)
    <div class="wrapper">
        <div class="container">
            <img class="top"src="{{asset('/img/productos/'.$producto->image)}}" alt="{{$producto->image}}">
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
<div class="slider">
	<div class="slide-track">
        @foreach ($proveedores as $proveedores)
        <div class="slide">
			<img src="{{ asset('/img/proveedore/'.$proveedores->image) }}" height="100" width="250" alt="{{$proveedores->image}}" />
		</div>
        @endforeach	
	</div>
</div>
@endsection

@section('footer')
    <div data-aos="fade-up" class="footer-dark">
        <footer>
            <footer class="new_footer_area bg_color">
                <div class="box">
                    {{-- <div class="box-sm red"></div> --}}
                    {{-- <div class="box-sm orange"></div> --}}
                    <div class="box-sm yellow "></div>
                    {{-- <div class="box-sm green "></div> --}}
                    <div class="box-sm blue "></div>
                    {{-- <div class="box-sm purple"></div> --}}
                    <div class="box-sm yellow "></div>
                    <div class="box-sm blue "></div>
                    <div class="box-sm yellow "></div>
                    <div class="box-sm blue "></div>
                    <div class="box-sm yellow "></div>
                    <div class="box-sm blue "></div>
                </div>
                <div style="padding-top: 0px" class="new_footer_top">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4 col-md-12">
                                <div class="f_widget company_widget wow fadeInLeft" data-wow-delay="0.2s"
                                    style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInLeft;">
                                    <h3 align="center" lass="f-title f_600 t_color f_size_18"><strong>SuperPlus</strong>
                                    </h3>
                                    <h4><strong>Quienes somos?</strong></h4>
                                    <hr class="style6">
                                    <p style="text-align: justify">
                                        <strong>Brindar a nuestros Instalacion una gran variedad de productos y servicios las
                                            24 horas del día,
                                            ofreciéndoles siempre nuestro plus con la calidad de nuestro servicio</strong>.
                                    </p>
                                    <div class="col-md-12 py-5">
                                        <div class="mb-5 flex-center">

                                            <!-- Facebook -->
                                            <a class="fb-ic">
                                                <i class="fab fa-facebook-f fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                                            </a>
                                            <!-- Google +-->
                                            <a class="gplus-ic">
                                                <i class="fab fa-google-plus-g fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                                            </a>

                                            <!--Instagram-->
                                            <a class="ins-ic">
                                                <i class="fab fa-instagram fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-12">
                                <div class="embed-container sombra">
                                    <iframe src="https://www.7-eleven.com.mx/" frameborder="0" allowfullscreen></iframe>
                                </div>

                            </div>
                            {{-- <div class="col-lg-3 col-md-6">
                            <div class="f_widget about-widget pl_70 wow fadeInLeft" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInLeft;">
                                <h3 class="f-title f_600 t_color f_size_18">Help</h3>
                                <ul class="list-unstyled f_list">
                                    <li><a href="#">FAQ</a></li>
                                    <li><a href="#">Term &amp; conditions</a></li>
                                    <li><a href="#">Reporting</a></li>
                                    <li><a href="#">Documentation</a></li>
                                    <li><a href="#">Support Policy</a></li>
                                    <li><a href="#">Privacy</a></li>
                                </ul>
                            </div>
                        </div> --}}
                            <div style="padding-top: 30px" class="col-lg-4 col-md-12">
                                {{-- <iframe class="sombra" src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fsuperplus.picaros%2F&tabs=timeline&width=340&height=500&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=618142002368065" width="325px" height="500px" style="border:none;overflow:hidden" style="height:500px;width:325px;" title="Iframe Example"></iframe> --}}
                                <div class="embed-container sombra">
                                    <iframe
                                        src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fsuperplus.picaros%2F&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=3713982148707397"
                                        frameborder="0" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
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
@endsection

<!--MODALS-->
@section('modals')
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
                            popou_img"src="{{ asset('img/pagos.jpg') }}" alt="">
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
    <div class="modal fade bd-example-modal-xl2" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div id="contenedor" class="row_p">
                <div id="naranja" class="">
                <img class=" popou_img"src="{{ asset('img/entrega.png') }}"
                    alt="">
                </div>
                <div id="verde" class="content_pagos">
                    <h2 style="color: black" class=" frm_pagos text-center">SUPERPLUS A DOMICILIO</h2>
                    <hr class="style3">
                    <h5>{{-- Primero se envía la cotización al cliente, luego de ello el cliente envía la orden de compra por medio de nuestro correo y a las 24 horas 
                    se le realiza el envío de los productos dentro de Lima sin costo alguno, a provincia se aplica un adicional. --}}</h5>
                </div>
            </div>
        </div>
    </div>
    {{-- promociones en modal --}}
    <div class="modal fade modal fade bd-example-modal-x3" tabindex="-1" role="dialog"
        aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="text-center modal-title" id="exampleModalCenterTitle">OFERTAS DEL DÍA</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="principal">

                    <div data-aos="fade-up" class="container_cards">
                        <div class="row_cards">
                            @foreach ($ofertas as $oferta)
                                <div class="col-md-3 col-sm-6 mb-3">
                                    <div class="single-content">
                                        <img class="popou_img" src="{{ asset('/img/ofertas/' . $oferta->image) }}"
                                            alt="{{ $oferta->image }}">
                                        <div class="text-content">
                                            <h3><strong>
                                                    <h2 class=" frm_pagos text-center">{{ $oferta->titulo }}</h2>
                                                </strong> </h3>
                                            {{-- <hr class="style2"> --}}
                                            {{-- <h5>todas las compañias</h5> --}}
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>


                {{-- <div class="principal">
                @foreach ($ofertas as $oferta)
                <div id="contenedor" class="row_p">
                    <div id="naranja" class="">
                        <img class="popou_img"src="{{asset('/img/ofertas/'.$oferta->image)}}" alt="{{$oferta->image}}">
                    </div>       
                    <div id="verde" class="content_pagos"> 
                        <strong><h2 class=" frm_pagos text-center">{{$oferta->titulo}}</h2></strong>  
                        <br>    
                        <h4>{{$oferta->texto}}</h4>  
                        <button type="button" class="btnwssp btn btn-outline-success btn-lg">
                            <a target="none" href="https://wa.me/51987654321?text=Hola%2CEstoy+interesad%40+en+la+oferta%3A+{{$oferta->titulo}}">
                               Preguntar
                            </a>
                        </button> 
                    </div>
                </div>
                @endforeach  
            </div> --}}
            </div>
        </div>
        <div class='icon-scroll'></div>
        <h6 style="color: white" class="text-center">Si hay más promociones por favor siga bajando</h6>
    </div>
@endsection


{{-- SECCION DE PLUGIN DE WHATSAPP --}}
@section('whats')
    <div id='whatsapp-chat' class='hide'>
        <div class='header-chat'>
            <div align="center" class='head-home'>
                <h3>SuperPlus</h3>
                <div class='info-avatar'><img
                        src='https://sistemadecotizaciones.files.wordpress.com/2020/08/supportmale.png' /></div>

            </div>

            <div class='get-new'>
                {{-- <div id='get-label'>Soporte</div> --}}
                <div id='get-nama'>Servicio al cliente</div>

            </div>
        </div>

        <div class='start-chat'>
            <div class='first-msg'><span>DALE UN PLUS A TU DIA!</span></div>
            <div class='first-msg'><span>¡Hola! ¿En que podemos ayudarte?</span></div>
            <div class='blanter-msg'><textarea id='chat-input' placeholder='Escribe un mensaje' maxlength='120'
                    row='1'></textarea>
                <a href='#' onclick="enviar_mensaje();" id='send-it'>Enviar</a>
            </div>
        </div>
        <div id='get-number'>529532293052</div><a class='close-chat' onclick="cerrar_chat();" href='#'>×</a>
    </div>


    <a class='blantershow-chat' onclick="mostrar_chat();" href='#' title='Show Chat'><svg width="20" viewBox="0 0 24 24">
            <defs />
            <path fill="#eceff1"
                d="M20.5 3.4A12.1 12.1 0 0012 0 12 12 0 001.7 17.8L0 24l6.3-1.7c2.8 1.5 5 1.4 5.8 1.5a12 12 0 008.4-20.3z" />
            <path fill="#4caf50"
                d="M12 21.8c-3.1 0-5.2-1.6-5.4-1.6l-3.7 1 1-3.7-.3-.4A9.9 9.9 0 012.1 12a10 10 0 0117-7 9.9 9.9 0 01-7 16.9z" />
            <path fill="#fafafa"
                d="M17.5 14.3c-.3 0-1.8-.8-2-.9-.7-.2-.5 0-1.7 1.3-.1.2-.3.2-.6.1s-1.3-.5-2.4-1.5a9 9 0 01-1.7-2c-.3-.6.4-.6 1-1.7l-.1-.5-1-2.2c-.2-.6-.4-.5-.6-.5-.6 0-1 0-1.4.3-1.6 1.8-1.2 3.6.2 5.6 2.7 3.5 4.2 4.2 6.8 5 .7.3 1.4.3 1.9.2.6 0 1.7-.7 2-1.4.3-.7.3-1.3.2-1.4-.1-.2-.3-.3-.6-.4z" />
        </svg>
        Chatea con nosotros</a>


    <script>
        function enviar_mensaje() {
            var a = document.getElementById("chat-input");
            if ("" != a.value) {
                var b = document.getElementById("get-number").innerHTML,
                    c = document.getElementById("chat-input").value,
                    d = "https://web.whatsapp.com/send",
                    e = b,
                    f = "&text=" + c;
                if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) var d =
                    "whatsapp://send";
                var g = d + "?phone=" + e + f;
                window.open(g, "_blank");
            }
        }
        const whatsapp_chat = document.getElementById("whatsapp-chat");

        function cerrar_chat() {
            whatsapp_chat.classList.add("hide");
            whatsapp_chat.classList.remove("show");

        }

        function mostrar_chat() {
            whatsapp_chat.classList.add("show");
            whatsapp_chat.classList.remove("hide");
        }
    </script>

@endsection
