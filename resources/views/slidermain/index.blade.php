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
    @include('slidermain.slidermodal')
    <div class="conten-fluido">
        <div class="row">
            @foreach ($slider as $slideradd)
            @include('slidermain.modaledit')
            @include('slidermain.modaldelete')
                <div class="col-md-6">
                  <div style="background: #f4f4f4 ; border-radius: 10px;  border-color: black">
                    <div id="carouselExampleSlidesOnly" class="carousel slide titlesli" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="{{ asset('/img/slider/' . $slideradd->image) }}"
                                    class="card-img-top" alt="First slide">
                                    <div style="background-color: rgba(0, 0, 0, .5)" class="carousel-caption ">
                                      <h5>{{ $slideradd->description }}</h5>                                      
                                    </div>
                            </div>                                                                            
                        </div>
                    </div>
                    <div class="card-body">
                      <h3>{{ $slideradd->name }}</h3>
                      <h5>Fecha Inicio: <small>{{ $slideradd->fechaInicio }}</small></h5>
                      <h5>Fecha Inicio: <small>{{ $slideradd->fechaFin }}</small></h5>                      
                  </div>
                    <div class="card-footer border-info">
                      <a>
                          <button type="button" class="btn btn-warning btn-sm" data-toggle="modal"
                              data-target="#modaledit-{{ $slideradd->id }}">
                              <i class="far fa-edit"></i>Editar
                          </button>
                      </a>
                      <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                          data-target="#modaldeleteslider-{{ $slideradd->id }}">
                          <i class="far fa-trash-alt"></i>Eliminar
                      </button>
                  </div>
                  </div>
                </div>
            @endforeach
        </div>
    </div>  

    @endsection
