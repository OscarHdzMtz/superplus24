@extends('layouts.app')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Dashboard</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard v1</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
    @can('Administrador')
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-primary">
                    <div class="inner">
                    <h3>{{$cons_user}}</h3>

                        <p><strong>Usuarios</strong></p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <a href="/usuarios" class="small-box-footer">Más info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
          
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-success">
                    <div class="inner">
                        <h3>{{$cons_ofertas}}</h3>

                        <p><strong>Promociones</strong></p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-percent"></i>
                    </div>
                    <a href="/addpromociones" class="small-box-footer">Más info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-warning">
                    <div class="inner">
                        <h3 style="color: white">{{$cons_productos}}</h3>

                        <p style="color: white"><strong>Productos Nuevos</strong></p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-box-open"></i>
                    </div>
                    <a href="/producto" class="small-box-footer">Más info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-danger">
                    <div class="inner">
                        <h3 style="color: white">{{$cons_categorias}}</h3> 
                        <p><strong>Categorias</strong></p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-street-view"></i>
                    </div>
                    <a href="Categorias" class="small-box-footer">Más info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
        </div>
    </div>
    @endcan
    @can('Marketing')
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
         <!-- ./col -->
         <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
                <div class="inner">
                    <h3>{{$cons_ofertas}}</h3>

                    <p><strong>Promociones</strong></p>
                </div>
                <div class="icon">
                    <i class="fas fa-percent"></i>
                </div>
                <a href="/addpromociones" class="small-box-footer">Más info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
                <div class="inner">
                    <h3 style="color: white">{{$cons_productos}}</h3>

                    <p style="color: white"><strong>Productos Nuevos</strong></p>
                </div>
                <div class="icon">
                    <i class="fas fa-box-open"></i>
                </div>
                <a href="/producto" class="small-box-footer">Más info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
                <div class="inner">
                    <h3 style="color: white">{{$cons_categorias}}</h3> 
                    <p><strong>Categorias</strong></p>
                </div>
                <div class="icon">
                    <i class="fas fa-street-view"></i>
                </div>
                <a href="Categorias" class="small-box-footer">Más info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
    </div>
</div>
    @endcan
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><h3 style="text-align: center">BIENVENIDO:<strong> {{ Auth::user()->name }}</strong></h3> </div>
    
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <img style="max-width: 50%; margin-left: 26%" src="{{ asset('img/estaticos/logopalomita.png') }}" alt="SuperPlus24">
                        <br>
                        <br>
                         <h4 style="text-align: center">Ha Iniciado Sesion de manera correcta</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.row (main row) -->
</div><!-- /.container-fluid --><!-- /.container-fluid -->
</section>
<!-- /.content -->
@endsection
