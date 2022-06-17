@extends('layouts.fronted.promociones')
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
{{-- <div class="header-top">
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
</div> --}}
{{-- <div data-aos="zoom-in-down" class="header-top">
    <img class="imgnavbartop" src="{{ asset('img/estaticos/1.png') }}" alt="SuperPlus">        
</div>  --}}
@endsection
@section('navbar')
<div class="img-fixed">
    <div {{-- data-aos="zoom-in-down" --}}>
        <img class="imgnavbartop" src="{{ asset('img/estaticos/navbar.jpg') }}" alt="SuperPlus">
    </div>
<nav class="navbar sticky-top navbar-expand-custom navbar-mainbg">
    {{-- <a href="#" class="logo">            
        <img  class="imgtamaño" src="{{ asset('dist/img/logo.png')}}" alt="SuperPlus">
    </a> --}}
    <a href="#" class="logo">            
        <img  class="imgtamaño">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <i class="fas fa-bars text-white"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <div class="hori-selector"><div class="left"></div><div class="right"></div></div>
            <li class="nav-item">
                <a href="/" class="nav-link" href="javascript:void(0);"><i class="fas fa-tachometer-alt"></i>INICIO</a>
            </li>
            <li class="nav-item active">
                <a href="/promociones" class="nav-link" href="javascript:void(0);"><i class="fas fa-percentage"></i>PROMOCIONES</a>
            </li>
            <li class="nav-item">
                <a href="/nosotros" class="nav-link" href="javascript:void(1);"><i class="fas fa-check-circle"></i>NOSOTROS</a>
            </li>
            <li class="nav-item">
                <a href="/empleo" class="nav-link" href="javascript:void(0);"><i class="fas fa-building"></i>BOLSA DE TRABAJO</a>
            </li>          
            <li class="nav-item">
                <a href="/contact" class="nav-link" href="javascript:void(0);"><i class="fas fa-phone"></i>CONTACTANOS</a>
            </li>   
            <li class="nav-item">
                <a href="https://picaroscomer.dyndns.org/WebFlec/facturacion_01.aspx" target="_blank" class="nav-link" href="javascript:void(0);"><i class="far fa-copy"></i>FACTURACION</a>
            </li>
        </ul>
    </div>
</nav>
</div>
        {{-- NAVBAR QUE ESTABA ANTES --}}
    {{-- <header>
        <a href="#" class="logo">            
            <img  class="imgtamaño" src="{{ asset('dist/img/logo.png')}}" alt="SuperPlus">
        </a>
    <div class="menu-toggle" ></div>
        <nav>
            <ul>
                <li><a href="/">INICIO</a></li>
                <li><a href="{{ url('/promociones')}}" class="active">PROMOCIONES</a></li>
                <li><a href="{{ url('/')}}">BOLSA DE TRABAJO</a></li>
                <li><a href="{{ url('/nosotros')}}">NOSOTROS</a></li>
                <li><a href="{{ url('/')}}">CONTÁCTENOS</a></li>
              <li><a href="http://picaroscomer.dyndns.org:81/WebflecHJ/facturacion_01.aspx" target="_blank">FACTURACION</a></li>
            </ul>
        </nav>
        <div class="clearfix"></div>
    </header> --}}
@endsection
@section('banner')
{{-- <div class="banner">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="hero-text">                        
						<br>
						<br>
                        <h1 class="tipeo2">PROMOCIONES</h1>
                        
                    </div>
                </div>
            </div>
        </div>
    </div> --}}    
    <div class="sombraslider">
        <div id="carouselExampleControls" class="carousel slide carousel-fade" data-ride="carousel">                                       
            <div class="carousel-inner">
                @php $i = 1 @endphp
                @foreach ($slider as $slider)
                    <div class="carousel-item {{ $i == '1' ? 'active' : '' }}">
                        @php $i++ @endphp
                        <img class="d-block w-100" src="{{ asset('/img/slider/' . $slider->image) }}"
                            alt="First slide">
                            @if ($slider->description <> null)
                            <div style="background-color: rgba(0, 0, 0, .5)" class="carousel-caption d-none d-md-block">
                                <h5 style="color: white"><strong>{!! $slider->description !!}</strong></h5>
                                {{-- <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p> --}}
                              </div> 
                            @endif                                                                      
                    </div>
                @endforeach             
            </div>            
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

    </div>
@endsection 

@section('title')
<div class="col-12">
    <h1 align="center" class="textmov"><span class="type"></span></h1>
		<div class="testimonial-title">
			<h5>CONOCE</h5>
            <h3>NUESTRAS PROMOCIONES</h3>
            <hr class="style6">
	    </div>
</div>
<div {{-- data-aos="fade-up"  --}}class="container_cards_promo">    
    <div class="row_cards_promo">
        @foreach($promo as $oferta)
        <div class="col-md-3 col-sm-6 mb-3">
            <div data-aos="zoom-in" class="{{-- single-contentpromo --}}"> {{-- la parte comentada borde la tarjeta y le pone sombra --}}
                <img class="popou_img_promo"src="{{asset('/img/ofertas/'.$oferta->image)}}" alt="{{$oferta->image}}">
                <div class="text-contentpromo">
                    {{-- <h3><strong><h2 class=" frm_pagos text-center">{{$oferta->titulo}}</h2></strong> </h3> --}}
                    <h3><strong><h2 class="frm_pagos_promo text-center">{{$oferta->texto}}</h2></strong> </h3>
                    {{-- <hr class="style2"> --}}
                    {{-- <h5>todas las compañias</h5> --}}
                </div>
            </div>
        </div>
        @endforeach 
    </div>
</div>

{{-- <div class="principal">
    @foreach($ofertas as $oferta)
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
@endsection


@section('footer')
<div class="footer-dark">    
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
              <div style="margin-top: -60px" class="footer-basic">
                <footer data-aos="fade-right" >
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
                        <li class="list-inline-item"><a href="/empleo">Bolsa de trabajo</a></li>
                        <li class="list-inline-item"><a href="/nosotros">Nosotros</a></li>
                        <li class="list-inline-item"><a href="/contact">Contáctanos</a></li>
                        <li class="list-inline-item"><a href="#">Política de privacidad</a></li>
                    </ul>
                    <p class="copyright">¡DALE UN PLUS A TU DIA!</p>
                </footer>
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