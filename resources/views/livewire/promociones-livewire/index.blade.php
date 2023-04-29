<div>
    <div class="container">
        <div class="row {{-- d-flex justify-content-between ml-0 --}}">
            <div class="col-lg-6 col-md-6 col-sm-12 mt-3">                
                {{-- @if (!$categoriaBuscar) --}}
                <input wire:model="search" type="search" class="promociones_input search-slt" placeholder="Buscar">   
                {{-- @endif --}}
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 mt-3 {{-- p-0 mr-3 mt-3 styleSelect --}}">
                {{-- @if (count($promo) > 0) --}}
                {{-- <div class="col-lg-6 col-md-6 col-sm-12 p-0 mr-3 mt-3 styleSelect"> --}}
                    <select wire:model='categoriaBuscar' class="promociones_input search-slt" id="category_filter"
                        name="category">
                        @if ($categoriaBuscar)
                            <option>TODOS</option>
                        @else
                            <option>FILTRE POR DEPARTAMENTO</option>
                        @endif
                        @foreach ($categorias as $itemCategoria)
                            <option {{-- class="promociones_input" --}} value="{{ $itemCategoria['id'] }}"
                                {{ $categoriaBuscar == $itemCategoria['id'] ? 'selected="selected"' : '' }}>
                                {{ $itemCategoria['name'] }}</option>
                        @endforeach
                    </select>
                {{-- </div> --}}
                {{-- @endif --}}
            </div>           
        </div>
    </div>

    <div {{-- data-aos="fade-up"  --}}class="container_cards_promo">
        <div class="row_cards_promo">
            @foreach ($promo as $oferta)
                <div {{-- data-aos="zoom-in" --}} class="col-md-3 col-sm-6 mb-3">
                    <div class="{{-- single-contentpromo --}} clic_abre_modal"> {{-- la parte comentada borde la tarjeta y le pone sombra --}}
                        <img id="get_image_promo"
                            class="popou_img_promo"src="{{ asset('/img/ofertas/' . $oferta->image) }}"
                            alt="{{ $oferta->image }}">
                        <div class="text-contentpromo">
                            {{-- <h3><strong><h2 class=" frm_pagos text-center">{{$oferta->titulo}}</h2></strong> </h3> --}}
                            {{-- <h3><strong><h2 class="frm_pagos_promo text-center">{{$oferta->texto}}</h2></strong> </h3> --}}
                            {{-- <hr class="style2"> --}}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
<style>
    .select option {
			border: none;
			outline: none;
			font-size: 18px;
			padding: 5px 55px 5px 5px;
			background-color: slategray;
			color: white;
			-webkit-appearance: none; /* for Safari */
			margin: 0;
			border-radius: 15%;}
</style>