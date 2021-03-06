{!! Form::open(['action' => ['IndexsettingController@update', $getsetting->id], 'method' => 'PATCH', 'files' => 'true']) !!}
{{ Form::token() }}
<div class="modal fade" id="modalsetting-{{ $getsetting->id }}" tabindex="-1" role="dialog"
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
                                class="form-control item" id="username" value="{{ $getsetting->orden }}"
                                placeholder="Orden" maxlength="2">
                        </div>
                        {{-- <div class="form-group text-cemter">
                            <input  type="text" name="label" class="form-control item" id="username"
                                value="tarjeta" readonly>
                        </div> --}}
                        <div class="form-group">
                            <input type="text" name="titulo" class="form-control item" id="username"
                                value="{{ $getsetting->titulo }}" placeholder="Titulo">
                        </div>
                        @if ($getsetting->label != 'imagenfooter')
                            <div class="form-group">
                                <textarea name="description" class="form-control item"
                                    placeholder="Descripcion">{{ $getsetting->description }}</textarea>
                            </div>
                        @endif
                        @if ($getsetting->label == 'imagenfooter')
                            <div class="form-group cold-md-6">
                                <label>Imagen</label>
                                <br>
                                {{ Form::file('image') }}
                                @if ($getsetting->image != '')
                                    <img src="{{ asset('/img/imagenfooter/' . $getsetting->image) }}"
                                        alt="{{ $getsetting->name }}" height="300px" width="50px"
                                        class="card-img-top">
                                @endif
                            </div>
                        @endif

                        @switch($getsetting)
                            @case($getsetting->label == 'tarjeta')
                                <div class="form-group">
                                    <input type="text" name="icono" class="form-control item" id="username"
                                        value="{{ $getsetting->icono }}" placeholder="Icono">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="titulobtn" class="form-control item" id="username"
                                        value="{{ $getsetting->titulobtn }}" placeholder="Titulo boton">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="redireccion" class="form-control item" id="username"
                                        value="{{ $getsetting->redireccion }}" placeholder="Pagina a redireccionar">
                                    <div style="margin-top: -25px" class="d-flex flex-column text-center"> <small
                                            class="agree-text">promociones, nosotros, empleo, mapa, contact. MODAL:
                                            ofertaexclusiva, delivery</small> </div>
                                </div>
                                <div class="form-group">
                                    <label for="modal">Activa si la pagina a redireccionar es un Modal:</label>
                                    <input type="checkbox" name="modal"
                                        {{ $getsetting->modal == 1 ? "checked='checked'" : '' }}>
                                </div>
                            @break
                            @case($getsetting->label != 'tarjeta')
                            @if ($getsetting->label != 'imagenfooter')
                                <select name="style" class="form-select form-select-lg mb-3"
                                    aria-label=".form-select-lg example">
                                    <option selected>Selecciona un color</option>
                                    <option value="estiloamarillo" @if ($getsetting->style == 'estiloamarillo') selected @endif>estiloamarillo</option>
                                    <option value="estilonaranja" value="estilonaranja" @if ($getsetting->style == 'estilonaranja') selected @endif>
                                        estilonaranja</option>
                                    <option value="estiloazul" value="estiloazul" value="estiloazul"
                                        @if ($getsetting->style == 'estiloazul') selected @endif>estiloazul</option>
                                </select>
                            @break
                            @endif
                            @default
                        @endswitch
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
