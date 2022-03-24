@extends('layouts.fronted.mapa')
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
<div data-aos="zoom-in-down" class="header-top">
    <img class="imgnavbartop" src="{{ asset('img/estaticos/1.png') }}" alt="SuperPlus">        
</div> 
@endsection
@section('navbar')
<nav class="navbar navbar-expand-custom navbar-mainbg">
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
            <li class="nav-item ">
                <a href="/promociones" class="nav-link" href="javascript:void(0);"><i class="fas fa-percentage"></i>PROMOCIONES</a>
            </li>
            <li class="nav-item">
                <a href="/nosotros" class="nav-link" href="javascript:void(1);"><i class="fas fa-check-circle"></i>NOSOTROS</a>
            </li>
            <li class="nav-item">
                <a href="/" class="nav-link" href="javascript:void(0);"><i class="fas fa-building"></i>BOLSA DE TRABAJO</a>
            </li>          
            <li class="nav-item">
                <a href="/contact" class="nav-link" href="javascript:void(0);"><i class="fas fa-phone"></i>CONTACTANOS</a>
            </li>   
            <li class="nav-item">
                <a href="http://picaroscomer.dyndns.org:81/WebflecHJ/facturacion_01.aspx" target="_blank" class="nav-link" href="javascript:void(0);"><i class="far fa-copy"></i>FACTURACION</a>
            </li>
        </ul>
    </div>
</nav>
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

@section('mapa')
    <!--Main layout-->
<main class=" m-0 p-0">
    <div class="container-fluid m-0 p-0">
  
      <!--Google map-->
      <div id="map-container-google-4" class="z-depth-1-half map-container-4" style="height: 500px">
        <iframe src="https://www.google.com/maps/d/embed?mid=1VrGuud3e2ILvDotpbsOQ00uTfnFvAvXA" frameborder="0"
          style="border:0" allowfullscreen></iframe>
      </div>
  
    </div>
  </main>
  <!--Main layout-->
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