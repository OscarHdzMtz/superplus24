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
                        <li class="breadcrumb-item">Publicidad</li>
                        <li class="breadcrumb-item">Index</li>
                        <li class="breadcrumb-item active"><a href="#">Editar</a></li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <div class="container border border-primary">
        <h1 class="text-center">
            Editar Publicidad</small>
        </h1>
        <div class="row text-center justify-content-md-center">
            <div class="col-md-offset col-md-6">
                {!! Form::open([
                    'action' => ['PublicidadEmergenteController@update', $getPublicidadEditar->id],
                    'method' => 'PATCH',
                    'files' => 'true',
                ]) !!}
                {{ Form::token() }}
                <div class="empresa-form">
                    <form>
                        {{-- <hr style="margin: 0 auto" class="style1"> --}}
                        {{-- <div class="card text-center mx-auto" style="width: 400px;"> --}}
                            <div class="form-group">
                                <label  class="control-label" for="categoria_id">CATEGORIAS</label>                                                                
                                    {{-- {!! Form::select('categoria_id', $categoriasEdit,null,['class' => 'form-control'],)!!} --}}
                                    {{-- <option value="estiloamarillo" @if ($getsetting->style == 'estiloamarillo') selected @endif>estiloamarillo</option> --}}
                                    <select name="categoria_id" id="categoria_id" class="empresa_input">
                                        @foreach ($categorias as $categoriasEdit)
                                            <option value="{{$categoriasEdit->id}}" @if ($getPublicidadEditar->categoria_id == $categoriasEdit->id) selected @endif class="empresa_input">{{$categoriasEdit->name}}</option>  
                                        @endforeach
                                    </select>                                                                 
                            </div> 
                            <div class="card-header">
                                <input type="text" name="titulo" class="empresa_input" required
                                    value="{{ $getPublicidadEditar->titulo }}">
                            </div>                            
                            <div class="form-group cold-md-6">
                                <label>Imagen</label>
                                <br>                               
                                {{ Form::file('image') }}
                                @if ($getPublicidadEditar->image != '')
                                    <img src="{{ asset('/img/cupones/' . $getPublicidadEditar->image) }}" alt="{{ $getPublicidadEditar->titulo }}"
                                        height="300px" width="50px" class="card-img-top">
                                @endif
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col">
                                        <label for="visible">Volver a mostrar despues de: </label>
                                        <input style="width: 100px;text-align: center" type="text" name="vigenciaCookie"
                                            class="empresa_input" value={{ $getPublicidadEditar->titulo }} required>
                                    </div>
                                    <div class="col">
                                        <label for="visible">Prioridad</label><input type="checkbox" name="prioridad" {{ $getPublicidadEditar->prioridad == 1 ? "checked='checked'" : ''}}> 
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Fecha Inicio</label>
                                <input type="date" name="fechaInicio" value="{{ $getPublicidadEditar->fechaInicio }}" class="empresa_input"> <br>
                                <label>Fecha Fin</label>
                                <input type="date" name="fechaFin" value="{{ $getPublicidadEditar->fechaFin }}" class="empresa_input">
                            </div>
                            <div class="form-group">
                                <label class="control-label">SELECCIONE PAGINAS A SER VISIBLES</label>  <br>     
                                <small>Manten presionado la tecla control para selecccionar mas de una opcion</small>                     
                                <select name="paginasAMostrar[]" data-select="multiple" multiple="multiple"
                                    class="empresa_input">                                    
                                    <option value="index" selected>Principal</option>
                                    <option value="promociones" selected>Promociones</option>
                                    <option value="cupones">Cupones</option>
                                    <option value="empleo">Empleo</option>
                                    <option value="nosotros">Nosotros</option>
                                    <option value="contact">Contacto</option>
                                    <option value="facturacion">Facturacion</option>
                                </select>
                            </div>

                            <div class="form-group">
                                {{-- {{ $cupones->updated_at }} --}}
                                {{-- <a href="{{ URL::action('CrearCuponesController@edit', $cupones->id) }}"> --}}
                                    <button type="submit" class="btn btn-outline-primary">
                                        <i class="far fa-save"> Actualizar</i>
                                    </button>
                                {{-- </a> --}}
                                <a href="{{ route('crearPublicidad.index') }}">
                                    <button type="button" class="btn btn-outline-danger">
                                        <i class="far fa-window-close"> Cancelar</i>
                                    </button>
                                </a>
                            </div>
                        </div>
                    </form>
                {{-- </div> --}}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
