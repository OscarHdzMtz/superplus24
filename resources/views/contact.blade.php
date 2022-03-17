@extends('layouts.fronted.contact')
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
                <li class="nav-item active">
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
    {{-- <header>
    <a href="#" class="logo">        
        <img  class="imgtamaño" src="{{ asset('dist/img/logo.png')}}" alt="SuperPlus">
    </a>
    <div class="menu-toggle" ></div>
        <nav>
         
            <ul>
                <li><a href="/" >INICIO</a></li>
                <li><a href="{{ url('/promociones')}}">PROMOCIONES</a></li>
                <li><a href="{{ url('/')}}">BOLSA DE TRABAJO</a></li>
                <li><a href="{{ url('/nosotros')}}">NOSOTROS</a></li>
                <li><a href="{{ url('/contact')}}" class="active">CONTÁCTENOS</a></li>
             <li><a href="http://picaroscomer.dyndns.org:81/WebflecHJ/facturacion_01.aspx" target="_blank">FACTURACION</a></li>
            </ul>
        </nav>
        <div class="clearfix"></div>
    </header> --}}
@endsection
@section('banner')
<div id="carouselExampleSlidesOnly" class="banner_nosotros" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="{{ asset('/img/estaticos/contactanos.png') }}"
                alt="First slide">
        </div>
    </div>
</div>
@endsection
@section('cards_service')
    {{-- <div class="container_cards">
    <h1 align="center" class="textmov"><span class="type"></span></h1>
    <div class="row_cards">
        <div class="col-md-3 col-sm-6 mb-3 text-center">
            <div class="single-content_service">
                <div class="service">
                    <i class="fas fa-percent fa-4x"></i>
                    <h4 class="title_services">Promociones</h4>
                    <p class="description_services">Ofertas especiales</p><br>
                    <!--<a href="" class="btn_modal_wel mt-5" data-toggle="modal" data-target=".bd-example-modal-xl">Ver mas</a>-->
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 mb-3 text-center">
            <div class="single-content_service">
                <div class="service">
                    <i class="fas fa-shopping-cart fa-4x"></i>
                    <h4 class="title_services">Buscador de Plus</h4>
                    <p class="description_services">Localiza tu plus mas cercano</p><br>
                    <!--<a href="" class="btn_modal_wel mt-5" data-toggle="modal" data-target=".bd-example-modal-xl2">Ver mas</a>-->  
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 mb-3 text-center">
            <div class="single-content_service">
                <div class="service">
                    <i class="fas fa-user-check fa-4x"></i>
                    <h4 class="title_services">Facturacion Instalacion</h4>
                    <p class="description_services">Genera y descarga tu Factura Electronica</p>
                    <!--<a href="{{ url('/nosotros')}}" class="btn_modal_wel mt-5">Ver mas</a>-->
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 mb-3 text-center">
            <div class="single-content_service">
                <div class="service">
                    <i class="fas fa-thumbs-up fa-4x"></i>
                    <h4 class="title_services">Multiples Formas de Pago</h4>
                    <p class="description_services">Diferentes tipos de pago</p>
                    <!--<a href="" class="btn_modal_wel mt-5" data-toggle="modal" data-target=".bd-example-modal-xl">Ver mas</a>-->          
                </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection
@section('Content_messege')
    <div class="conatiner">
        <div class="form">
            <form action="{{ route('contact.store') }}" method="POST">
                @csrf
                <div class="contact-form">
                    <form action="" autocomplete="off">
                        {{-- <h3 class="contact_tittle text-center">EN<img style="margin-top: -10px" src="{{ asset('/img/logo.png') }}" alt="" width="160" height="55">TU OPINIÓN ES IMPORTANTE</h3> --}}
                        {{-- <hr style="margin: 0 auto" class="style1"> --}}
                        <div class="input-container ">
                            <input type="text" name="name" class="contact_input" placeholder="Nombre" required>
                        </div>
                        <div class="input-container">
                            {{-- <input id="" type="email" class="form-control contact_input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus> --}}
                            <input type="email" name="email" class="contact_input" placeholder="Email" required
                                autocomplete="email">
                        </div>
                        <div class="input-container">
                            <input type="tel" name="celular" class="contact_input" placeholder="Celular" required>
                        </div>
                        <div class="input-container">
                            <input type="text" name="estado" class="contact_input" placeholder="Estado">
                        </div>
                        <div class="input-container">
                            <textarea name="mensaje" class="contact_input" id="" placeholder="Mensaje"
                                onkeyup="countChars(this);" required></textarea>
                            <p id="charNum" class="text-success text-center">0 caracteres</p>
                        </div>
                        <input type="submit" value="ENVIAR" class="contact_btn">
                    </form>
                </div>
            </form>
            <div class="contact-info">
                {{-- <h3 class="contact_tittle">ESTAMOS UBICADOS EN</h3> --}}
                <p class="contact_text">
                </p>
                <div class="estilocontact text-center justify-content-md-center">
                    <ul>
                        <li>
                            <a href="instragram" class="" target="_blank">
                                <span class="fa-stack fa-lg fa-2x">
                                    <span class="fa fa-circle-thin fa-stack-2x prueba"></span>
                                    <div class="icono">
                                        <span class="fa fa-facebook fa-stack-1x"></span>
                                    </div>
                                </span>
                                <h5>SuperPlus 24h Contigo</h5></a>
                        </li>
                        <li>
                            <a href="instragram" class="" target="_blank">
                                <span class="fa-stack fa-lg fa-2x">
                                    <span class="fa fa-circle-thin fa-stack-2x prueba"></span>
                                    <div class="icono">
                                        <span class="fa fa-whatsapp fa-stack-1x"></span>
                                    </div>
                                </span>
                                <h5>953 133 9127</h5></a>
                        </li>                      
                        <ul>
                </div>
                <h3 class="text-center contact_tittle">O escanea el codigo</h3>
                <img src="{{ asset('/img/estaticos/codigoqr.png') }}" alt="">               
            </div>
        </div>
    </div>
    @if (session('info'))
        <script>
            alert("{{ session('info') }}");
        </script>
    @endif
@endsection

@section('footer')
    <div style="margin-top: -5px" data-aos="fade-up" class="footer-dark">
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
                            <li class="list-inline-item"><a href="/nosotros">Nosotros</a></li>                            
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
