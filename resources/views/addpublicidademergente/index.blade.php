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
                        <li class="breadcrumb-item"><a href="#">Publicidad</a></li>
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
                    <a href="{{ route('crearPublicidad.create') }}" class="btn btn-success btn-lg btn-block">
                        <i class="fa fa-plus-circle"> Agregar publicidad</i>
                    </a>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <div class="content-header">
        <div class="container-fluid">
            <div class="row">
                @foreach ($publicidad as $getpublicidad)
                    <div class="col-md-3 col-sm-6 mb-6">
                        <div class="card mr-3" style="width: 18rem;">
                            <img src="{{ asset('/img/publicidadEmergente/' . $getpublicidad->image) }}" class="card-img-top"
                                alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><strong>Titulo:</strong> {{ $getpublicidad->titulo }}</h5>
                                <p class="card-text"><strong>Vigencia:</strong>
                                    {{ Str::substr($getpublicidad->fechaInicio, 8, 2) }}/{{ Str::substr($getpublicidad->fechaInicio, 5, 2) }}/{{ Str::substr($getpublicidad->fechaInicio, 0, 4) }}
                                    -
                                    {{ Str::substr($getpublicidad->fechaFin, 8, 2) }}/{{ Str::substr($getpublicidad->fechaFin, 5, 2) }}/{{ Str::substr($getpublicidad->fechaFin, 0, 4) }}
                                    @if ($getpublicidad->fechaFin >= date('Y-m-d'))
                                    <a style="color: white" class="badge badge-success">Activo</a>
                                    @else
                                    <a style="color: white" class="badge badge-danger">Expirado</a>
                                    @endif                                    
                                </p>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-6 mb-6">
                                    <a href="{{ URL::action('PublicidadEmergenteController@edit', $getpublicidad->id) }}">
                                        <button type="button" class="btn btn-warning">
                                            <i class="far fa-edit"></i> Editar
                                        </button>
                                    </a>
                                </div>
                                <div class="col-md-6 col-sm-6 mb-6">
                                    {!! Form::open([
                                        'action' => ['PublicidadEmergenteController@destroy', $getpublicidad->id],
                                        'method' => 'DELETE',
                                    ]) !!}
                                    {{ Form::token() }}
                                    <button class="btn btn-danger"
                                        onclick="return confirm('Estas Seguro de Eliminar la promoción?')">
                                        <i class="far fa-trash-alt"></i> Eliminar
                                    </button>
                                    {!! Form::close() !!}
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
