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

    <div style="padding-top: 50px" class="container-fluid">
        <div class="row">
            @foreach ($slider as $slideradd)
                @include('slidermain.modaledit')
                <div class="col-md-6">
                    <div class="card">
                        <img src="{{ asset('/img/slider/' . $slideradd->image) }}" class="card-img-top" alt="..." />
                        <div class="card-body">
                            <h5 class="card-title">{{ $slideradd->name }}</h5>
                            <p class="card-text">
                                {{ $slideradd->description }}
                            <h5>Fecha Inicio: <small>{{ $slideradd->fechaInicio }}</small></h5>
                            <h5>Fecha Inicio: <small>{{ $slideradd->fechaFin }}</small></h5>
                            </p>
                        </div>
                        <div class="card-footer border-info">
                          <a >
                              <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modaledit-{{$slideradd->id}}">
                                  <i class="far fa-edit"></i>Editar
                              </button>
                          </a>
                          <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modalEliminar-">
                              <i class="far fa-trash-alt"></i>Eliminar
                          </button>
                      </div>
                    </div>                  
                </div>                
            @endforeach
        </div>
    </div>

@endsection
