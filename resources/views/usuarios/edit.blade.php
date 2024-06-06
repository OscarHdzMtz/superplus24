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
                        <li class="breadcrumb-item active">Editar</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <h3>EDITANDO EL USUARIO <strong>{{ $user->name }}</strong></h3>
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
                    <form action="{{ route('usuarios.update', $user->id) }}" method="POST" autocomplete="off">
                        @method('PUT')
                        @csrf

                        <div class="input-container">
                            <label for="name">NOMBRE</label>
                            <input type="text" name="name" class="rounded-md empresa_input" required
                                value="{{ $user->name }}" placeholder="Ingrese su Nombre">
                        </div>
                        <div class="input-container">
                            <label>CORREO</label>
                            <input type="email" name="email" class="rounded-md empresa_input" required
                                value="{{ $user->email }}"placeholder="Ingrese su E-mail">
                        </div>

                        <div class="input-container">
                            <label for="rol">ROL</label>
                            <select name="rol" class="form-control">
                                <option selected disabled>Elige un rol para este usuario</option>
                                @foreach ($roles as $role)
                                    @if ($role->name == str_replace(['["', '"]'], '', $user->tieneRol()))
                                        <option value="{{ $role->id }}" selected>{{ $role->name }}</option>
                                    @else
                                        <option value="{{ $role->id }}">{{ $role->name }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>

                        <div class="row">
                            <div class="form-group col-md-6">
                                <label>CONTRASEÑA<span class="small">(Opcional)</span></label>
                                <input type="password" name="password" class="rounded-md empresa_input"
                                    placeholder="Ingrese su Contraseña">
                            </div>
                            <div class="form-group col-md-6">
                                <label>CONFIRME CONTRASEÑA<span class="small">(Opcional)</span></label>
                                <input type="password" name="password_confirmation" class="rounded-md empresa_input"
                                    placeholder="Confirme su Contraseña">
                            </div>
                        </div>
                        <div class="input-container">
                            <a href="{{ URL::route('usuarios.index') }}">
                                <button type="button" class="btn btn-danger ">
                                    <i class="far fa-window-close"></i> CANCELAR
                                </button>
                            </a>
                            <button type="submit" class="btn btn-success">ACTUALIZAR</button>                            
                        </div>

                    </form>
                </div>
            </div>
        </div>
        {{-- <div>
        <div class="py-10 mx-auto max-w-7xl sm:px-6 lg:px-8">           
            @if (Laravel\Fortify\Features::canManageTwoFactorAuthentication())
            <div class="mt-10 sm:mt-0">
                @livewire('profile.two-factor-authentication-form', ['userIdEdit' => $user->id])
            </div>

            <x-section-border />
            @endif
        </div>
    </div> --}}
    </div>
@endsection
