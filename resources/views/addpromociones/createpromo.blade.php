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
                        <li class="breadcrumb-item">Promociones</li>
                        <li class="breadcrumb-item">Index</li>
                        <li class="breadcrumb-item active"><a href="#">Nuevo</a></li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <div class="container">
        <h1 class="text-center">
            Agregar promociones</small>
        </h1>

        <div class="row text-center justify-content-md-center border border-primary">
            <div class="col-md-offset col-md-6">                
                {!! Form::open(['route' => 'addpromociones.store', 'files' => 'true']) !!}                
                <div class="empresa-form">
                    <form>                        
                        {{-- <hr style="margin: 0 auto" class="style1">   --}}    
                        <div class="form-group mt-4">                            
                            <label for="message-text" class="col-form-label">Selecciona una Imagen * :</label>
                            {{ Form::file('image', ['required' => 'required', 'class'=>'empresa_input', 'id'=>'seleccionArchivos']) }}
                            <div class="mt-2 mb-0 row justify-content-center">
                                <img id="imagenPrevisualizacion" src="#" alt="Imagen" height="200px" width="200px" />
                            </div>                       
                        </div>
                        <div class="form-group">
                            <label  class="control-label" for="categoria_id">CATEGORIAS *</label>
                            {!! Form::select('categoria_id', $categorias,null,['class' => 'empresa_input','placeholder' => 'Elige una categoria de promocion'])!!}
                        </div>                    
                        <div class="input-container">
                            {{-- <input id="" type="email" class="form-control contact_input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus> --}}
                            <input type="text" name="titulo" class="empresa_input" placeholder="Titulo*">
                        </div>                                          
                        <div class="input-container">
                            <textarea name="texto" class="empresa_input" placeholder="Descripcion (Opcional)" cols="40" rows="5" style="resize: both;"
                                onkeyup="countChars(this);"></textarea>
                            <p id="charNum" class="text-success text-center">0 caracteres</p>
                        </div>                        
                        <div class="form-group">
                            <label>FECHA INICIO</label>
                            <input type="date" name="fechaInicio" required> <br>
                            <label>FECHA FIN </label>
                            <input type="date" name="fechaFin" required>
                        </div>
                        <div class="form-group">
                            <label for="visible">Oferta Exclusiva: </label>
                            {!!
                                Form::checkbox('deldia',null,array())    !!}
                        </div>
                        <div class="form-group">
                            {!! Form::submit('Guardar', ['class' => 'btn btn-outline-success']) !!}
                            <a href="{{ route('addpromociones.index') }}" class="btn btn-outline-danger">Cancelar</a>
                        </div>
                    </form>
                </div>             
                {!! Form::close() !!}
            </div>
        </div>
    </div>    
@endsection
