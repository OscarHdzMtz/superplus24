<div class="container">
    <button type="button" class="btn btn-success btn-lg btn-block" data-toggle="modal"
        data-target="#modaltextproduct">
        <i class="fa fa-plus-circle"></i> Agregar Texto
    </button>
</div>

{!! Form::open(['url' => 'textoproducto', 'files' => 'true']) !!}
{{ Form::token() }}
<div class="modal fade" id="modaltextproduct" tabindex="-1" role="dialog" aria-labelledby="exampleModalslider"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalslider"><strong>Agregar Texto</strong></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>                    
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">DESCRIPCION:</label>
                        <textarea type="text" name="texto" class="ckeditor form-control" id="recipient-name"
                            onkeyup="countChars(this);" maxlength="300" {{-- required --}}></textarea>
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
    CKEDITOR.replace('wysiwyg-editor', {
        filebrowserUploadUrl: "{{route('ckeditor.image-upload', ['_token' => csrf_token() ])}}",
        filebrowserUploadMethod: 'form'
    });
</script>


</section>