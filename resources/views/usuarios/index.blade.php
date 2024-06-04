@extends('layouts.app')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="mb-2 row">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark"></h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Usuarios</a></li>
                        <li class="breadcrumb-item active">Index</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <div class="container mt-5">
        <div>
            <h2>LISTA DE USUARIOS DEL SISTEMA
                <form class="float-right ml-3 form-inline">
                    <div class="input-group input-group-sm">
                        <input class="form-control form-control-navbar" name="search" type="search" placeholder="Search"
                            aria-label="Search">
                        <div class="input-group-prepend">
                            <button class="input-group-text" type="submit">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </div>
                </form>
                <form action="{{ route('usuarios.create') }}" method="GET">
                    @csrf
                    <button type="submit" class="float-right btn btn-success">
                        <i class="fa fa-plus-circle"></i> Agregar Usuario
                    </button>
                </form>
            </h2>
            <h6>
                @if ($search)
                    <div class="alert alert-success" role="alert">
                        El resultado de la búsqueda de <strong>'{{ $search }}'</strong> son:.
                    </div>
                @endif
            </h6>
        </div>
        <div class="mt-100">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr class="text-center">
                            <th scope="col">#</th>
                            <th scope="col">Usuario</th>
                            <th scope="col">Correo</th>
                            <th scope="col">Rol</th>
                            <th scope="col" class="text-center">Creado</th>
                            <th scope="col" class="text-center">Actualizado</th>
                            <th scope="col" class="text-center">Verificacion dos pasos</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            @include('usuarios.delete')
                            <tr>
                                <th scope="row">{{ $user->id }}</th>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>
                                    @foreach ($user->roles as $role)
                                        {{ $role->name }}
                                    @endforeach
                                </td>
                                <td>{{ \Carbon\Carbon::parse($user->created_at)->format('d/m/Y H:i:s') }}</td>
                                <td>{{ \Carbon\Carbon::parse($user->updated_at)->format('d/m/Y H:i:s') }}</td>
                                <td class="text-center">
                                    @if ($user->two_factor_confirmed_at != '')
                                        <p style="color: #00C851" class="card-text"><strong>Activado</strong><small
                                                class="text-muted"></small> <br>
                                            <small>{{ \Carbon\Carbon::parse($user->two_factor_confirmed_at)->format('d/m/Y H:i:s') }}</small>
                                        </p>
                                    @else
                                        <p style="color: #ff4444" class="card-text"><strong>Desactivado</strong><small
                                                class="text-muted"></small></p>
                                    @endif
                                </td>
                                <td>
                                    <form action="{{ route('usuarios.destroy', $user->id) }}" method="POST">
                                       {{--  <a href="{{ route('usuarios.show', $user->id) }}"><button type="button"
                                                class="btn btn-outline-primary"><i class="far fa-eye"></i> Ver</button></a> --}}
                                        <a href="{{ route('usuarios.edit', $user->id) }}"><button type="button"
                                                class="btn btn-outline-success"><i class="far fa-edit"></i>
                                                Editar</button></a>
                                        <button type="button" class="btn btn-outline-danger" data-toggle="modal"
                                            data-target="#modaldeletetuser-{{ $user->id }}">
                                            <i class="far fa-trash-alt"></i>Eliminar
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        {{ $users->links() }}
    </div>
@endsection
