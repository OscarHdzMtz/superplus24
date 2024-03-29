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
                        <li class="breadcrumb-item active"><a href="#">Nuevo</a></li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <div class="container border border-primary">
        <h1 class="text-center">
            Agregar Publicidad</small>
        </h1>
        <div class="row text-center justify-content-md-center">
            <div class="col-md-offset col-md-6">
                {!! Form::open(['route' => 'crearPublicidad.store', 'files' => 'true']) !!}
                <div class="empresa-form">
                    <form>
                        <hr style="margin: 0 auto" class="style1">
                        {{-- <div class="form-group">
                            <label class="control-label" for="categoria_id">CATEGORIAS</label>
                            {!! Form::select('categoria_id', $categorias, null, [
                                'class' => 'empresa_input',
                                'placeholder' => 'Elige una categoria*',
                                'required',
                            ]) !!}
                        </div> --}}
                        <div class="input-container">
                            {{-- <input id="" type="email" class="form-control contact_input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus> --}}
                            <input type="text" name="titulo" class="empresa_input" placeholder="Titulo*" required>
                        </div>
                        {{-- <div class="input-container">
                            <textarea name="description" class="empresa_input" id="" placeholder="Descripcion"
                                onkeyup="countChars(this);"></textarea>
                            <p id="charNum" class="text-success text-center">0 caracteres</p>
                        </div>   --}}                        
                        <div class="form-group">
                            <label for="message-text" class="col-form-label">IMAGEN*:</label>
                            {{ Form::file('image', ['required' => 'required', 'class' => 'empresa_input', 'required']) }}
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col">
                                    <label for="visible">Volver a mostrar despues de: </label>
                                    <input style="width: 100px;text-align: center" type="text" name="vigenciaCookie"
                                        class="empresa_input" id="username" placeholder="Minutos" maxlength="7" required>
                                </div>
                                {{-- <div class="col">
                                    <label for="visible">Agregar Boton</label>
                                    {!! Form::checkbox('textoDelBoton', null, []) !!}
                                </div> --}}
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <div class="row">
                                <div class="col">
                                    <label for="visible">Agregar Boton <small>(Opcional)</small></label> <br>
                                    <input type="text" name="textoDelBoton"
                                        class="empresa_input" id="username" placeholder="texto del boton">
                                </div>
                                <div class="col">
                                    <label for="visible">Redireccionar a: <small>(Opcional)</small></label> <br>
                                    <input type="text" name="paginaARedireccionar"
                                        class="empresa_input" id="username" placeholder="nombre de la pagina">
                                        <Small>Ejemplo: promociones, cupones, facturacion,</Small>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="control-label">SELECCIONE PAGINAS A SER VISIBLES</label>  <br>     
                            <small>Manten presionado la tecla control para selecccionar mas de una opcion</small>                     
                            <select name="paginasAMostrar[]" data-select="multiple" multiple="multiple"
                                class="empresa_input">
                                <option value="index">Principal</option>
                                <option value="promociones">Promociones</option>
                                <option value="cupones">Cupones</option>
                                <option value="empleo">Empleo</option>
                                <option value="nosotros">Nosotros</option>
                                <option value="contact">Contacto</option>
                                <option value="facturacion">Facturacion</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>FECHA INICIO*</label>
                            <input type="date" name="fechaInicio" required> <br>
                            <label>FECHA FIN*</label>
                            <input type="date" name="fechaFin" required>
                        </div>
                        <div class="form-group">
                            {!! Form::submit('Guardar', ['class' => 'btn btn-outline-success']) !!}
                            <a href="{{ route('crearPublicidad.index') }}" class="btn btn-outline-danger">Cancelar</a>
                        </div>
                    </form>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
