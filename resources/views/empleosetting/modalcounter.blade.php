<div class="container">
    <button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#modalcounter">
        <i class="fa fa-plus-circle"></i> Agregar
    </button>
</div>

{!! Form::open(['url' => 'ajustesempleo']) !!}
{{ Form::token() }}
<div class="modal fade" id="modalcounter" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalslider"><strong>Counter</strong></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="vacantes-form">
                    <form>
                        {{-- <div class="form-icon">
                            <span><img src="{{ asset('img/logop.png') }}" alt=""></i></span>
                        </div> --}}
                        <div class="form-group">
                            <input style="width: 100px;text-align: center" type="text" name="orden"
                                class="form-control item" id="username" placeholder="Orden" maxlength="2">
                        </div>
                        <div class="form-group text-cemter">
                            <input type="text" name="label" class="form-control item" id="username" value="contadores"
                                readonly>
                            <div style="margin-top: -25px" class="d-flex flex-column text-center"> <small
                                    class="agree-text">imagentexto, contadores, banner</small> </div>
                        </div>
                        <div class="form-group">
                            <div class="form-group">
                                <input type="text" name="icono" class="form-control item" id="username"
                                    placeholder="Icono">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">TITULO:</label>
                            <textarea type="text" name="titulo" class="ckeditor form-control"
                                id="recipient-name"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="text" name="numero" class="form-control item" id="username"
                                placeholder="Numero">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">DESCRIPCION:</label>
                            <textarea type="text" name="description" class="ckeditor form-control"
                                id="recipient-name"></textarea>
                        </div>
                        <div class="form-group text-center justify-content-md-center">
                            <button type="submit" class="btn cancel" data-dismiss="modal">cancelar</button>
                            <button type="submit" class="btn create-account">Guardar</button>
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
