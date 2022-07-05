{!! Form::open(['action' => ['PoliticaprivacidadController@update', $politica->id], 'method' => 'PATCH', 'files' => 'true']) !!}
{{ Form::token() }}
<div class="modal fade" id="modalpoliticaedit-{{ $politica->id }}" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalslider" aria-hidden="true">
    <div class="modal-fullscreen" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalempresedit"><strong>Politica de Privacidad</strong></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="vacantes-form">
                    <form>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Orden :</label>
                            <input type="text" name="orden" class="form-control" id="recipient-name" value="{{$politica->orden}}">
                        </div>
                        <div class="form-outline">
                            <label for="recipient-name" class="col-form-label">DESCRIPCION:</label>
                            <textarea size="400" type="text" name="texto"
                                class="form-control text-justify ckeditor" id="recipient-name"
                                rows="35">{!! $politica->texto !!}</textarea>
                        </div>                     
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
