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
                        <li class="breadcrumb-item"><a href="#">Facturacion</a></li>
                        <li class="breadcrumb-item active">Index</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    @include('facturacion.create')
    @foreach ($getFacturacion as $setFacturacion)
        @include('facturacion.edit')
        @include('facturacion.delete')
        <br>
        @if ($setFacturacion->label == 'banner')
            <div class="container">
                <div id="carouselExampleSlidesOnly" class="banner_nosotros" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="{{ asset('/img/facturacion/' . $setFacturacion->image) }}"
                                alt="First slide">
                        </div>
                    </div>
                    <button type="button" class="btn btn-warning btn-sm" data-toggle="modal"
                        data-target="#editFacturacion-{{ $setFacturacion->id }}">
                        <i class="far fa-edit"></i> {{-- Editar --}}
                    </button>
                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                        data-target="#modalEliminar-{{ $setFacturacion->id }}">
                        <i class="far fa-trash-alt"></i>{{-- eliminar --}}
                    </button>
                </div>
            </div>
        @elseif($setFacturacion->label == 'textoImagen')
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6 order-1 order-md-2 mb-4 mb-md-0">
                        {{-- <h5 >CONOCE</h5> --}}
                        <div class="testimonial-title">
                            <h3>{{ $setFacturacion->titulo }}</h3>
                            <hr class="style6 historia-title">
                        </div>
                        <p class="historia-text">{!! $setFacturacion->description !!}</p>
                        <div class="">
                            <a>
                                <button type="button" class="btn btn-warning btn-sm" data-toggle="modal"
                                    data-target="#editFacturacion-{{ $setFacturacion->id }}">
                                    <i class="far fa-edit"></i> {{-- Editar --}}
                                </button>
                                <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                                    data-target="#modalEliminar-{{ $setFacturacion->id }}">
                                    <i class="far fa-trash-alt"></i>{{-- eliminar --}}
                                </button>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6 order-2 order-md-1">
                        <img class="img-fluid w-100" src="{{ asset('/img/facturacion/' . $setFacturacion->image) }}"
                            alt="about image">
                    </div>
                </div>
            </div>
        @elseif($setFacturacion->label == 'titulo')
            <div class="testimonial-title">
                {{-- <h5>CONOCE</h5> --}}
                <h1>{{ $setFacturacion->titulo }}</h1>
                <hr class="style6">
                <button type="button" class="btn btn-warning btn-sm" data-toggle="modal"
                    data-target="#editFacturacion-{{ $setFacturacion->id }}">
                    <i class="far fa-edit"></i> {{-- Editar --}}
                </button>
                <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                    data-target="#modalEliminar-{{ $setFacturacion->id }}">
                    <i class="far fa-trash-alt"></i>{{-- eliminar --}}
                </button>
            </div>
        @elseif($setFacturacion->label == 'subtitulo')
            <div>
                {{-- <h5>CONOCE</h5> --}}
                <div class="container">
                    <p style="color: black; text-align: center">{!! $setFacturacion->subtitulo !!}</p>
                    <button type="button" class="btn btn-warning btn-sm" data-toggle="modal"
                        data-target="#editFacturacion-{{ $setFacturacion->id }}">
                        <i class="far fa-edit"></i> {{-- Editar --}}
                    </button>
                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                        data-target="#modalEliminar-{{ $setFacturacion->id }}">
                        <i class="far fa-trash-alt"></i>{{-- eliminar --}}
                    </button>
                </div>
            </div>
        @elseif($setFacturacion->label == 'boton')
            <div>
                {{-- <h5>CONOCE</h5> --}}
                <div class="container">
                    <div class="">
                        <a style="background: #003BAA; color: blanchedalmond" href="" class="btn_modal_wel mt-5" data-toggle="modal"
                        data-target=".{{ $setFacturacion->subtitulo }}">{{ $setFacturacion->titulo }}</a>
                    </div>                    
                    <button type="button" class="btn btn-warning btn-sm" data-toggle="modal"
                        data-target="#editFacturacion-{{ $setFacturacion->id }}">
                        <i class="far fa-edit"></i> {{-- Editar --}}
                    </button>
                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                        data-target="#modalEliminar-{{ $setFacturacion->id }}">
                        <i class="far fa-trash-alt"></i>{{-- eliminar --}}
                    </button>
                </div>
            </div>
        @endif
    @endforeach
@endsection
