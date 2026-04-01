{!! Form::open(['route' => ['slidermain.update', $slideradd->id], 'method' => 'PATCH', 'files' => 'true']) !!}
{{ Form::token() }}
<div class="modal fade" id="modaledit-{{ $slideradd->id }}" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalslider" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="text-center modal-title" id="modaledit"><strong>ACTUALIZAR INFORMACION</strong></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">NOMBRE :</label>
                        <input type="text" name="name" class="form-control" id="recipient-name"
                            value="{{ $slideradd->name }}" required>
                    </div>
                    <div class="form-group">
                        <label for="description-edit-{{ $slideradd->id }}" class="col-form-label">DESCRIPCION:</label>
                        <textarea name="description" class="ckeditor form-control" id="description-edit-{{ $slideradd->id }}"
                            onkeyup="countChars(this, 'charNum-edit-{{ $slideradd->id }}');" maxlength="300"
                            >{{ $slideradd->description }}</textarea>
                        Máximo de caracteres 300<p id="charNum-edit-{{ $slideradd->id }}" class="text-success">0 caracteres</p>
                    </div>
                    <div class="form-group cold-md-6">
                        <label>Imagen</label>
                        <br>
                        {{ Form::file('image') }}
                        @if ($slideradd->image != '' && file_exists(public_path('img/slider/' . $slideradd->image)))
                            <img src="{{ asset('/img/slider/' . $slideradd->image) }}" alt="{{ $slideradd->name }}"
                                height="300px" width="50px" class="card-img-top">
                        @endif
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>FECHA INICIO</label>
                                <input type="date" name="fechaInicio" class="form-control" value="{{ $slideradd->fechaInicio }}" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>FECHA FIN</label>
                                <input type="date" name="fechaFin" class="form-control" value="{{ $slideradd->fechaFin }}" required>
                            </div>
                        </div>
                    </div>
                    <hr width="85%" color=”black” />
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

