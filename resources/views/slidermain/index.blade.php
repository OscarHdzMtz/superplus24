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
                    <li class="breadcrumb-item"><a href="#">Promociones</a></li>
                    <li class="breadcrumb-item active">Index</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
@include('slidermain.modal') 

<div style="padding-top: 50px" class="container-fluid">
    <div class="row">
        @foreach ($slide as $slider)
    <div class="col-md-6">
        <div class="card">
            <img
              src="https://mdbootstrap.com/img/new/standard/nature/184.jpg"
              class="card-img-top"
              alt="..."
            />
            <div class="card-body">
              <h5 class="card-title">{{$slider->nombre}}</h5>
              <p class="card-text">
                Some quick example text to build on the card title and make up the bulk of the
                card's content.
              </p>
              <a href="#!" class="btn btn-primary">editar</a> 
              <a href="#!" class="btn btn-primary">eliminar</a>
            </div>
          </div>
        </div>
        @endforeach
    </div>    
</div>    
  
@endsection