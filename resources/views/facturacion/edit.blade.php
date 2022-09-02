{!! Form::open([
    'action' => ['FacturacionPageController@update', $setFacturacion->id],
    'method' => 'PATCH',
    'files' => 'true',
]) !!}
{{ Form::token() }}
<div class="modal fade" id="editFacturacion-{{ $setFacturacion->id }}" tabindex="-1" role="dialog"
    aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalslider"><strong>ACTUALIZAR INFORMACION</strong></h5>
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
                                class="form-control item" id="username" value="{{ $setFacturacion->orden }}"
                                placeholder="Orden" maxlength="2">
                        </div>
                        {{-- <div class="form-group text-cemter">
                            <input  type="text" name="label" class="form-control item" id="username"
                                value="tarjeta" readonly>
                        </div> --}}
                        @if ($setFacturacion->label == 'titulo')
                            <div class="form-group">
                                <input type="text" name="titulo" class="form-control item" id="username"
                                    value="{{ $setFacturacion->titulo }}" placeholder="Titulo">
                            </div>
                        @elseif($setFacturacion->label == 'textoImagen')
                            <div class="form-group">
                                <textarea name="description" class="empresa_input form-control input ckeditor form-control" placeholder="Descripcion">{{ $setFacturacion->description }}</textarea>
                            </div>
                            <div class="form-group cold-md-6">
                                <label>Imagen</label>
                                <br>
                                {{ Form::file('image') }}
                                @if ($setFacturacion->image != '')
                                    <img src="{{ asset('/img/facturacion/' . $setFacturacion->image) }}"
                                        alt="{{ $setFacturacion->name }}" height="300px" width="50px"
                                        class="card-img-top">
                                @endif
                            </div>
                        @elseif($setFacturacion->label == 'banner')
                            <div class="form-group cold-md-6">
                                <label>Imagen</label>
                                <br>
                                {{ Form::file('image') }}
                                @if ($setFacturacion->image != '')
                                    <img src="{{ asset('/img/facturacion/' . $setFacturacion->image) }}"
                                        alt="{{ $setFacturacion->name }}" height="300px" width="50px"
                                        class="card-img-top">
                                @endif
                            </div>
                        @elseif($setFacturacion->label == 'subtitulo')
                            <div class="form-group">
                                <textarea name="subtitulo" class="empresa_input form-control input ckeditor form-control" placeholder="Subititulo">{{ $setFacturacion->subtitulo }}</textarea>
                            </div>
                        @elseif($setFacturacion->label == 'boton')
                        <div class="form-group">
                            <input type="text" name="titulo" class="form-control item" id="username"
                                value="{{ $setFacturacion->titulo }}" placeholder="Titulo">
                        </div>
                        <div class="form-group">
                            <textarea name="subtitulo" class="empresa_input form-control input form-control" placeholder="Subititulo">{{ $setFacturacion->subtitulo }}</textarea>
                        </div>
                        @endif

                        <div class="form-group">
                            <div class="form-group text-center justify-content-md-center">
                                <button type="submit" class="btn cancel" data-dismiss="modal">cancelar</button>
                                <button type="submit" class="btn create-account">Guardar</button>
                            </div>
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
