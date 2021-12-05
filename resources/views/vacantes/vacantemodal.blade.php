<div class="container">
    <button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#modalvacante">
        <i class="fa fa-plus-circle"></i> Agregar Vacantes
    </button>
</div>

{!! Form::open(['url' => 'vacantes', 'files' => 'true']) !!}
{{ Form::token() }}
<div class="modal fade" id="modalvacante" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalslider"><strong>VACANTES SUPERPLUS</strong></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="vacantes-form">
                    <form>
                        <div class="form-icon">
                            <span><img src="{{ asset('img/logop.png') }}" alt=""></i></span>
                        </div>
                        <div class="form-group">
                            <input type="text" name="titulo" class="form-control item" id="username"
                                placeholder="Titulo">
                        </div>
                        <div class="form-group">
                            <textarea name="texto" class="form-control item" placeholder="Descripcion"></textarea>
                        </div>
                        <div class="form-group">
                            <a class="text-center"><strong>Selecccione la imagen</strong></a>
                            {{ Form::file('image', ['required' => 'required']) }}
                        </div>
                        <div class="form-group">
                            <label for="status">Estatus:</label>
                            {!!
                                Form::checkbox('status',null,array('class' => 'form-check-label'))    !!}
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-block create-account">Enviar</button>
                        </div>
                    </form>
                    {{-- <div class="social-media">
                    <h5>Visitanos</h5>
                    <div class="social-icons">
                        <a href="#"><i class="icon-social-facebook" title="Facebook"></i></a>
                        <a href="#"><i class="icon-social-google" title="Google"></i></a>
                        <a href="#"><i class="icon-social-twitter" title="Twitter"></i></a>
                    </div>
                </div> --}}
                </div>
            </div>
        </div>
    </div>
</div>
{!! Form::close() !!}

<section>
    <script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.ckeditor').ckeditor();
        });
    </script>
</section>
