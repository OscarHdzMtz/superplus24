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
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark"></h1>
                </div><!-- /.col -->
                <div class="col-sm-12">
                    <a href="{{ route('politicaprivacidad.create')}}" class="btn btn-success btn-lg btn-block">
                        <i class="fa fa-plus-circle"> Agregar politica</i>
                    </a>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div> 
    <div class="container">
        <div class="col-12">
            <div class="testimonial-title-main text-center">                
                <div class="card">
                    @foreach ($politicaprivacidad as $politica)
                    @include('politicaprivacidad.editpolitica')
                    @include('politicaprivacidad.deletepolitica')
                    <div class="">                      
                        <button type="button" class="btn btn-warning btn-sm" data-toggle="modal"
                                data-target="#modalpoliticaedit-{{ $politica->id }}">
                                <i class="far fa-edit"></i>Editar
                        </button>
                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modalEliminar-{{$politica->id}}">
                            <i class="far fa-trash-alt"> Eliminar</i>
                        </button> 
                    </div>
                    <div style="text-align: justify" class="card-body">{!!$politica->texto!!}</div>                    
                    @endforeach    
                  </div>                  
            </div>
        </div>                 
    @endsection

