{!! Form::open(['action' => ['VacanteController@update', $getvacante->id], 'method' => 'PATCH', 'files' => 'true']) !!}
{{ Form::token() }}
<div class="modal fade" id="editvacante-{{ $getvacante->id }}" tabindex="-1" role="dialog"
    aria-labelledby="myModalLabel" aria-hidden="true">
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
                                value="{{ $getvacante->titulo }}" placeholder="Titulo">
                        </div>
                        <div class="form-group">
                            <textarea name="texto" class="form-control item" 
                                placeholder="Descripcion">{{ $getvacante->texto }}</textarea>
                        </div>
                        <div class="form-group cold-md-6">
                            <label>Imagen</label>
                            <br>
                            {{ Form::file('image') }}
                            @if ($getvacante->image != '')
                                <img src="{{ asset('/img/vacantes/' . $getvacante->image) }}"
                                    alt="{{ $getvacante->name }}" height="300px" width="50px" class="card-img-top">
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="visible">Estatus:</label>
                            <input type="checkbox" name="status" {{ $getvacante->status == 1 ? "checked='checked'" : ''}}> 
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-block create-account">Guardar</button>
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
