<div class="container">
    <button type="button" class="btn btn-success btn-lg" data-toggle="modal"
        data-target="#modalBanner">
        <i class="fa fa-plus-circle"></i> Agregar Banner
    </button>
    <button type="button" class="btn btn-success btn-lg" data-toggle="modal"
        data-target="#modalTituloFacturacion">
        <i class="fa fa-plus-circle"></i> Agregar Titulo
    </button>
    <button type="button" class="btn btn-success btn-lg" data-toggle="modal"
        data-target="#modalSubTituloFacturacion">
        <i class="fa fa-plus-circle"></i> Agregar Subtitulo
    </button>
    <button type="button" class="btn btn-success btn-lg" data-toggle="modal"
        data-target="#modalImagenTexto">
        <i class="fa fa-plus-circle"></i> Agregar Imagen/Texto
    </button>
    <button type="button" class="btn btn-success btn-lg" data-toggle="modal"
        data-target="#modalCreateBoton">
        <i class="fa fa-plus-circle"></i> Agregar Boton
    </button>
</div>

{{-- MODAL BANNER --}}
{!! Form::open(['url' => 'facturacion', 'files' => 'true']) !!}
{{ Form::token() }}
<div class="modal fade" id="modalBanner" tabindex="-1" role="dialog" aria-labelledby="exampleModalslider"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalslider"><strong>Servicios</strong></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="input-container">
                        <input style="width: 100px;text-align: center"  type="text" name="orden" class="form-control item" id="username"
                            placeholder="Orden" maxlength="2" required>
                    </div>   
                    <div class="form-group text-cemter">
                        <input  type="text" name="label" class="empresa_input item" id="username"
                            value="banner" readonly>
                            <div style="margin-top: -25px" class="d-flex flex-column text-center"> </div>
                    </div>                
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Titulo :</label>
                        <input type="text" name="titulo" class="empresa_input" id="recipient-name">
                    </div>
                    {{-- <div class="form-outline">
                        <label for="recipient-name" class="col-form-label">DESCRIPCION:</label>
                        <textarea type="text" name="description" class="form-control" id="recipient-name"
                            onkeyup="countChars(this);" maxlength="300" required></textarea>
                        Maximo de caracteres 300 caracteres<p id="charNum" class="text-success">0 caracteres</p>
                    </div> --}}
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">IMAGEN:</label>
                        {{ Form::file('image', ['required' => 'required']) }}
                    </div>                                                                           
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">CERRAR</button>
                <button type="submit" class="btn btn-primary">GUARDAR</button>
            </div>
        </div>
    </div>
</div>
{!! Form::close() !!}


{{-- MODAL TITULO --}}
{!! Form::open(['url' => 'facturacion', 'files' => 'true']) !!}
{{ Form::token() }}
<div class="modal fade" id="modalTituloFacturacion" tabindex="-1" role="dialog" aria-labelledby="exampleModalslider"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalslider"><strong>Servicios</strong></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="input-container">
                        <input style="width: 100px;text-align: center"  type="text" name="orden" class="form-control item" id="username"
                            placeholder="Orden" maxlength="2" required>
                    </div>   
                    <div class="form-group text-cemter">
                        <input  type="text" name="label" class="empresa_input item" id="username"
                            value="titulo" readonly>
                            <div style="margin-top: -25px" class="d-flex flex-column text-center"> </div>
                    </div>                
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Titulo :</label>
                        <input type="text" name="titulo" class="empresa_input" id="recipient-name">
                    </div>                                                                                      
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">CERRAR</button>
                <button type="submit" class="btn btn-primary">GUARDAR</button>
            </div>
        </div>
    </div>
</div>
{!! Form::close() !!}


{{-- MODAL SUBTITULO --}}
{!! Form::open(['url' => 'facturacion', 'files' => 'true']) !!}
{{ Form::token() }}
<div class="modal fade" id="modalSubTituloFacturacion" tabindex="-1" role="dialog" aria-labelledby="exampleModalslider"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalslider"><strong>SUBTITULOS</strong></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="input-container">
                        <input style="width: 100px;text-align: center"  type="text" name="orden" class="form-control item" id="username"
                            placeholder="Orden" maxlength="2" required>
                    </div>   
                    <div class="form-group text-cemter">
                        <input  type="text" name="label" class="empresa_input item" id="username"
                            value="subtitulo" readonly>
                            <div class="d-flex flex-column text-center"> </div>
                    </div>                
                    <div class="input-container">
                        <textarea name="subtitulo" class="empresa_input form-control input ckeditor form-control"  id="" placeholder="subtitulo"
                            onkeyup="countChars(this);" required></textarea>
                        <p id="charNum" class="text-success text-center">0 caracteres</p>
                    </div>                                                                                      
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">CERRAR</button>
                <button type="submit" class="btn btn-primary">GUARDAR</button>
            </div>
        </div>
    </div>
</div>
{!! Form::close() !!}


{{-- MODAL ImagenTextio --}}
{!! Form::open(['url' => 'facturacion', 'files' => 'true']) !!}
{{ Form::token() }}
<div class="modal fade" id="modalImagenTexto" tabindex="-1" role="dialog" aria-labelledby="exampleModalslider"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalslider"><strong>Servicios</strong></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="input-container">
                        <input style="width: 100px;text-align: center"  type="text" name="orden" class="form-control item" id="username"
                            placeholder="Orden" maxlength="2" required>
                    </div>   
                    <div class="form-group text-cemter">
                        <input  type="text" name="label" class="empresa_input item" id="username"
                            value="textoImagen" readonly>
                            <div class="d-flex flex-column text-center"> </div>
                    </div>                
                    {{-- <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Titulo :</label>
                        <input type="text" name="titulo" class="empresa_input" id="recipient-name">
                    </div> --}}
                  
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">IMAGEN:</label>
                        {{ Form::file('image', ['required' => 'required']) }}
                    </div>  
                    <div class="input-container">
                        <textarea name="description" class="empresa_input form-control input ckeditor form-control"  id="" placeholder="Descripcion"
                            onkeyup="countChars(this);" required></textarea>
                        <p id="charNum" class="text-success text-center">0 caracteres</p>
                    </div>                                                                         
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">CERRAR</button>
                <button type="submit" class="btn btn-primary">GUARDAR</button>
            </div>
        </div>
    </div>
</div>

{{-- MODAL Crear Boton --}}
{!! Form::open(['url' => 'facturacion', 'files' => 'true']) !!}
{{ Form::token() }}
<div class="modal fade" id="modalCreateBoton" tabindex="-1" role="dialog" aria-labelledby="exampleModalslider"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalslider"><strong>Agregar</strong></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="input-container">
                        <input style="width: 100px;text-align: center"  type="text" name="orden" class="form-control item" id="username"
                            placeholder="Orden" maxlength="2" required>
                    </div>   
                    <div class="form-group text-cemter">
                        <input  type="text" name="label" class="empresa_input item" id="username"
                            value="boton" readonly>
                            <div class="d-flex flex-column text-center"> </div>
                    </div>                
                    {{-- <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Titulo :</label>
                        <input type="text" name="titulo" class="empresa_input" id="recipient-name">
                    </div> --}}
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Nombre del Boton :</label>
                        <input type="text" name="titulo" class="empresa_input" id="recipient-name">
                    </div>  
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">URL de la pagina a redireccionar :</label>
                        <input type="text" name="subtitulo" class="empresa_input" id="recipient-name">
                    </div>                                                                                                                                              
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">CERRAR</button>
                <button type="submit" class="btn btn-primary">GUARDAR</button>
            </div>
        </div>
    </div>
</div>
<section>
    <script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
    <script type="text/javascript">
    $(document).ready(function () {
        $('.ckeditor').ckeditor();
    });
</script>