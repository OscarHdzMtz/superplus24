@extends('layouts.fronted.empleo')
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
        <img  class="imgtamaño" src="{{ asset('dist/img/logo.png')}}" alt="SuperPlus">
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
            <li class="nav-item active">
                <a href="/" class="nav-link" href="javascript:void(0);"><i class="fas fa-building"></i>BOLSA DE TRABAJO</a>
            </li>          
            <li class="nav-item">
                <a href="/contact" class="nav-link" href="javascript:void(0);"><i class="fas fa-phone"></i>CONTACTENOS</a>
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
@section('banner')
<div class="banner">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="hero-text">
                        {{-- <h4>PAGINA <span>WEB</span></h4> --}}
						<br>
						<br>
                        <h1 class="textempleo">¡UNETE A NUESTRO EQUIPO DE TRABAJO</h1>                        
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection 
@section('image')
<section class="bg-grey" id="service">
    <div class="container">
        <div class="row ">
            <div class="col-lg-4">
                <div class="service-img">
                    <img src="{{ asset('img/clientes/avatar.png')}}" alt="" class="img-fluid">
                </div>
            </div>

            <div class="col-lg-6 pl-4">
                <div class="service-content">
                    <h1>Forma Parte de una de las empresas mas importantes de la region Mixteca</h1>
                    <p>We compare hundreds of leading products and plans across many categories to bring you the best value for money.</p>
                </div>               
            </div>
        </div>
    </div>
</section>
<section class="pt-5 service-wrap">
    <div class="container">
        <div class="row ">
            <div class="col-lg-8 offset-lg-4">
                <div class="carousel slide " id="service-carousel" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="service-block media">
                                            <div class="service-icon">
                                                <i class="ti-reload"></i>
                                            </div>
                                            <div class="service-inner-content media-body">
                                                <h4>Backup System</h4>
                                                <p>Our team are experts in matching you with the right provider.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="service-block media">
                                            <div class="service-icon">
                                                <i class="ti-cloud"></i>
                                            </div>
                                            <div class="service-inner-content media-body">
                                                <h4>Cloud Hosting</h4>
                                                <p>Our team are experts in matching you with the right provider.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="service-block media">
                                            <div class="service-icon">
                                                <i class="ti-world"></i>
                                            </div>
                                            <div class="service-inner-content media-body">
                                                <h4>Web hosting</h4>
                                                <p>Our team are experts in matching you with the right provider.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="service-block media">
                                            <div class="service-icon">
                                                <i class="ti-server"></i>
                                            </div>
                                            <div class="service-inner-content media-body">
                                                <h4>Office Cloud</h4>
                                                <p>Our team are experts in matching you with the right provider.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <p class="pl-3">Want to know more about this? <a href="#">Contact us</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('body')
  <!-- section Counter Start -->
<body onload="load()">
    <p>
        {{-- <div class="d-flex justify-content-center fs-1 fw-bold textcount2 ">Se parte de una de las empresas mas importantes de la region Mixteca</div> --}}
        </p>
    <p>
    <div class="containercount">      
       <div class="row">
          <div class="col-sm">
            <p class="textcount1">Con mas de:</p>
             <p style="color: blue" id='0101' class="fs-2 numcount">0</p>
             <p class="textcount2">Sucursales</p>
          </div>
          <div class="col-sm">
            <p class="textcount1">Presentes en mas de:</p>
             <p  style="color: blue" id='0102' class="fs-2 numcount">0</p>
             <p class="textcount2">Lugares</p>
          </div>
          <div class="col-sm">
            <p class="textcount1">Con mas de:</p>
             <p style="color: blue" class="fs-2 numcount"><span id='0103'>0</span></p>
             <p class="textcount2">Colaboradores</p>
          </div>
       </div>
    </div>
    </p>
</body>
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