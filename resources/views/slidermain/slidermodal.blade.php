<div class="container">
    <button type="button" class="btn btn-success btn-lg btn-block" data-toggle="modal"
        data-target="#modalslider">
        <i class="fa fa-plus-circle"></i> Agregar Slider
    </button>
</div>

{!! Form::open(['url' => 'slidermain', 'files' => 'true']) !!}
{{ Form::token() }}
<div class="modal fade" id="modalslider" tabindex="-1" role="dialog" aria-labelledby="exampleModalslider"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalslider"><strong>Agregar Slider</strong></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">NOMBRE :</label>
                        <input type="text" name="name" class="form-control" id="recipient-name" required>
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">DESCRIPCION:</label>
                        <textarea type="text" name="description" class="ckeditor form-control" id="recipient-name"
                            onkeyup="countChars(this);" maxlength="300" {{-- required --}}></textarea>
                        Maximo de caracteres 300 caracteres<p id="charNum" class="text-success">0 caracteres</p>
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">IMAGEN:</label>
                        {{ Form::file('image', ['required' => 'required']) }}
                    </div>
                    <div class="form-group">
                        <label>FECHA INICIO</label>
                        <input type="date" name="fechaInicio" required> <br>
                        <label>FECHA FIN </label>
                        <input type="date" name="fechaFin" required>
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