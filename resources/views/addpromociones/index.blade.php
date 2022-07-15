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
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark"></h1>
                </div><!-- /.col -->
                <div class="col-sm-12">
                    <a href="{{ route('addpromociones.create') }}" class="btn btn-success btn-lg btn-block">
                        <i class="fa fa-plus-circle"> Agregar Promociones</i>
                    </a>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    {{-- AGREGAR PROMO CON MODAL --}}
    {{-- @include('addpromociones.modal') --}}

    {{-- TARJETAS DE PROMOCION --}}
    {{-- <div class="mt-3 row-cols-1 card-columns ">
    @foreach ($ofertas as $oferta)
        @include('addpromociones.modal-delete') 
        <div class="card mb-3 " style="max-width: 540px;">
            <div class="row no-gutters">
                <div class="col-md-4">
                    <img src="{{asset('/img/ofertas/'.$oferta->image)}}" alt="{{$oferta->image}}" class="card-img-top" height="250" >
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h1 class="card-title">{{$oferta->titulo}}</h1><br><hr>
                        <h5 class="card-title">{{$oferta->texto}}</h5><br><hr> --}}
    {{-- <p class="card-text"><small class="text-muted">Fecha Ingreso:{{ $oferta->created_at}}</small></p>
                        <p class="card-text"><small class="text-muted">Fecha Actualizado:{{ $oferta->updated_at}}</small></p> --}}
    {{-- <p class="card-text"><small class="text-muted">Fecha Inicio: {{ $oferta->fechaInicio}}</small></p>
                        <p class="card-text"><small class="text-muted">Fecha Fin: {{ $oferta->fechaFin}}</small></p> --}}
    <!--<h5 class="card-title">Usuarios que lo publico:{{-- {{$oferta->user_id}} --}}</h5><br>-->
    {{-- @if ($oferta->deldia == '1')
                        <div>
                            <p style="color: green" class="card-text"><strong>Promo Exclusivo</strong><small class="text-muted"></small></p>
                        </div>                                                                                                 
                        @endif                        
                    </div>
                </div>
            </div> 
            <div class="card-footer border-info">
                <a href="{{URL::action('PublicofertController@edit',$oferta->id)}}">
                    <button type="button" class="btn btn-warning btn-sm ">
                        <i class="far fa-edit"></i>
                    </button> 
                </a>
                <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modalEliminar-{{$oferta->id}}">
                    <i class="far fa-trash-alt"></i>
                </button> 
            </div>
        </div>
    @endforeach  
</div> --}}
    {{-- <div class="alert alert-success" role="alert">
            <h4 class="alert-heading">Hola {{ Auth::user()->name }}</h4>
            <p>Si vas a publicar una Imagen de oferta del dia porfavor sigue esta recomedación:<br>
                1-Para que el usuario tenga una mayor satisfaccion al ver 
                la imagen porfavor que sus dimensiones sean de <strong>"720 x 1280"</strong>.<br>
                2-Que la imagen tenga un formato <strong>".jpg"</strong>.<br>
                3-Respete los caracteres de los campos solicitados.
            </p>
            <hr>
            <p class="mb-0">Que tengas un hermoso dia Atte: SuperPlus</p>
        </div> --}}
    <div class="container mt-5">
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr style="text-align: center">
                        <th scope="col">Editar</th>
                        <th scope="col">Eliminar</th>
                        <th scope="col">Imagen</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Vigencia</th>                        
                        <th scope="col">Estado</th>
                        <th scope="col">Oferta exlusiva</th>
                        <th scope="col">Descripcion</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($ofertas as $oferta)
                        <tr style="text-align: center">
                            <td>
                                <a href="{{ URL::action('PublicofertController@edit', $oferta->id) }}">
                                    <button type="button" class="btn btn-warning">
                                        <i class="far fa-edit"></i>
                                    </button>
                                </a>
                            </td>
                            <td>
                                {!! Form::open(['action' => ['PublicofertController@destroy', $oferta->id], 'method' => 'DELETE']) !!}
                                {{ Form::token() }}
                                <button class="btn btn-danger"
                                    onclick="return confirm('Estas Seguro de Eliminar la promoción?')">
                                    <i class="far fa-trash-alt"></i>
                                </button>
                                {!! Form::close() !!}                              
                            </td>
                            <td>
                                <img src="{{ asset('/img/ofertas/' . $oferta->image) }}" alt="{{ $oferta->image }}"
                                    width="150" height="150">
                            </td>
                            <td>{{ $oferta->titulo }}</td>
                            <td style="text-align: center"><strong>{{ $oferta->fechaInicio }} <br> a <br> {{ $oferta->fechaFin }}</strong> </td>                            
                            <td>
                                @if ($oferta->fechaFin >= date('Y-m-d'))
                                    <p style="color: #00C851" class="card-text"><strong>Activo</strong><small
                                            class="text-muted"></small></p>
                                @else
                                     <p style="color: #ff4444" class="card-text"><strong>Expirado</strong><small
                                     class="text-muted"></small></p>
                                @endif
                            </td>
                            <td>
                                @if ($oferta->deldia == '1')
                                    <div>
                                        <p style="color: #ffbb33" class="card-text"><strong>Exclusivo</strong><small
                                                class="text-muted"></small></p>
                                    </div>
                                @endif
                            </td>
                            <td>{{ $oferta->texto }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    </div>
@endsection