@extends('layouts.app')
@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Usuarios</a></li>
                    <li class="breadcrumb-item"><a href="#">Index</a></li>
                    <li class="breadcrumb-item active">Perfil</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <div class="card mb-3" style="max-width: 650px;">
            <div class="row no-gutters">
                <div class="col-md-6">
                    <img src="{{ asset('dist/img/avatar5.png')}}" class="card-img-top" alt="User Image">
                </div>
                <div class="col-md-6">
                <div class="card-body">
                    <h2 class="display-6">{{$user->name}}</h2>
                    <p class="lead"><strong>Email</strong>: {{$user->email}}</p>
                    <p class="lead"><strong>celular</strong>: {{$user->celular}}</p>
                    <p class="lead"><strong>Ingreso:</strong> {{$user->created_at}}</p>
                    <p class="lead"><strong>Actualización:</strong> {{$user->updated_at}}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 