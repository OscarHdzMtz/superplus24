@extends('layouts.app')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark"></h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">ajustes</a></li>
                        <li class="breadcrumb-item active">Index</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    @foreach ($getempleo as $setempleo)        
    @include('empleosetting.editempleo')
        @if ($setempleo->label == 'banner')        
            <div id="carouselExampleSlidesOnly" class="banner_nosotros" data-ride="carousel">                
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="{{ asset('/img/empleo/' . $setempleo->image) }}"
                            alt="First slide">
                        <div style="background-color: rgba(0, 0, 0, .5)" class="carousel-caption d-none d-md-block">                           
                        </div>
                    </div>
                </div>               
            </div>
            <div class="card-footer border-info">
                <a>
                    <button type="button" class="btn btn-warning {{-- btn-sm --}}" data-toggle="modal"
                        data-target="#modalempleoedit-{{ $setempleo->id }}">
                        <i class="far fa-edit"></i> Editar
                    </button>
                </a>
            </div>
        @elseif($setempleo->label == 'imagentexto')
            <section data-aos="fade-up" class="" id="service">
                <div style="margin-top: 30px" class="container">
                    <div class="row ">
                        <div class="col-lg-4">
                            <div class="service-img">
                                <img src="{{ asset('/img/empleo/' . $setempleo->image) }}" class="img-fluid">
                            </div>
                        </div>

                        <div class="col-lg-8 pl-5">
                            <div class="service-content">
                                <div class="">
                                    <a>
                                        <button type="button" class="btn btn-warning {{-- btn-sm --}}"
                                            data-toggle="modal" data-target="#modalempleoedit-{{ $setempleo->id }}">
                                            <i class="far fa-edit"></i> Editar
                                        </button>
                                    </a>
                                </div>
                                <h1>{!! $setempleo->description !!}</h1>
                                {{-- <p>We compare hundreds of leading products and plans across many categories to bring you the best value for money.</p> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section data-aos="fade-left" class="pt-5 service-wrap">
                <div class="container">
                    <div class="row ">
                        <div class="col-lg-8 offset-lg-4">
                            <div class=" " id="service-carousel" data-ride="carousel">
                                <div class="">
                                    <div class="carousel-item active">
                                        <div class="col-lg-12">
                                            <div class="row">
                                                <div class="col-lg-8">
                                                    <div class="service-block media">
                                                        <div class="service-icon">
                                                            <i class="fas fa-thumbs-up"></i>
                                                        </div>
                                                        <div class="service-inner-content media-body">
                                                            <h4>Excelente ambiente de trabajo</h4>
                                                            {{-- <p>Texto Texto TextoTexto .......</p> --}}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="col-lg-12">
                                            <div class="row">
                                                <div class="col-lg-8">
                                                    <div class="service-block media">
                                                        <div class="service-icon">
                                                            <i class="fas fa-thumbs-up"></i>
                                                        </div>
                                                        <div class="service-inner-content media-body">
                                                            <h4>Crecimiento laboral</h4>
                                                            {{-- <p>Texto Texto TextoTexto .......</p> --}}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="carousel-item">
                                        <div class="col-lg-12">
                                            <div class="row">
                                                {{-- <div class="col-lg-6">
                                                <div class="service-block media">
                                                    <div class="service-icon">
                                                        <i class="ti-reload"></i>
                                                    </div>
                                                    <div class="service-inner-content media-body">
                                                        <h4>Backup System</h4>
                                                        <p>Our team are experts in matching you with the right provider.</p>
                                                    </div>
                                                </div>
                                            </div> --}}
                                                <div class="col-lg-8">
                                                    <div class="service-block media">
                                                        <div class="service-icon">
                                                            <i class="fas fa-thumbs-up"></i>
                                                        </div>
                                                        <div class="service-inner-content media-body">
                                                            <h4>Únete a nuestro equipo</h4>
                                                            {{-- <p>Texto Texto TextoTexto .......</p> --}}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        @endif
    @endforeach
    <div class="container">
        <div class="col-12">
            <div class="testimonial-title-main text-center">
                <h5>EDICION</h5>
                <h3>CONTADORES NUMERICOS</h3>
                <hr class="tituloestatico">
            </div>
        </div>
        @include('empleosetting.modalcounter')                  
                <div style="padding-top: 50px" data-aos="fade-up" id="counter" class="container-fluid">
                    <div class="row">
                        @foreach ($getcounter as $setempleo)  
                        @include('empleosetting.editempleo')
                        @include('empleosetting.deletempleo')
                        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 text-center">
                            <div class="bg-counter">
                                <div class="service-icon-count fa-4x">
                                    <i class="{{ $setempleo->icono }} fa-3x"></i>
                                </div>
                                <p class="textcount1">{!! $setempleo->titulo !!}</p>
                                <p class="counter-value fs-2 numcount" data-count="{{ $setempleo->numero }}">0</p>
                                <p class="textcount2"><strong>{!! $setempleo->description !!}</strong></p>
                            </div>
                            <div class="">
                                <a>
                                    <button type="button" class="btn btn-warning btn-sm"
                                        data-toggle="modal" data-target="#modalempleoedit-{{ $setempleo->id }}">
                                        <i class="far fa-edit"></i> Editar
                                    </button>
                                </a>
                                <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                                        data-target="#modalEliminar-{{ $setempleo->id }}">
                                        <i class="far fa-trash-alt"></i>eliminar
                                    </button>
                            </div>
                        </div>  
                        @endforeach                    
                    </div>
                </div>                    
    @endsection
