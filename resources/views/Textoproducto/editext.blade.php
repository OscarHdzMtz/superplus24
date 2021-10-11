
    {!! Form::open(['action' => ['TextoproductoController@update', $textproduct->id], 'method' => 'PATCH', 'files' => 'true']) !!}
    {{ Form::token() }}
    <div class="modal fade" id="modaledit-{{$textproduct->id}}"  tabindex="-1" role="dialog" aria-labelledby="exampleModalslider"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-center" id="modaledit"><strong>ACTUALIZAR TEXTO</strong></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>                  
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">DESCRIPCION:</label>
                        <textarea type="text" name="texto" class="ckeditor form-control" id="recipient-name"
                            onkeyup="countChars(this);" maxlength="300" {{-- required --}}>{{$textproduct->texto}}</textarea>
                        Maximo de caracteres 300 caracteres<p id="charNum" class="text-success">0 caracteres</p>
                    </div>                                 
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">CERRAR</button>
                <button type="submit" class="btn btn-primary">GUARDAR OFERTA</button>
            </div>
        </div>
    </div>
</div>
    {!! Form::close() !!}
    <section>
        <script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
        <script type="text/javascript">
        $(document).ready(function () {
            $('.ckeditor').ckeditor();
        });
    </script>
</section>

