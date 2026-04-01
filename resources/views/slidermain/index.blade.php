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
                        <li class="breadcrumb-item"><a href="#">Slider</a></li>
                        <li class="breadcrumb-item active">Index</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    @include('slidermain.slidermodal')
    <style>
        /* Ocultar avisos de seguridad de CKEditor */
        .cke_notification_warning, 
        .cke_notification_info,
        .cke_notifications_area { 
            display: none !important; 
        }
    </style>
    <div class="content-header">
        <div class="conten-fluido">
            <div class="row">
                 @foreach ($slider as $slideradd)
                    @include('slidermain.modaledit')
                    @include('slidermain.modaldelete')
                    <div class="col-md-6 mb-4">
                        <div style="background: #fff; border-radius: 12px; border: 2px solid #adb5bd; box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075); overflow: hidden; height: 100%;">
                            <div id="carousel-{{ $slideradd->id }}" class="carousel slide titlesli" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active" style="min-height: 250px; display: flex; align-items: center; justify-content: center; background: #eee;">
                                        @if($slideradd->image != '' && file_exists(public_path('img/slider/' . $slideradd->image)))
                                            <img class="d-block w-100" src="{{ asset('/img/slider/' . $slideradd->image) }}"
                                                alt="Slide" style="object-fit: cover; height: 250px;">
                                        @else
                                            <div class="placeholder-sliderView" style="display: flex; width: 100%; height: 250px; align-items: center; justify-content: center; background: #f8f9fa; flex-direction: column;">
                                                <i class="fas fa-image fa-3x text-muted"></i>
                                                <small class="text-muted mt-2">Imagen no encontrada</small>
                                            </div>
                                        @endif

                                        @if(trim(strip_tags($slideradd->description)) != '')
                                            <div style="background-color: rgba(0, 0, 0, .5)" class="carousel-caption">
                                                <h5>{!! $slideradd->description !!}</h5>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <h3 class="h5 font-weight-bold">{{ $slideradd->name }}</h3>
                                <p class="mb-1"><strong>Inicio:</strong> {{ date('d/m/Y', strtotime($slideradd->fechaInicio)) }}</p>
                                <p class="mb-0"><strong>Fin:</strong> {{ date('d/m/Y', strtotime($slideradd->fechaFin)) }}</p>
                            </div>
                            <div class="card-footer bg-white border-top-0">
                                <button type="button" class="btn btn-warning btn-sm" data-toggle="modal"
                                    data-target="#modaledit-{{ $slideradd->id }}">
                                    <i class="far fa-edit"></i> Editar
                                </button>
                                <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                                    data-target="#modaldeleteslider-{{ $slideradd->id }}">
                                    <i class="far fa-trash-alt"></i> Eliminar
                                </button>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection

@section('scripts')
    <script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>
    {{-- script de seleccion se SELECT SLIDER --}}
    <script>
        // Silenciar advertencias específicas de CKEditor en la consola
        (function() {
            var originalWarn = console.warn;
            console.warn = function(message) {
                if (message && (message.indexOf('CKEditor') !== -1 || message.indexOf('secure') !== -1)) return;
                originalWarn.apply(console, arguments);
            };
        })();

        // Verificación de seguridad para jQuery
        (function waitJquery() {
            if (typeof $ !== 'undefined') {
                $(document).ready(function() {
                    // Inicializar CKEditor para cada elemento individualmente para evitar conflictos de ID
                    $('.ckeditor').each(function() {
                        var editorId = $(this).attr('id');
                        if (editorId && !CKEDITOR.instances[editorId]) {
                            CKEDITOR.replace(editorId, {
                                versionCheck: false,
                                notification_enabled: false
                            });
                        }
                    });

                    $('[data-select="multiple"]').each(function() {
                        var $select = $(this)
                        $mselect = $('<div class="mselect"></div>');

                        $select.hide();

                        var $opts = $select.find('option');

                        $select.after($mselect);
                        $opts.each(function(i, opt) {
                            $mselect.append('<a href="#" class="mselect-opt" data-idx="' + i +
                                '"><i class="icon-ok  icon-white pull-right"></i>' + $(opt).text() + '</a>');
                        });
                    });

                    $(document).on('click', '.mselect-opt', function(event) {
                        event.preventDefault();
                        var $parent = $(this).parents('.mselect'),
                            $opts = $parent.find('.mselect-opt'),
                            $ogselect = $parent.prev('select'),
                            idx = $(this).data('idx'),
                            $ogopt = $ogselect.find('option').eq(idx);

                        $(this).toggleClass('selected');
                        var val = !$ogopt.is(':selected') ? 'selected' : '';

                        $ogopt.prop('selected', val);
                    });
                });
            } else {
                setTimeout(waitJquery, 100);
            }
        })();
    </script>

