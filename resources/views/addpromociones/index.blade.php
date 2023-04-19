@extends('layouts.app')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
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
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark"></h1>
                </div><!-- /.col -->
                <div class="col-sm-12">
                    <a href="{{ route('addpromociones.create') }}" class="btn btn-success btn-lg btn-block">
                        <i class="fa fa-plus-circle"> Agregar Promociones</i>
                    </a>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <div class="container">
        <form class="form-inline ml-3 float-right">
            <div class="input-group input-group-sm">
                <input class="form-control form-control-navbar" name="search" type="search" placeholder="Buscar"
                    aria-label="Search">
                <div class="input-group-prepend">
                    <button class="input-group-text" type="submit">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </div>
        </form>
    </div>
    @if ($search)
        <div class="alert alert-warning alert-dismissible fade show mt-5" role="alert">
            El resultado de la busqueda de <strong>'{{ $search }}'</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    <div class="container mt-5">
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr style="text-align: center">
                        <th scope="col">Editar</th>
                        <th scope="col">Eliminar</th>
                        <th scope="col">Imagen</th>
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
                                <a href="{{ URL::action('PublicofertController@edit', $oferta->id) }}">
                                    <button type="button" class="btn btn-warning">
                                        <i class="far fa-edit"></i>
                                    </button>
                                </a>
                            </td>
                            <td>
                                {!! Form::open(['action' => ['PublicofertController@destroy', $oferta->id], 'method' => 'DELETE']) !!}
                                {{ Form::token() }}
                                <button class="btn btn-danger"
                                    onclick="return confirm('Estas Seguro de Eliminar la promoción?')">
                                    <i class="far fa-trash-alt"></i>
                                </button>
                                {!! Form::close() !!}
                            </td>
                            <td>
                                <img src="{{ asset('/img/ofertas/' . $oferta->image) }}" alt="{{ $oferta->image }}"
                                    width="150" height="150">
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
    </div>

    {{-- ENVIA LAS POSISIONES AL HACER DRAG AND DROP AL CONTROLADOR --}}
    <script src="https://cdn.jsdelivr.net/npm/sortablejs@latest/Sortable.min.js"></script>
    <script>
        /* var lista = document.getelementId() */
        Sortable.create(lista, {
            animation: 150,
            chosenClass: "seleccionado",
            // ghostClass: "fantasma"
            dragClass: "drag",

            onEnd: () => {
                console.log('Se inserto un elemento');
            },
            group: "lista-personas",
            store: {
                // Guardamos el orden de la lista
                set: (sortable) => {
                    const orden = sortable.toArray();
                    /* localStorage.setItem(sortable.options.group.name, orden.join('|')); */
                    /* console.log(orden) */
                    axios.post("{{ route('dragandrop.sort') }}", {
                        sorts: orden
                    }).catch(function(error) {
                        console.log(error)
                    });
                },

                // Obtenemos el orden de la lista en el localStorage
                get: (sortable) => {
                    const orden = localStorage.getItem(sortable.options.group.name);
                    console.log("Se obtuvo el array" + orden)
                    return orden ? orden.split('|') : [];
                }
            }
        });
    </script>
@endsection
