<div class="table-responsive">
    <table class="table table-striped table-bordered table-hover w-100">
        <thead>
            <tr style="text-align: center">
                <th style="width: 40px" scope="col">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="select-all-promos">
                        <label class="custom-control-label" for="select-all-promos"></label>
                    </div>
                </th>
                <th style="width: 80px" scope="col">Editar</th>
                <th style="width: 80px" scope="col">Eliminar</th>
                <th style="width: 170px" scope="col">Imagen</th>
                <th scope="col">Nombre</th>
                <th scope="col">Tiempo de vigencia</th>
                <th scope="col">Estado</th>
                <th scope="col">Oferta exclusiva</th>
                <th scope="col">Descripcion</th>
            </tr>
        </thead>
        <tbody class="lista" id="lista">
            @foreach ($ofertas as $oferta)
                <tr style="text-align: center" data-id="{{ $oferta->id }}">
                    <td>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input promo-checkbox" id="check-{{ $oferta->id }}" value="{{ $oferta->id }}">
                            <label class="custom-control-label" for="check-{{ $oferta->id }}"></label>
                        </div>
                    </td>
                    <td>
                        <a href="{{ URL::route('addpromociones.edit', $oferta->id) }}">
                            <button type="button" class="btn btn-warning">
                                <i class="far fa-edit"></i>
                            </button>
                        </a>
                    </td>
                    <td>
                        {!! Form::open(['route' => ['addpromociones.destroy', $oferta->id], 'method' => 'DELETE']) !!}
                        {{ Form::token() }}
                        <button class="btn btn-danger"
                            onclick="return confirm('Estas Seguro de Eliminar la promoción?')">
                            <i class="far fa-trash-alt"></i>
                        </button>
                        {!! Form::close() !!}
                    </td>
                    <td>
                        @if($oferta->image)
                            <div class="image-wrapper" style="position: relative; width: 150px; height: 150px;">
                                <img src="{{ asset('img/ofertas/' . str_replace(' ', '%20', $oferta->image)) }}" 
                                    alt="{{ $oferta->image }}"
                                    width="150" height="150" 
                                    style="object-fit: contain; border-radius: 8px; border: 1px solid #ddd;"
                                    onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                                
                                {{-- Este div se mostrará SOLO si la imagen falla (404) --}}
                                <div class="text-muted placeholder-error" style="display: none; width: 150px; height: 150px; align-items: center; justify-content: center; background: #f8f9fa; border-radius: 8px; border: 1px dashed #ccc;">
                                    <div class="text-center">
                                        <i class="fas fa-image fa-2x d-block"></i>
                                        <small style="font-size: 10px;">No encontrada</small>
                                    </div>
                                </div>
                            </div>
                        @else
                            <div class="text-muted" style="width: 150px; height: 150px; display: flex; align-items: center; justify-content: center; background: #f8f9fa; border-radius: 8px; border: 1px solid #eee;">
                                <i class="fas fa-image fa-2x"></i>
                            </div>
                        @endif
                    </td>
                    <td>{{ $oferta->titulo }}</td>
                    <td style="text-align: center"><strong>{{ $oferta->fechaInicio }} <br> a <br>
                            {{ $oferta->fechaFin }}</strong></td>
                    <td>
                        @if ($oferta->fechaFin >= date('Y-m-d'))
                            <p style="color: #00C851" class="card-text"><strong>Activo</strong><small
                                    class="text-muted"></small></p>
                        @else
                            <p style="color: #ff4444" class="card-text"><strong>Expirado</strong><small
                                    class="text-muted"></small></p>
                        @endif
                    </td>
                    <td>
                        @if ($oferta->deldia == '1')
                            <div>
                                <p style="color: #ffbb33" class="card-text"><strong>Exclusivo</strong><small
                                        class="text-muted"></small></p>
                            </div>
                        @endif
                    </td>
                    <td>{{ $oferta->texto }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
<div class="d-flex justify-content-center mt-3" id="pagination-links">
    {{ $ofertas->appends(request()->except('page'))->links() }}
</div>
