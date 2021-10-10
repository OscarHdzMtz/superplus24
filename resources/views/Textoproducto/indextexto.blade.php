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

    @include('Textoproducto.createtext')

    <div style="padding-top: 50px" class="container">
        <div class="row">
            @foreach ($textproduct as $textproduct)
            @include('Textoproducto.editext')
            @include('Textoproducto.deletetext')
                <div class="col-md-6">
                    <div class="card border border-success shadow-0 mb-3">
                        <div class="card-header bg-transparent border-success">Tarjeta numero {{ $textproduct->id }}</div>
                        <div class="card-body text-success">
                            <h5 class="card-title">{!! $textproduct->texto !!}</h5>
                        </div>
                        <div class="card-footer bg-transparent border-success">

                        </div>
                        <div class="card-footer border-info">
                            <a>
                                <button type="button" class="btn btn-warning btn-sm" data-toggle="modal"
                                    data-target="#modaledit-{{ $textproduct->id }}">
                                    <i class="far fa-edit"></i>Editar
                                </button>
                            </a>
                            <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                                data-target="#modaldeleteslider-{{ $textproduct->id }}">
                                <i class="far fa-trash-alt"></i>Eliminar
                            </button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>



@endsection
