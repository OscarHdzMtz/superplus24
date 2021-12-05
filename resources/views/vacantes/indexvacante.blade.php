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
                        <li class="breadcrumb-item"><a href="#">Vacantes</a></li>
                        <li class="breadcrumb-item active">Index</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>    
    @include('vacantes.vacantemodal')    

    <div data-aos="fade-up" class="container_vacan"> 
        @foreach ($vacanteplus as $getvacante)    
        @include('vacantes.editvacante')  
        @include('vacantes.deletevacante')                     
        <div class="card_vacan text-center justify-content-md-center">
            <div class="img-cover"><img src="{{asset('/img/vacantes/'.$getvacante->image)}}"></div>
            <div class="card-footer border-info">
                <a>
                    <button type="button" class="btn btn-warning btn-sm" data-toggle="modal"
                        data-target="#editvacante-{{ $getvacante->id }}">
                        <i class="far fa-edit"></i>Editar
                    </button>
                </a>
                <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                    data-target="#modaldeletevacante-{{ $getvacante->id }}">
                    <i class="far fa-trash-alt"></i>Eliminar
                </button>
            </div>
            @if ($getvacante->status <> '0')
            <div style="color: green" class="text-center"><p><strong>ACTIVO</strong></p></div>                
            @endif            
        </div>
        @endforeach
    </div>
@endsection