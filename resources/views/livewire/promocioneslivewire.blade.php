<div class="px-3 px-md-5 mx-md-4">
    <div class="container-fluid py-3">
        <div class="row justify-content-center">
            <div class="col-lg-5 col-md-6 mb-3">
                <div class="promo-search-wrap">
                    <i class="fas fa-search promo-icon"></i>
                    <input wire:model.live.debounce.300ms="search" type="search"
                        class="form-control form-control-lg promo-search-input"
                        placeholder="Buscar promoci&oacute;n...">
                </div>
            </div>
            <div class="col-lg-5 col-md-6 mb-3">
                <div class="promo-search-wrap">
                    <i class="fas fa-th-large promo-icon"></i>
                    <select wire:model.live='categoriaBuscar'
                        class="form-control form-control-lg promo-search-input promo-select-input">
                        <option value="">{{ $categoriaBuscar ? 'TODOS' : 'FILTRE POR DEPARTAMENTO' }}</option>
                        @foreach ($categorias as $itemCategoria)
                            <option value="{{ $itemCategoria['id'] }}"
                                {{ $categoriaBuscar == $itemCategoria['id'] ? 'selected' : '' }}>
                                {{ $itemCategoria['name'] }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
    </div>

    @if (count($promo) > 0)
        <div class="container-fluid pb-4">
            <div class="row">
                @foreach ($promo as $oferta)
                    <div class="col-lg-3 col-md-4 col-6 mb-4">
                        <div class="promo-card-wrap clic_abre_modal">
                            <img loading="lazy" class="promo-img-card"
                                src="{{ asset('img/ofertas/' . str_replace(' ', '%20', $oferta->image)) }}"
                                alt="{{ $oferta->titulo ?? 'Promoci&oacute;n' }}">
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @else
        <div class="container-fluid">
            <div class="text-center py-5">
                <i class="fas fa-search fa-3x text-muted mb-3 d-block"></i>
                <h5 class="text-muted">No se encontraron promociones</h5>
                @if ($search || $categoriaBuscar)
                    <p class="text-muted">Intenta con otros filtros de b&uacute;squeda</p>
                @endif
            </div>
        </div>
    @endif
</div>
</div>
