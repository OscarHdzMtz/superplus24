{!! Form::open(['action' => ['EmpleosettingController@update', $setempleo->id], 'method' => 'PATCH', 'files' => 'true']) !!}
{{ Form::token() }}
<div class="modal fade" id="modalempleoedit-{{ $setempleo->id }}" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalslider" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalempresedit"><strong>Mi empresa</strong></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="vacantes-form">
                    <form>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Orden :</label>
                            <input style="width: 100px;text-align: center" class="form-control item" type="text" name="orden" class="form-control" id="username"
                                value="{{ $setempleo->orden }}" maxlength="2">
                        </div>
                        @if ($setempleo->label == 'contadores')
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">icono :</label>
                                <input class="form-control item" type="text" name="icono" class="form-control" id="recipient-name"
                                    value="{{ $setempleo->icono }}" required>
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">TITULO :</label>
                                <textarea size="400" type="text" name="titulo"
                                    class="form-control text-justify ckeditor" id="recipient-name"
                                    rows="5">{!! $setempleo->titulo !!}</textarea>
                            </div>
                        @endif
                        @if ($setempleo->label == 'contadores')
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">numero:</label>
                                <input class="form-control item" type="text" name="numero" class="form-control" id="recipient-name"
                                    value="{{ $setempleo->numero }}" required>
                            </div>
                        @endif
                        @if ($setempleo->label != 'banner')
                        <div class="form-outline">
                            <label for="recipient-name" class="col-form-label">DESCRIPCION:</label>
                            <textarea size="400" type="text" name="description"
                                class="form-control text-justify ckeditor" id="recipient-name"
                                rows="5">{!! $setempleo->description !!}</textarea>
                        </div>
                        @endif
                        @if ($setempleo->label != 'contadores')
                            <div class="form-group cold-md-6">
                                <label>Imagen</label>
                                <br>
                                {{ Form::file('image') }}
                                @if ($setempleo->image != '')
                                    <img src="{{ asset('/img/empleo/' . $setempleo->image) }}"
                                        alt="{{ $setempleo->name }}" height="300px" width="50px"
                                        class="card-img-top">
                                @endif
                            </div>
                        @endif
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">CERRAR</button>
                <button type="submit" class="btn btn-primary">GUARDAR</button>
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
