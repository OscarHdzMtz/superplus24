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
    <header>
        <a href="#" class="logo">
            {{-- <h2 style="color: white" class="imgtamaño">SUPERPLUS</h2> --}}
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
               <!--IMPORTANTE--><li><a href="http://picaroscomer.dyndns.org:81/WebflecHJ/facturacion_01.aspx" target="_blank">FACTURACION</a></li>
            </ul>
        </nav>
        <div class="clearfix"></div>
    </header>
@endsection
@section('banner')
<div class="banner">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="hero-text">
                        {{-- <h4>PAGINA <span>WEB</span></h4> --}}
						<br>
						<br>
                        <h1 class="tipeo3">promociones</h1>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection 
@section('footer')
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
<footer class="footer">
   
</footer>
@endsection
@section('title')
<div class="col-12">
    <h1 align="center" style="color: #003baa" class="tipeo2"><span class="type"></span></h1>
		<div class="testimonial-title">
			<h5>CONOCE</h5>
            <h3>NUESTRAS PROMOCIONES</h3>
            <hr class="style6">
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
