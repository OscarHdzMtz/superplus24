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
                        <li class="breadcrumb-item"><a href="#">Promociones</a></li>
                        <li class="breadcrumb-item active">Index</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    @include('indexsetting.create')
    <div data-aos="fade-up" class="container_cards">
        <div class="row_cards">
            @foreach ($setting as $getsetting)
                @include('indexsetting.edit')
                @include('indexsetting.delete')
                @if ($getsetting->label == 'tarjeta')
                    <div class="col-md-3 col-sm-6 mb-3 text-center">
                        <div class="single-content_service">
                            <div class="service">
                                <i class="{{-- fas fa- --}}{{ $getsetting->icono }} fa-4x"></i>
                                <h4 class="title_services">{{ $getsetting->titulo }}</h4>
                                <p class="description_services">{{ $getsetting->description }}</p><br>
                                @if ($getsetting->modal != '1')
                                    <a href="{{ $getsetting->redireccion }}"
                                        class="btn_modal_wel mt-5">{{ $getsetting->titulobtn }}</a>
                                @else
                                    <a href="" class="btn_modal_wel mt-5" data-toggle="modal"
                                        data-target=".{{ $getsetting->redireccion }}">{{ $getsetting->titulobtn }}</a>
                                @endif

                                <div class="card-footer border-info">
                                    <a>
                                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal"
                                            data-target="#modalsetting-{{ $getsetting->id }}">
                                            <i class="far fa-edit"></i> Editar
                                        </button>
                                    </a>
                                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                                        data-target="#modalEliminar-{{ $getsetting->id }}">
                                        <i class="far fa-trash-alt"></i>eliminar
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </div>    

    <div class="container">
        <div class="col-12">
            <div class="testimonial-title-main text-center">
                <h5>EDICION</h5>
                <h3>TITULOS PAGINA PRINCIPAL</h3>
                <hr class="tituloestatico">
            </div>
        </div>
        @foreach ($gettitulo as $getsetting)
            @if ($getsetting->label != 'titulofooter')
                <div class="col-12">
                    <div class="testimonial-title">
                        <h5>{{ $getsetting->titulo }}</h5>
                        <h3>{{ $getsetting->description }}</h3>
                        <hr class="{{ $getsetting->style }}">
                        <div class="card-footer border-info">
                            <a>
                                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal"
                                    data-target="#modalsetting-{{ $getsetting->id }}">
                                    <i class="far fa-edit"></i> Editar
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            @else
            <div class="col-12">
                <div class="testimonial-title-main text-center">
                    <h5>EDICION</h5>
                    <h3>QUIENES SOMOS</h3>
                    <hr class="tituloestatico">
                </div>
            </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-12">
                            <div class="f_widget company_widget wow fadeInLeft" data-wow-delay="0.2s"
                                style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInLeft;">
                                {{-- <h3 align="center" lass="f-title f_600 t_color f_size_18"><strong>SuperPlus</strong> --}}
                                </h3>
                                <h4><strong>{{ $getsetting->titulo }}</strong></h4>
                                <hr class="{{ $getsetting->style }}">
                                <p>
                                    <strong>{{ $getsetting->description }}</strong>.
                                </p>
                                <div class="card-footer border-info">
                                    <a>
                                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal"
                                            data-target="#modalsetting-{{ $getsetting->id }}">
                                            <i class="far fa-edit"></i> Editar
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div style="padding-top: -100px" class="col-lg-4 col-md-12 text-center justify-content-md-center">
                            @foreach ($getimagen as $getsetting)
                            <div class="container">
                                <img src="{{asset('/img/imagenfooter/'.$getsetting->image)}}" class="img-fluid"
                                    alt="SuperPlus">
                                    <div class="card-footer border-info">
                                        <a>
                                            <button type="button" class="btn btn-primary btn-sm" data-toggle="modal"
                                                data-target="#modalsetting-{{ $getsetting->id }}">
                                                <i class="far fa-edit"></i> Editar
                                            </button>
                                        </a>
                                    </div>
                            </div>
                            @endforeach                           
                        </div>
                    </div>
                </div>
    </div>

    @endif

    @endforeach
    </div>

@endsection
