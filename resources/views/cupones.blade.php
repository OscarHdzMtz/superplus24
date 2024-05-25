@extends('layouts.fronted.cupones')
@section('redes')
    <div class="red">
        <div id="facebook">
            <a href="https://www.facebook.com/superplus24horas/" target="none" class="fab fa-facebook-f "></a>
        </div>
        <div id="instagram">
            <a href="https://www.instagram.com/superplus24hrs/" target="none" class="fab fa-instagram"></a>
        </div>
        <div id="whatsaap">
            <a href="https://vm.tiktok.com/ZMNA67fEu/" target="none" class="fab fa-tiktok"></a>
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
                                class="fas fa-phone"></i>CONTACTANOS</a>
                    </li>
                    <li class="nav-item">
                        <a href="/facturacion" class="nav-link" href="javascript:void(0);"><i
                                class="far fa-copy"></i>FACTURACION</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
@endsection
@section('banner')
@endsection

@section('title')
    <div class="col-12">
        <h1 align="center" class="textmov"><span class="type"></span></h1>
        <div class="testimonial-title">            
            <h3>CUPONES</h3>
            <hr class="style6">
        </div>
    </div>
    <div data-aos="fade-up" class="container_cards_promo">
        <div class="row_cards_promo">
            @foreach ($cupones as $cupon)
                <div class="col-md-3 col-sm-6 mb-3">
                    <div data-aos="zoom-in" class="{{-- single-contentpromo --}} clic_abre_modal mx-auto"> {{-- la parte comentada borde la tarjeta y le pone sombra --}}
                        <img id="get_image_promo" class="popou_img_promo mb-0"src="{{ asset('/img/cupones/' . $cupon->image) }}"
                            alt="{{ $cupon->image }}">                            
                        <div class="text-contentpromo">
                        </div>                        
                        {!! Form::open([
                            'action' => ['GenerarCuponesClientesController@update', $cupon->id],
                            'method' => 'PATCH',
                            'files' => 'true',
                            'style' => 'margin-top: -20px',
                        ]) !!}
                        {{ Form::token() }}
                        <button onclick="preloaderCupon()" type="submit" class="btn_modal_cupon btn-block">GENERAR
                            CUPON</button>                           
                        {!! Form::close() !!}
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    {{-- VALIDAMOS SI LA VARIABLE DE SESION CONTIENE VALOR CUPON Y LOS MOSTRAMOS EN UN MODAL --}}
    @if (session('cupongenerado'))
    @include('modalcupon.viewmodalcupon')        
    @endif   

    @if (session('info'))
    @include('modalcupon.errorModalCupon')   
    @endif

    @if (empty($statusCookie))
    @include('modals.cookies')   
    @endif

    @include('modalPoliticaPrivacidad')
@endsection


@section('footer')
    <div style="margin-top: 30px" class="footer-dark">
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
                    <img style="margin-top: -30px; margin-left:-20px; margin-right: -20px"
                        src="{{ asset('img/logop.png') }}" width="90px" height="55px" alt="">
                    <div class="box-sm yellow "></div>
                    <div class="box-sm yellow "></div>
                    <div class="box-sm yellow "></div>
                    <div class="box-sm yellow "></div>
                </div>
                <div style="margin-top: -60px" class="footer-basic">
                    <footer data-aos="fade-right">
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
                            <li class="list-inline-item"><a href="/empleo">Bolsa de trabajo</a></li>
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
        </footer>
    </div>
    {{-- @include('modalPoliticaPrivacidad') --}}
    {{-- <footer class="footer">
   
</footer> --}}
@endsection
<!-- Button trigger modal -->
