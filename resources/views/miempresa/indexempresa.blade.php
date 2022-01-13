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
                        <li class="breadcrumb-item"><a href="#">miempresa</a></li>
                        <li class="breadcrumb-item active">Index</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    {{-- @include('Textoproducto.createtext') --}}
    <div class="container">
        {{-- <a href="{{ route('miempresa.create')}}" class="btn btn-outline-info">
            <i class="fa fa-plus-circle"> Agregar Miempresa</i>
        </a> --}}
        <div class="row">
            <div class="col-sm-12">
                @foreach ($empresa as $getempresa)
                    @include('miempresa.editempresa')
                    @if ($getempresa->label == 'banner')
                        <div id="carouselExampleSlidesOnly" class="banner_nosotros" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block w-100" src="{{ asset('/img/miempresa/' . $getempresa->image) }}"
                                        alt="First slide">
                                    <div style="background-color: rgba(0, 0, 0, .5)"
                                        class="carousel-caption d-none d-md-block">
                                        <div class="card-footer border-info">
                                            <a>
                                                <button type="button" class="btn btn-warning {{-- btn-sm --}}"
                                                    data-toggle="modal"
                                                    data-target="#modalempresaedit-{{ $getempresa->id }}">
                                                    <i class="far fa-edit"></i> Editar
                                                </button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @elseif($getempresa->label == 'historia')
                        <div style="padding-top: 20px" class="container">
                            <div class="row align-items-center">
                                <div class="col-md-6 order-1 order-md-2 mb-4 mb-md-0">
                                    {{-- <h5 >CONOCE</h5> --}}
                                    <div class="testimonial-title">
                                        <h3>{{ $getempresa->titulo }}</h3>
                                        <hr class="style6 historia-title">
                                    </div>
                                    <p class="historia-text">{{ $getempresa->description }}</p>
                                    <div class="">
                                        <a>
                                            <button type="button" class="btn btn-warning btn-sm" data-toggle="modal"
                                                data-target="#modalempresaedit-{{ $getempresa->id }}">
                                                <i class="far fa-edit"></i> Editar
                                            </button>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-6 order-2 order-md-1">
                                    <img class="img-fluid w-100" src="{{ asset('/img/miempresa/' . $getempresa->image) }}"
                                        alt="about image">
                                </div>
                            </div>
                        </div>
                    @elseif($getempresa->label == 'titulo')

                        <div class="testimonial-title">
                            {{-- <h5>CONOCE</h5> --}}
                            <h1>{{ $getempresa->titulo }}</h1>
                            <hr class="style6">
                            <button type="button" class="btn btn-warning {{-- btn-sm --}}" data-toggle="modal"
                                data-target="#modalempresaedit-{{ $getempresa->id }}">
                                <i class="far fa-edit"></i> Editar
                            </button>
                        </div>
                    @else
                        <div class="blog-card">
                            <div class="meta">
                                <div class="photo"
                                    style="background-image: url('{{ asset('/img/miempresa/' . $getempresa->image) }}')">
                                </div>
                                <ul class="details logohover "
                                    style="background-image: url('{{ asset('/img/miempresa/' . $getempresa->imghover) }}')">
                                </ul>
                            </div>
                            <div class="description">
                                <h1>{{ $getempresa->titulo }}</h1>
                                <p>{{ $getempresa->description }}</p>
                                <div class="">
                                    <a>
                                        <button type="button" class="btn btn-warning btn-sm" data-toggle="modal"
                                            data-target="#modalempresaedit-{{ $getempresa->id }}">
                                            <i class="far fa-edit"></i> Editar
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
@endsection
