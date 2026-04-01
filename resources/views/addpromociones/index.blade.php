@extends('layouts.app')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="mb-2 row">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark"></h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Promociones</a></li>
                        <li class="breadcrumb-item active">Index</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <div class="content-header">
        <div class="container-fluid">
            <div class="mb-2 row">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark"></h1>
                </div><!-- /.col -->
                <div class="col-sm-12">
                    <button type="button" class="btn btn-success btn-lg btn-block" data-toggle="modal" data-target="#modalCrearPromo">
                        <i class="fa fa-plus-circle"></i>&nbsp;<strong>Agregar Promociones</strong>
                    </button>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <div class="container-fluid px-4 mb-4">
        <div class="row align-items-center">
            <div class="col-md-6 mb-2 mb-md-0">
                <button type="button" class="btn btn-success mr-2">
                    Vigentes <span class="badge badge-light">{{ $countCatalogados }}</span>
                </button> 
                <button type="button" class="btn btn-danger">
                    Expirados <span class="badge badge-light">{{ $countDesatalogados }}</span>
                </button> 
            </div>
            <div class="col-md-6">
                <form action="{{ route('addpromociones.index') }}" method="GET" class="form-inline justify-content-md-end" id="formFiltros">                       
                    {{-- Campos ocultos para mantener las fechas del modal --}}
                    <input type="hidden" name="fecha_desde" id="hidden_fecha_desde" value="{{ $fecha_desde }}">
                    <input type="hidden" name="fecha_hasta" id="hidden_fecha_hasta" value="{{ $fecha_hasta }}">

                    <div class="custom-control custom-checkbox mr-3">
                        <input type="checkbox" class="custom-control-input" id="descatalogados" name="descatalogados" {{ request('descatalogados') ? 'checked' : '' }}>
                        <label class="custom-control-label" for="descatalogados" style="cursor: pointer;">Mostrar expirados</label>                
                    </div>

                    <div class="input-group input-group-sm" style="width: 250px;">
                        <input class="form-control" name="search" type="search" placeholder="Buscar por nombre..." value="{{ $search }}" aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-success" type="submit" id="btnBuscar">
                                <span id="iconBuscar"><i class="fas fa-search"></i></span>
                                <span id="spinnerBuscar" class="spinner-border spinner-border-sm d-none" role="status"></span>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    @if ($search || $fecha_desde || $fecha_hasta)
        <div class="container-fluid px-4 mb-2">
            <div class="alert alert-info py-2 d-flex justify-content-between align-items-center mb-0">
                <span>
                    <i class="fas fa-filter mr-2"></i> 
                    Filtrando por:
                    @if(request('descatalogados')) <span class="badge badge-danger">Expirados</span> @else <span class="badge badge-success">Vigentes</span> @endif
                    @if($search) | Nombre: <strong>'{{ $search }}'</strong> @endif
                    @if($fecha_desde) | Desde: <strong>{{ $fecha_desde }}</strong> @endif
                    @if($fecha_hasta) | Hasta: <strong>{{ $fecha_hasta }}</strong> @endif
                </span>
                <a href="{{ route('addpromociones.index') }}" class="btn btn-sm btn-outline-dark">
                    <i class="fas fa-times mr-1"></i> Limpiar filtros
                </a>
            </div>
        </div>
    @endif
    <div class="container-fluid px-4 mt-2" id="table-container" style="min-height: 300px; transition: opacity 0.3s ease-in-out;">
        @include('addpromociones.table_partial')
    </div>

@endsection

@section('scripts')
    {{-- MODAL PARA AGREGAR PROMOCIONES --}}
    <div class="modal fade" id="modalCrearPromo" tabindex="-1" role="dialog" aria-labelledby="modalCrearPromoLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content border-primary">
                <div class="modal-header">
                    <h5 class="modal-title w-100 text-center font-weight-bold" id="modalCrearPromoLabel">Agregar promociones</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div id="error-container" class="alert alert-danger d-none">
                        <ul id="error-list" class="mb-0 text-left"></ul>
                    </div>
                    
                    <div class="empresa-form text-center">
                        {!! Form::open(['id' => 'formCrearPromo', 'files' => 'true']) !!}                        
                        
                        <div class="form-group mt-2">                            
                            <label for="message-text" class="col-form-label">Selecciona una Imagen * :</label>
                            {{ Form::file('image', ['required' => 'required', 'class'=>'empresa_input', 'id'=>'inputImagen']) }}
                            <div class="mt-2 mb-0 row justify-content-center">
                                <div id="placeholderIcon" style="width: 150px; height: 150px; display: flex; align-items: center; justify-content: center; background: #f8f9fa; border: 1px dashed #ccc; border-radius: 8px;">
                                    <i class="fas fa-image fa-3x text-muted"></i>
                                </div>
                                <img id="previewImagen" src="" alt="Imagen" height="150" width="150" style="display: none; object-fit: contain; border: 1px dashed #ccc; border-radius: 8px;" />
                            </div>                       
                        </div>

                        <div class="form-group">
                            <label class="control-label" for="categoria_id">CATEGORIAS *</label>
                            {!! Form::select('categoria_id', $categorias, null, ['class' => 'empresa_input', 'placeholder' => 'Elige una categoria de promocion', 'required']) !!}
                        </div>                    

                        <div class="input-container">
                            <input type="text" name="titulo" class="empresa_input" placeholder="Titulo*" required>
                        </div>                                          

                        <div class="input-container">
                            <textarea name="texto" class="empresa_input" placeholder="Descripcion (Opcional)" cols="40" rows="4" style="resize: both; min-height: auto !important;"
                                onkeyup="countCharsModal(this);"></textarea>
                            <p id="charNumModal" class="text-success text-center">0 caracteres</p>
                        </div>                        

                        <div class="row">
                            <div class="col-6 pr-1">
                                <label class="d-block">FECHA INICIO</label>
                                <input type="date" name="fechaInicio" class="empresa_input" value="{{ date('Y-m-01') }}" required>
                            </div>
                            <div class="col-6 pl-1">
                                <label class="d-block">FECHA FIN </label>
                                <input type="date" name="fechaFin" class="empresa_input" value="{{ date('Y-m-t') }}" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="visible">Oferta Exclusiva: </label>
                            {!! Form::checkbox('deldia', 1, false, ['id' => 'switchExclusiva']) !!}
                        </div>

                        <hr>

                        <div class="form-group">
                            <button type="submit" id="btnGuardarPromo" class="btn btn-outline-success">
                                <span id="btnText">Guardar</span>
                                <span id="btnLoader" class="spinner-border spinner-border-sm d-none" role="status"></span>
                            </button>
                            <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Cancelar</button>
                        </div>

                        {!! Form::close() !!}
                    </div>             
                </div>
            </div>
        </div>
    </div>

    {{-- Modal para Filtros de Expirados --}}
    <div class="modal fade" id="modalFiltroExpirados" tabindex="-1" role="dialog" aria-labelledby="modalFiltroTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered shadow-lg" role="document">
            <div class="modal-content border-danger">
                <div class="modal-header bg-danger text-white">
                    <h5 class="modal-title" id="modalFiltroTitle">
                        <i class="fas fa-history mr-2"></i> Filtrar Promociones Expiradas
                    </h5>
                    <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body py-4 bg-light text-center">
                    <div class="px-3">
                        <p class="text-dark small mb-3">
                            <i class="fas fa-info-circle mr-1"></i>
                            Selecciona un periodo de tiempo para ver los resultados o pulsa el botón de abajo para ver todo el historial.
                        </p>
                        
                        <div class="row">
                            <div class="col-6">
                                <label class="font-weight-bold text-sm">Desde:</label>
                                <input type="date" id="modal_fecha_desde" class="form-control" value="{{ date('Y-01-01') }}">
                            </div>
                            <div class="col-6">
                                <label class="font-weight-bold text-sm">Hasta:</label>
                                <input type="date" id="modal_fecha_hasta" class="form-control" value="{{ date('Y-m-d') }}">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer bg-white border-top justify-content-between">
                    <button type="button" class="btn btn-secondary btn-sm" id="btnVerTodo">
                        <i class="fas fa-list-ul mr-1"></i> Ver todos los registros
                    </button>
                    <button type="button" class="btn btn-danger px-4" id="btnFiltrarRango">
                        <i class="fas fa-search mr-1"></i> Filtrar por rango
                    </button>
                </div>
            </div>
        </div>
    </div>

    {{-- SCRIPTS PARA EL MODAL Y AJAX --}}
    <script src="https://cdn.jsdelivr.net/npm/sortablejs@latest/Sortable.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script>
        // Función para contar caracteres en el modal
        function countCharsModal(obj) {
            document.getElementById("charNumModal").innerHTML = obj.value.length + ' caracteres';
        }

        document.addEventListener('DOMContentLoaded', function() {
            // Lógica para el filtro de expirados
            const checkExpirados = document.getElementById('descatalogados');
            const btnBuscar = document.getElementById('btnBuscar');
            const iconBuscar = document.getElementById('iconBuscar');
            const spinnerBuscar = document.getElementById('spinnerBuscar');
            const formFiltros = document.getElementById('formFiltros');
            const modalExpirados = $('#modalFiltroExpirados');
            const tableContainer = document.getElementById('table-container');

            // Función Maestra para Cargar Promociones vía AJAX
            function fetchPromos(url = "{{ route('addpromociones.index') }}") {
                // Feedback visual de carga
                tableContainer.style.opacity = '0.5';
                if(btnBuscar) btnBuscar.disabled = true;
                if(iconBuscar) iconBuscar.classList.add('d-none');
                if(spinnerBuscar) spinnerBuscar.classList.remove('d-none');

                const params = {
                    search: formFiltros.querySelector('input[name="search"]').value,
                    descatalogados: checkExpirados.checked ? 'on' : '',
                    fecha_desde: document.getElementById('hidden_fecha_desde').value,
                    fecha_hasta: document.getElementById('hidden_fecha_hasta').value
                };

                axios.get(url, { params: params, headers: { 'X-Requested-With': 'XMLHttpRequest' } })
                    .then(res => {
                        tableContainer.innerHTML = res.data.table;
                        tableContainer.style.opacity = '1';
                        
                        // Reactivar botones
                        if(btnBuscar) {
                            btnBuscar.disabled = false;
                            iconBuscar.classList.remove('d-none');
                            spinnerBuscar.classList.add('d-none');
                        }
                        if(checkExpirados) checkExpirados.disabled = false;

                        // Re-inicializar Sortable si es necesario tras el cambio de DOM
                        initSortable();
                    })
                    .catch(err => {
                        console.error('Error cargando promociones:', err);
                        tableContainer.style.opacity = '1';
                    });
            }

            // Paginación AJAX: Escuchar clics en los enlaces de la tabla
            $(document).on('click', '#pagination-links a', function(e) {
                e.preventDefault();
                const url = $(this).attr('href');
                if (url) fetchPromos(url);
            });

            if(checkExpirados) {
                checkExpirados.addEventListener('change', function() {
                    if (this.checked) {
                        modalExpirados.modal('show');
                    } else {
                        document.getElementById('hidden_fecha_desde').value = '';
                        document.getElementById('hidden_fecha_hasta').value = '';
                        fetchPromos();
                    }
                });

                modalExpirados.on('hidden.bs.modal', function () {
                    const urlParams = new URLSearchParams(window.location.search);
                    if (!urlParams.has('descatalogados') && checkExpirados.checked) {
                        checkExpirados.checked = false;
                    }
                });
            }

            if(formFiltros) {
                formFiltros.addEventListener('submit', function(e) {
                    e.preventDefault();
                    fetchPromos();
                });

                const inputSearch = formFiltros.querySelector('input[name="search"]');
                let typingTimer;
                if(inputSearch) {
                    inputSearch.addEventListener('input', function() {
                        clearTimeout(typingTimer);
                        typingTimer = setTimeout(() => {
                            fetchPromos();
                        }, 500);
                    });
                }
            }

            const btnVerTodo = document.getElementById('btnVerTodo');
            if(btnVerTodo) {
                btnVerTodo.addEventListener('click', function() {
                    document.getElementById('hidden_fecha_desde').value = '';
                    document.getElementById('hidden_fecha_hasta').value = '';
                    modalExpirados.modal('hide');
                    fetchPromos();
                });
            }

            const btnFiltrarRango = document.getElementById('btnFiltrarRango');
            if(btnFiltrarRango) {
                btnFiltrarRango.addEventListener('click', function() {
                    document.getElementById('hidden_fecha_desde').value = document.getElementById('modal_fecha_desde').value;
                    document.getElementById('hidden_fecha_hasta').value = document.getElementById('modal_fecha_hasta').value;
                    modalExpirados.modal('hide');
                    fetchPromos();
                });
            }

            // Sortable encapsulado en una función para re-inicializarlo tras AJAX
            function initSortable() {
                var el = document.getElementById('lista');
                if (el) {
                    Sortable.create(el, {
                        animation: 150,
                        chosenClass: "seleccionado",
                        dragClass: "drag",
                        onEnd: () => { console.log('Orden actualizado'); },
                        group: "lista-personas",
                        store: {
                            set: (sortable) => {
                                const orden = sortable.toArray();
                                axios.post("{{ route('dragandrop.sort') }}", { sorts: orden })
                                     .catch(err => console.error(err));
                            }
                        }
                    });
                }
            }
            initSortable();

            // Previsualización en modal
            const inputImg = document.getElementById('inputImagen');
            const previewImg = document.getElementById('previewImagen');
            const placeholderIcon = document.getElementById('placeholderIcon');
            if(inputImg) {
                inputImg.addEventListener('change', function() {
                    const file = this.files[0];
                    if (file) {
                        const reader = new FileReader();
                        reader.onload = e => {
                            previewImg.src = e.target.result;
                            previewImg.style.display = 'block';
                            if(placeholderIcon) placeholderIcon.style.display = 'none';
                        };
                        reader.readAsDataURL(file);
                    }
                });
            }

            // AJAX Submit
            const form = document.getElementById('formCrearPromo');
            const btn = document.getElementById('btnGuardarPromo');
            const btnText = document.getElementById('btnText');
            const btnLoader = document.getElementById('btnLoader');
            const errorContainer = document.getElementById('error-container');
            const errorList = document.getElementById('error-list');

            if(form) {
                form.addEventListener('submit', function(e) {
                    e.preventDefault();
                    
                    btn.disabled = true;
                    btnText.innerText = 'Guardando...';
                    btnLoader.classList.remove('d-none');
                    errorContainer.classList.add('d-none');
                    errorList.innerHTML = '';

                    const formData = new FormData(this);

                    axios.post("{{ route('addpromociones.store') }}", formData)
                        .then(res => {
                            if(res.data.success) {
                                window.location.reload(); 
                            }
                        })
                        .catch(err => {
                            btn.disabled = false;
                            btnText.innerText = 'Guardar';
                            btnLoader.classList.add('d-none');
                            errorContainer.classList.remove('d-none');
                            
                            if(err.response && err.response.data.errors) {
                                Object.values(err.response.data.errors).forEach(e => {
                                    const li = document.createElement('li');
                                    li.innerText = e[0];
                                    errorList.appendChild(li);
                                });
                            } else {
                                const li = document.createElement('li');
                                li.innerText = 'Ocurrió un error inesperado.';
                                errorList.appendChild(li);
                            }
                        });
                });
            }
        });
    </script>
@endsection
