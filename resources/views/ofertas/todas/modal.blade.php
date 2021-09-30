<div class="container">
    <button type="button" class="btn btn-success btn-lg btn-block" data-toggle="modal"
        data-target="#exampleModal">
        <i class="fa fa-plus-circle"></i> Agregar Promociones
    </button>
</div>

{!! Form::open(['url' => 'ofertas/todas', 'files' => 'true']) !!}
{{ Form::token() }}
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><strong>NUEVA PROMOCION</strong></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">NOMBRE DEL OFERTA:</label>
                        <input type="text" name="titulo" class="form-control" id="recipient-name" required>
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">DESCRIPCION DE LA OFERTA:</label>
                        <textarea type="text" name="texto" class="form-control" id="recipient-name"
                            onkeyup="countChars(this);" maxlength="300" {{-- required --}}></textarea>
                        Maximo de caracteres 300 caracteres<p id="charNum" class="text-success">0 caracteres</p>
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">IMAGEN DE LA OFERTA:</label>
                        {{ Form::file('image', ['required' => 'required']) }}
                    </div>
                    <div class="form-group">
                        <label>FECHA INICIO</label>
                        <input type="date" name="fechaInicio" required> <br>
                        <label>FECHA FIN </label>
                        <input type="date" name="fechaFin" required>
                    </div>
                    <div class="form-group">
                        <div class="form-check">
                            <label><input type="checkbox" name="deldia"> PROMOCIONES EXCLUSIVOS </label>
                        </div>
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
