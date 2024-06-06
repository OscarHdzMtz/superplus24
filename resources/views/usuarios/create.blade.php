@extends('layouts.app')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="mb-2 row">
                <div class="col-sm-6">

                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Usuarios</a></li>
                        <li class="breadcrumb-item"><a href="#">Index</a></li>
                        <li class="breadcrumb-item active">Crear</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <h3>CREAR NUEVO USUARIO</h3>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
        </div>
        <div class="text-center row justify-content-md-center">
            <div class="col-md-offset col-md-6">
                <div class="empresa-form">
                    <form {{-- action="{{ url('usuarios') }}" --}} action="{{ route('usuarios.store') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf

                        <div class="input-container">
                            <label for="name">NOMBRE</label>
                            <input type="text" name="name" class="rounded-md empresa_input"
                                placeholder="Ingrese su Nombre">
                        </div>
                        <div class="input-container">
                            <label for="name">CORREO</label>
                            <input type="email" name="email" class="rounded-md empresa_input"
                                placeholder="Ingrese su E-mail">
                        </div>
                        <div class="input-container">
                            <label for="name">ROL</label>

                            <select name="rol" class="form-control">
                                <option selected disabled>Elige un rol para este usuario</option>
                                @foreach ($roles as $role)
                                    <option value="{{ $role->id }}">{{ $role->name }}</option>
                                @endforeach
                            </select>

                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label>CONTRASEÑA</label>
                                <input type="password" name="password" class="rounded-md empresa_input"
                                    placeholder="Ingrese su Contraseña">
                            </div>
                            <div class="form-group col-md-6">
                                <label>CONFIRME CONTRASEÑA</label>
                                <input type="password" name="password_confirmation" class="rounded-md empresa_input"
                                    placeholder="Confirme su Contraseña">
                            </div>
                        </div>
                        <div class="input-container">                            
                            <a href="{{ URL::route('usuarios.index') }}">
                                <button type="button" class="mr-1 btn btn-danger ">
                                    <i class="far fa-window-close"></i> CANCELAR
                                </button>
                            </a>
                            <button type="reset" class="btn btn-warning">BORRAR</button>
                            <button type="submit" class="btn btn-success">REGISTRAR</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
