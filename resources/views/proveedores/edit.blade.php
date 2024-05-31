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
                    <li class="breadcrumb-item">Proveedores</li>
                    <li class="breadcrumb-item">Index</li>
                    <li class="breadcrumb-item active"><a href="#">Editar</a></li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
{!! Form::open(['route' => ['proveedores.update', $proveedore->id],'method' => 'PATCH','files'=>'true']) !!}
{{ Form::token() }}
<div class="mx-auto text-center card" style="width: 400px;">
    <div class="card-header">
        <input type="text" name="name" class="form-control" required value="{{$proveedore->name}}">
    </div> 
    <div class="form-group cold-md-6"> 
        <label>Imagen</label>
        <br>
            {{Form::file('image')}}
            @if($proveedore->image != "")
            <img src="{{asset('/img/proveedore/'.$proveedore->image)}}" alt="{{$proveedore->name}}" height="300px" width="50px" class="card-img-top">
            @endif
    </div>
    <div class="card-footer text-muted small">
        {{ $proveedore->updated_at }}
        <a href="{{URL::route('proveedores.edit',$proveedore->id)}}">
            <button type="submit" class="btn btn-primary ">
            <i class="far fa-save"></i>
            </button> 
        </a>
        <a href="{{URL::route('proveedores.index')}}">
            <button type="button" class="float-right mr-1 btn btn-danger ">
                <i class="far fa-window-close"></i>
            </button> 
        </a>
  </div>
</div>
{!! Form::close() !!}
@endsection