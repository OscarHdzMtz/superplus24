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
            <form action="{{ route('usuarios.create') }}" method="POST">
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
        <table class="table table-striped table-bordered table-hover">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Email</th>
                    <th scope="col">Rol</th>
                    <th scope="col" class="text-center">Gestión</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <th scope="row">{{ $user->id }}</th>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            @foreach ($user->roles as $role)
                                {{ $role->name }}
                            @endforeach
                        </td>
                        <!--<td>{{ $user->created_at }}</td>
          <td>{{ $user->updated_at }}</td>-->
                        <td>

                            <form action="{{ route('usuarios.destroy', $user->id) }}" method="POST">
                                <a href="{{ route('usuarios.show', $user->id) }}"><button type="button"
                                        class="btn btn-outline-primary"><i class="far fa-eye"></i> Ver</button></a>
                                <a href="{{ route('usuarios.edit', $user->id) }}"><button type="button"
                                        class="btn btn-outline-success"><i class="far fa-edit"></i> Editar</button></a>
                                <!--@csrf
              @method('DELETE')
             <td> <button type="submit" class="btn btn-outline-danger">Eliminar</button>-->
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $users->links() }}
    </div>
@endsection
