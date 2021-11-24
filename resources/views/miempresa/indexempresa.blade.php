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
       {{--  <a href="{{ route('miempresa.create')}}" class="btn btn-outline-info">
            <i class="fa fa-plus-circle"> Agregar Miempresa</i>
        </a> --}}    
        <div class="row">
            <div class="col-sm-12">
                @foreach ($empresa as $getempresa)
                @include('miempresa.editempresa')

                @if ($getempresa->label <> 'banner')
                <div class="blog-card">
                    <div class="meta">
                        <div class="photo"
                            style="background-image: url('{{ asset('/img/miempresa/' . $getempresa->image) }}')">
                        </div>
                        <ul class="details logohover "  style="background-image: url('{{ asset('/img/miempresa/' . $getempresa->imghover) }}')" >
                            
                        </ul>
                    </div>
                    <div class="description">
                        <h1>{{ $getempresa->titulo }}</h1>
                        {{-- <h2>Opening a door to the future</h2> --}}
                        @if ($getemppresa = 'valores')
                        <p>{!! $getempresa->description !!}</p>
                        @else
                        <p>{{ $getempresa->description }}</p>                        
                        @endif
                        <div class="card-footer border-info">
                            <a>
                                <button type="button" class="btn btn-warning btn-sm" data-toggle="modal"
                                    data-target="#modalempresaedit-{{ $getempresa->id }}">
                                    <i class="far fa-edit"></i> Editar
                                </button>
                            </a>
                            {{-- <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                            data-target="#modaldeleteslider-{{ $textproduct->id }}">
                            <i class="far fa-trash-alt"></i>Eliminar
                        </button> --}}
                        </div>
                    </div>
                </div>                
                    
                @elseif($getempresa->label <> 'historia')
                <div id="carouselExampleSlidesOnly" class="banner_nosotros" data-ride="carousel">
                <div class="carousel-inner">                    
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="{{ asset('/img/miempresa/' . $getempresa->image) }}" alt="First slide">
                        <div style="background-color: rgba(0, 0, 0, .5)" class="carousel-caption d-none d-md-block">
                            <div class="card-footer border-info">
                                <a>
                                    <button type="button" class="btn btn-warning {{-- btn-sm --}}" data-toggle="modal"
                                        data-target="#modalempresaedit-{{ $getempresa->id }}">
                                        <i class="far fa-edit"></i> Editar
                                    </button>
                                </a>                           
                            </div>
                          </div> 
                    </div>                    
                </div>
             </div>        
                @endif
                    
                @endforeach
            </div>
        </div>
    </div>
@endsection
