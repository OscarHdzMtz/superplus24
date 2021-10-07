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
                        <li class="breadcrumb-item"><a href="#">Servicios</a></li>
                        <li class="breadcrumb-item active">Index</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>  
    @include('Cardservicio.createcard')  

    <div data-aos="fade-up" class="container_cards">
        <div class="row_cards">
            @foreach ($servicios as $serviciosadd)   
            @include('Cardservicio.editcard')
            @include('Cardservicio.deletcard')
            <div class="col-md-3 col-sm-6 mb-3">                                                 
                <div class="single-content">
                    <img src="{{ asset('/img/servicios/' . $serviciosadd->image) }}" alt="SuperPlus">
                    <div class="text-content">
                        <h4>{{ $serviciosadd->name }}</h4>
                        {{-- <hr class="style2"> --}}
                        <h5>{{ $serviciosadd->description }}</h5>
                        <div class="card-footer border-info">
                            <a>
                                <button type="button" class="btn btn-warning btn-sm" data-toggle="modal"
                                    data-target="#modalservicioedit-{{$serviciosadd->id}}">
                                    <i class="far fa-edit"></i>Editar
                                </button>
                            </a>
                            <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                                data-target="#modaldeletetcard-{{$serviciosadd->id}}">
                                <i class="far fa-trash-alt"></i>Eliminar
                            </button>
                        </div> 
                    </div>                   
                </div>                              
            </div>
            @endforeach
        </div>
    </div>
@endsection
