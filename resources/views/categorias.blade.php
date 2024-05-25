@extends('layouts.fronted.categorias')
@section('redes')
<div class="red">
    
</div>
@endsection
@section('navbar_top')
<div class="header-top">
    <div class="container d-flex justify-content-between">
        <div class="d-inline-flex ml-auto">
            <div class="headcont">
                <i class="fas fa-2x fa-mobile-alt messenge"></i>
                +51 999-999-999
            </div>
            <div class="headcont">
                <i class="fas fa-2x fa-envelope messenge"></i>
                Jose Luis Diaz
            </div>
        </div>
    </div>
</div>
@endsection
@section('navbar')
    <header>
    <a href="#" class="logo">
        <h2 style="color: white" class="imgtamaño">SUPERPLUS</h2>
        <!--<img  class="imgtamaño" src="{{ asset('img/jldm.png')}}" alt="">-->
    </a>
    <div class="menu-toggle" ></div>
        <nav>
            <ul>
                <li><a href="/" class="active">INICIO</a></li>
                <li><a href="{{ url('/productos')}}">PROMOCIONES</a></li>
                <li><a href="{{ url('/productos')}}">PRODUCTOS</a></li>
                <li><a href="{{ url('/nosotros')}}">NOSOTROS</a></li>
                <li><a href="{{ url('/contact')}}">CONTÁCTENOS</a></li>
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
                        <h4>PAGINA <span>WEB</span></h4>
					    <br><br>
                        <h1 class="tipeo1">VARIEDAD DE PRODUCTOS</h1>
                        <h1 class="tipeo2"><span class="type"></span></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection 
@section('products')
<div class="main">
    <h1 class="title_category">Escoja una de nuestras categorías</h1>
    <hr class="style4">
    <ul class="cards">
        @foreach($categorias as $categoria)
      <li class="cards_item">
        <div class="card">
          <div class="card_image"><img  src="{{ asset('')}}" height="100"></div>
          <div class="card_content">
            <h1 class="card_title">{{$categoria->name}}</h1>
            <hr>
            <p class="card_text">{{$categoria->descripcion}}</p> 
            <a class="btn card_btn" href="{{ route('searchCategory' , $categoria->slug)}}"> 
                Productos
            </a>
          </div>
        </div>
      </li>
      @endforeach
    </ul>
  </div>
@endsection

@section('footer')
<footer class="footer">
    <div class="l-footer">
        <!--<img  class="footer_img" src="{{asset('img/SuperPlus.png')}}" alt="">-->
        <h2 style="color: white" class="footer_img"></h2>
  
    </div>
        <ul class="r-footer">
            <li>
            <h2>Social</h2>
                <ul class="box">
                    <li class="button_social">
                        <i class="fab mr-2 fa-facebook"></i>
                        <a href="" target="_blank">Facebook</a>
                    </li>
                    <li class="button_social">
                        <i class="fab mr-2 fa-twitter"></i>
                        <a href="#">Twitter</a>
                    </li>
                    <li class="button_social">
                        <i class="fab mr-2 fa-instagram"></i>
                        <a href="" target="_blank">Instagram</a>
                    </li>
                    <li class="button_social">
                        <i class="fab mr-2 fa-linkedin-in"></i>
                        <a href="" target="_blank">Linkedin</a>
                    </li>
                </ul>
            </li>
            <li class="features">
            <h2>Información</h2>
            <ul class="box">
                <li><a href="#">Políticas de Privacidad</a></li>
                <li><a href="#">Trabaja con nosotros</a></li>
            </ul>
            </li>
            <li class="features">
                <h2>Procedimiento de Pagos</h2>
                <ul class="box">
                    <li><a type="button" href="#">Ver mas</a></li>
                </ul>
                </li>
        </ul>
        <div class="b-footer">
            <p>Todos los Derechos reservados by <a href="" target="_blank">©SuperPlus-2020</a></p>
        </div>
</footer>
@endsection