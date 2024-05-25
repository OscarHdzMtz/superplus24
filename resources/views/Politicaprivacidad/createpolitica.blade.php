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
                        <li class="breadcrumb-item">Politica de Privacidad</li>
                        <li class="breadcrumb-item">Index</li>
                        <li class="breadcrumb-item active"><a href="#">Nuevo</a></li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <div class="container">
        <h1 class="text-center">
            Politica de Privacidad</small>
        </h1>

        <div class="row text-center justify-content-md-center">
            <div class="col-md-offset col-md-6">                
                {!! Form::open(['route' => 'politicaprivacidad.store', 'files' => 'true']) !!}                
                <div class="empresa-form">
                    <form>                        
                        <hr style="margin: 0 auto" class="style1">   
                        <div class="input-container ">
                            <input type="text" name="orden" class="empresa_input" placeholder="orden">
                        </div>                                                           
                        <div class="input-container">
                            <textarea name="texto" class="empresa_input form-control input ckeditor form-control"  id="" placeholder="Descripcion"
                                onkeyup="countChars(this);" required></textarea>
                            <p id="charNum" class="text-success text-center">0 caracteres</p>
                        </div>                          
                        <div class="form-group">
                            {!! Form::submit('Guardar', ['class' => 'btn btn-outline-success']) !!}
                            <a href="{{ route('politicaprivacidad.index') }}" class="btn btn-outline-danger">Cancelar</a>
                        </div>
                    </form>
                </div>              
                {!! Form::close() !!}
            </div>
        </div>
    </div>    
@endsection
<section>
    <script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
    <script type="text/javascript">
    $(document).ready(function () {
        $('.ckeditor').ckeditor();
    });
</script>
</section>
