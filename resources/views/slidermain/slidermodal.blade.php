<div class="container">
    <button type="button" class="btn btn-success btn-lg btn-block" data-toggle="modal" data-target="#modalslider">
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
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">NOMBRE :</label>
                        <input type="text" name="name" class="form-control" id="recipient-name" required>
                    </div>
                    <div class="form-group">
                        <label for="description-create" class="col-form-label">DESCRIPCION:</label>
                        <textarea name="description" class="ckeditor form-control" id="description-create"
                            onkeyup="countChars(this, 'charNum-create');" maxlength="300"></textarea>
                        Máximo de caracteres 300<p id="charNum-create" class="text-success">0 caracteres</p>
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">IMAGEN:</label>
                        {{ Form::file('image', ['required' => 'required']) }}
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>FECHA INICIO</label>
                                <input type="date" name="fechaInicio" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>FECHA FIN</label>
                                <input type="date" name="fechaFin" class="form-control" required>
                            </div>
                        </div>
                    </div>
                    <hr width="85%" height="10px" color=”black”/>
                    <div class="control-group">
                        <label class="control-label">SELECCIONE PAGINAS A SER VISIBLES</label>
                        <div class="controls">
                            <select name="pagina[]" data-select="multiple" multiple="multiple">
                                <option value="index">Principal</option>
                                <option value="promociones">Promociones</option>
                            </select>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">CERRAR</button>
                <button type="submit" class="btn btn-primary">GUARDAR OFERTA</button>
            </div>
        </div>
    </div>
</div>
{!! Form::close() !!}

