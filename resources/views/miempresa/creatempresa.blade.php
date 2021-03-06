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
                        <li class="breadcrumb-item">Miempresa</li>
                        <li class="breadcrumb-item">Index</li>
                        <li class="breadcrumb-item active"><a href="#">Nuevo</a></li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <div class="container">
        <h1 class="text-center">
            Datos mi empresa</small>
        </h1>

        <div class="row text-center justify-content-md-center">
            <div class="col-md-offset col-md-6">                
                {!! Form::open(['route' => 'miempresa.store', 'files' => 'true']) !!}                
                <div class="empresa-form">
                    <form>                        
                        <hr style="margin: 0 auto" class="style1">
                        <div class="input-container ">
                            <input type="text" name="orden" class="empresa_input" placeholder="orden" required>
                        </div>
                        <div class="input-container">
                            <input type="text" name="label" class="empresa_input" placeholder="Label" required>
                            <small
                                    class="agree-text">banner, historia, titulo, mision, vision, valores</small> 
                        </div>    
                        <div class="input-container">
                            {{-- <input id="" type="email" class="form-control contact_input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus> --}}
                            <input type="text" name="titulo" class="empresa_input" placeholder="Titulo">
                        </div>                                          
                        <div class="input-container">
                            <textarea name="description" class="empresa_input" id="" placeholder="Descripcion"
                                onkeyup="countChars(this);" required></textarea>
                            <p id="charNum" class="text-success text-center">0 caracteres</p>
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="col-form-label">IMAGEN:</label>
                            {{ Form::file('image', ['required' => 'required']) }}
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="col-form-label">IMAGEN SOBRE IMAGEN:</label>
                            {{ Form::file('imghover') }}
                        </div>
    
                        <div class="form-group">
                            {!! Form::submit('Guardar', ['class' => 'btn btn-outline-success']) !!}
                            <a href="{{ route('miempresa.index') }}" class="btn btn-outline-danger">Cancelar</a>
                        </div>
                    </form>
                </div>
               {{--  <form>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Orden :</label>
                        <input type="text" name="orden" class="form-control" id="recipient-name" required>
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">LABEL :</label>
                        <input type="text" name="label" class="form-control" id="recipient-name" required>
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">TITULO :</label>
                        <input type="text" name="titulo" class="form-control" id="recipient-name" required>
                    </div>
                    <div class="form-outline">
                        <label for="recipient-name" class="col-form-label">DESCRIPCION:</label>
                        <textarea size="400" type="text" name="description" class="form-control text-justify"
                            id="recipient-name" rows="5"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">IMAGEN:</label>
                        {{ Form::file('image', ['required' => 'required']) }}
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">IMAGEN SOBRE IMAGEN:</label>
                        {{ Form::file('imghover') }}
                    </div>

                    <div class="form-group">
                        {!! Form::submit('Guardar', ['class' => 'btn btn-outline-success']) !!}
                        <a href="{{ route('miempresa.index') }}" class="btn btn-outline-danger">Cancelar</a>
                    </div>
                </form> --}}
                {!! Form::close() !!}
            </div>
        </div>
    </div>    
@endsection
