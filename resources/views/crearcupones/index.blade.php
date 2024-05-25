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
                    <a href="{{ route('crearCupones.create') }}" class="btn btn-success btn-lg">
                        <i class="fa fa-plus-circle"> Agregar Cupones</i>
                    </a>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <div class="container">
        <form class="form-inline ml-3 float-right">
            <div class="input-group input-group-sm">
                <input class="form-control form-control-navbar" name="search" type="search" placeholder="Buscar"
                    aria-label="Search">
                <div class="input-group-prepend">
                    <button class="input-group-text" type="submit">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </div>
        </form>
    </div>

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
                        <th scope="col">Codigo</th>
                        <th scope="col">Generados</th>
                        <th scope="col">rango</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($getCupones as $cupones)
                        <tr style="text-align: center">
                            <td>
                                <a href="{{ URL::action('CrearCuponesController@edit', $cupones->id) }}">
                                    <button type="button" class="btn btn-warning">
                                        <i class="far fa-edit"></i>
                                    </button>
                                </a>
                            </td>
                            <td>
                                {!! Form::open(['action' => ['CrearCuponesController@destroy', $cupones->id], 'method' => 'DELETE']) !!}
                                {{ Form::token() }}
                                <button class="btn btn-danger"
                                    onclick="return confirm('Estas Seguro de Eliminar la promoción?')">
                                    <i class="far fa-trash-alt"></i>
                                </button>
                                {!! Form::close() !!}
                            </td>
                            <td>
                                <img src="{{ asset('/img/cupones/' . $cupones->image) }}" alt="{{ $cupones->image }}"
                                    width="150" height="150">
                            </td>
                            <td>{{ $cupones->titulo }}</td>                         
                            <td style="text-align: center"><strong>{{ $cupones->fechaInicio }} <br> a <br>
                                    {{ $cupones->fechaFin }}</strong></td>
                            <td>
                                @if ($cupones->fechaFin >= date('Y-m-d'))
                                    <p style="color: #00C851" class="card-text"><strong>Activo</strong><small
                                            class="text-muted"></small></p>
                                @else
                                    <p style="color: #ff4444" class="card-text"><strong>Expirado</strong><small
                                            class="text-muted"></small></p>
                                @endif
                            </td>
                            <td>
                                <div style='text-align: center;'>
                                    <!-- insert your custom barcode setting your data in the GET parameter "data" -->
                                    <img alt='Barcode'
                                         src='https://barcode.tec-it.com/barcode.ashx?data={{$cupones->valorCodigoDeBarras . $cupones->contadorCodigoDeBarras}}&code=Code128'/>
                                  </div>                                
                            </td>
                            <td><div class="badge rounded bg-success">                                
                                <h5><strong>{{ $cupones->contadorCodigoDeBarras-1}}</strong></h5>
                              </div></td>
                            <td>{{ $cupones->inicioDeRangoGenerarCodigoDeBarras}} - {{ $cupones->finDeRangoGenerarCodigoDeBarras}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    </div>
@endsection