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
            <li class="nav-item">
                <a href="/promociones" class="nav-link" href="javascript:void(0);"><i class="fas fa-percentage"></i>PROMOCIONES</a>
            </li>
            <li class="nav-item active">
                <a href="/nosotros" class="nav-link" href="javascript:void(1);"><i class="fas fa-check-circle"></i>NOSOTROS</a>
            </li>
            <li class="nav-item">
                <a href="/empleo" class="nav-link" href="javascript:void(0);"><i class="fas fa-building"></i>BOLSA DE TRABAJO</a>
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
                        <h1 class="tipeo1">SuperPlus</h1>
                        <h1 class="tipeo2"><span class="type"></span></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection 
@section('foda')
{{-- <div class="nosotros_body">
<div class="nosotros_container">
    <div class="nosotros_card">
        <div class="nosotros_imbBx"  data-text="MISION">
            <i class="fas fa-5x fa-question"></i>
        </div>
        <div class="nosotros_content">
            <div>
                <h3 style="text-align: center; color: #003baa"><strong>Nuestra Mision</strong></h3>
                <p style="text-align: justify">
                   <strong>Brindar a nuestros clientes una gran variedad de productos y servicios las 24 horas del día, 
                    ofreciéndoles siempre nuestro plus con la calidad de nuestro servicio.</strong> 
                </p>
            </div>
        </div>
    </div>

    <div class="nosotros_card">
        <div class="nosotros_imbBx" data-text="VISION">
            <i class="fas fa-5x fa-user-friends"></i>
        </div>
        <div class="nosotros_content">
            <div>
                <h3 style="text-align: center; color: #003baa;"><strong>Nuestra Visión</strong></h3>
                <p style="text-align: justify"><strong>Ser la empresa líder en la región Mixteca, en tiendas de conveniencia, incrementando nuestra rentabilidad y competitividad.</strong> 
                </p>
            </div>
        </div>
    </div>

    <div class="nosotros_card">
        <div class="nosotros_imbBx" data-text="VALORES">
            <i class="fas fa-5x fa-chart-bar"></i>
        </div>
        <div class="nosotros_content">
            <div>
                <h3 style="text-align: center; color: #003baa"><strong>Nuestros Valores</strong></h3>
                <ul style="text-align: justify">
                    <li><strong>Puntualidad</strong></li>
                    <li><strong>Responsabilidad</strong></li>
                    <li><strong>Lealtad</strong></li>
                    <li><strong>Liderazgo</strong></li>
                    <li><strong>Compromiso</strong></li>
                    <li><strong>Honestidad</strong></li>
                  </ul>
            </div>
        </div>
    </div>

    <div class="nosotros_card">
        <div class="nosotros_imbBx" data-text="¿Porque escogernos?">
            <i class="fas fa-5x fa-money-bill-wave"></i>
        </div>
        <div class="nosotros_content">
            <div>
                <h3>¿Porque escogernos?</h3>
                <p>
                </p>
            </div>
        </div>
    </div>
</div>
</div> --}}

<div class="container py-5">
    <section style="background: #eeeeee" id="headervalores" class="jumbotron text-center box-shadow">
        <h3 class=""><strong>Nuestra historia</strong></h3>
        <p style="text-align: justify; font-weight: bold; " class="lead"><strong>SUPERPLUS Inicia operaciones el 21 de agosto del 2010 con 1 tienda ubicada en la Col. Sta. Cruz de la Cd. de Huajuapan de León.
            Nuestra denominación social Comercializadora Pícaros de la Mixteca S.A de C.V, y nuestro nombre comercial SUPERPLUS con un horario de atención las 24 horas del día, los 365 días del año
            Ofreciendo a nuestros clientes los mejores productos en el mercado tanto en cerveza, abarrotes, vinos, licores y comida rápida, entre otras.
            Presencia en Huajuapan, Putla, Juxtlahuaca, Tonala, Tamazulapan, Tlaxiaco, Chalcatongo, Mariscala y Nochixtlan, con apertura de expansión a otros lugares.</strong></p>     
   </section>
    <div class="row justify-content-center">
      
      <div class="col-12 col-lg-4">
        <div class="card box-shadow mx-auto my-5" style="width: 20rem;">
          <img src="{{ asset('img/mision.png')}}" class="card-img-top" width="150" height="380" alt="...">
          <div class="card-body">
            {{-- <h5 style="text-align: center" class="card-title">Mision</h5> --}}
            <hr>
            <p style="text-align: justify;font-size: 125%" class="card-text">
                <strong>Brindar a nuestros clientes una gran variedad de productos y servicios las 24 horas del día, ofreciéndoles siempre nuestro plus con la calidad de nuestro servicio.</strong></p>
          </div>
  <svg viewBox="0 0 1440 320"><path fill="#ffffff" fill-opacity="1" d="M0,192L48,197.3C96,203,192,213,288,192C384,171,480,117,576,90.7C672,64,768,64,864,85.3C960,107,1056,149,1152,186.7C1248,224,1344,256,1392,272L1440,288L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
          
        </div>
      </div>
      
      <div class="col-12 col-lg-4">
        <div class="card box-shadow my-5 mx-auto" style="width: 20rem;">
          <img src="{{ asset('img/vision.jpg')}}" class="card-img-top" width="150" height="378" alt="...">
          <div class="card-body">
            {{-- <h5 class="card-title">Vision</h5> --}}
            <hr>
            <p style="text-align: justify;font-size: 125%" class="card-text">
                <strong>Ser la empresa líder en la región Mixteca, en tiendas de conveniencia, incrementando nuestra rentabilidad y competitividad.</strong></p>
          </div>
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffffff" fill-opacity="1" d="M0,64L48,53.3C96,43,192,21,288,58.7C384,96,480,192,576,218.7C672,245,768,203,864,154.7C960,107,1056,53,1152,32C1248,11,1344,21,1392,26.7L1440,32L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>          
        </div>
      </div>
    
      
      <div class="col-12 col-lg-4">
        <div class="card box-shadow mx-auto my-5" style="width: 20rem;">
          <img src="{{ asset('img/valores.jpg')}}" class="card-img-top" width="150" height="380" alt="...">
          <div class="card-body">
            {{-- <h5 class="card-title">Valores</h5> --}}
            <hr>
           <div style="text-align: justify; font-weight: bold; font-size: 125%" class="navlist" >                    
                <ul>
                <li >Puntualidad</li>
                <li>Responsabilidad</li>
                <li>Lealtad</li>
                <li>Liderazgo</li>
                <li>Compromiso</li>
                <li>Honestidad</li>
                </ul>
           </div>
            {{-- <p class="card-text">
                </p> --}}
          </div>
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffffff" fill-opacity="1" d="M0,256L48,256C96,256,192,256,288,245.3C384,235,480,213,576,181.3C672,149,768,107,864,112C960,117,1056,171,1152,186.7C1248,203,1344,181,1392,170.7L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
          
        </div>
  
      </div>
      
    </div>
  </div>

@endsection
@section('clientes')
    <div class="swiper-container">
        <div class="swiper-wrapper">
            @foreach($clientes as $cliente)
            <div class="swiper-slide">
                <img class="client_img text-center"src="{{asset('/img/clientes/'.$cliente->image)}}" alt="{{$cliente->image}}" class="card-img-top">
            </div>
            @endforeach  
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
		<div class="testimonial-title">
			<h5>CONOCE</h5>
            <h3>NUESTRAS INSTALACIONES</h3>
            <hr class="style6">
	    </div>
</div>
@endsection
@section('title2')
<div class="col-12">
		<div class="testimonial-title">
			<h5>CONOCE</h5>
            <h3>MÁS ACERCA DE NOSOTROS</h3>
            <hr class="style6">
	    </div>
</div>
@endsection