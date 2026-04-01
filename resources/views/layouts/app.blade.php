<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="imagenes" href="{{ asset('img/favicon.ico') }}">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Dashboard</title>    
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free-6.3.0-web/css/all.min.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="dns-prefetch" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

    <!-- Styles -->
    <link href="{{ asset('dist/css/adminlte.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/dashboard/styledash.css') }}" rel="stylesheet">

    @livewireStyles
</head>

<body class="hold-transition sidebar-mini layout-fixed">

    <div {{-- id="app" --}}>
        <div class="wrapper">
            <!-- Navbar -->
            <nav class="main-header navbar navbar-expand navbar-white navbar-light">
                <!-- Left navbar links -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
                    </li>
                </ul>
                <!-- Right navbar links -->
                <ul class="ml-auto navbar-nav">
                    <!-- Notifications Dropdown Menu -->
                    <li class="nav-item dropdown">
                        {{-- <a class="nav-link" data-toggle="dropdown" href="#">
                            <i class="fas fa-power-off"></i>
                            <span class="badge badge-warning navbar-badge">1</span>
                        </a> --}}
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                            {{-- <span class="dropdown-item dropdown-header">Mi perfil</span> --}}
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">
                                <i class="mr-2 fas fa-envelope"></i> Ver mi perfil
                                {{-- <span class="float-right text-sm text-muted">3 mins</span> --}}
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">
                                <i class="mr-2 fas fa-users"></i> Ver usuarios
                                {{-- <span class="float-right text-sm text-muted">12 hours</span> --}}
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="" href=" {{ route('logout') }}"
                                onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                                <button type="button" class="btn btn-outline-danger btn-lg btn-block">Cerrar
                                    Sesión</button>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item dropdown-footer">Gracias por visitar nuestro
                                portal</a>
                        </div>
                    </li>
                    {{--  --}}
                    {{-- <li class="nav-item dropdown">
                        <a class="nav-link" data-toggle="dropdown" href="#">
                            <i class="fas fa-power-off"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                            
                            <a class="" href="{{ route('logout') }}" onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                    <button type="button" class="btn btn-outline-danger btn-lg btn-block">Cerrar Sesión</button>
                                </a> 
                            <div class="dropdown-divider"></div>
                            
                        </div>
                    </li> --}}
                </ul>
            </nav>
            <!-- /.navbar -->

            <!-- Main Sidebar Container -->
            <aside class="main-sidebar bg-light elevation-4">
                <!-- Brand Logo estaba antes -->
                <a href="{{ url('/') }}" class="brand-link">
                    <img src="{{ asset('dist/img/logop.png') }}" alt="PLUS" class="brand-image img-circle"
                        style="opacity: .8">
                    <span class="brand-text font-weight-light"><strong>SuperPlus</strong></span>
                </a>


                {{-- logo plus agregado --}}
                {{-- <div class="image">
                    <img src="{{ asset('dist/img/logo.jpg')}}" alt="User Image" width="190px" height="30px">
                </div> --}}
                <!-- Sidebar -->
                <div class="sidebar">
                    <!-- Sidebar user panel (optional) -->
                    <div class="pb-3 mt-3 mb-3 user-panel d-flex">
                        <div>
                            <img src="{{ asset('img/log.jpg') }}" class="img-circle elevation-2" alt="User_Image" class="mr-5" style="float:left;">
                            <h4 class="text-md">&nbsp; {{  Auth::user()->name }}<h4>
                        </div>
                    </div>
                    <div class="dropdown-divider"></div>
                    <!-- Sidebar Menu -->
                    <nav class="mt-2">
                        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                            data-accordion="false">

                            <li class="nav-item ">
                                <a href="{{ url('dashboard') }}"
                                    class="{{ Request::path() === '/dashboard' ? 'nav-link active' : 'nav-link' }}">
                                    <i class="text-warning fas fa-home"></i>
                                    <p>Inicio</p>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a href="{{ url('perfil') }}"
                                    class="{{ Request::path() === 'perfil' ? 'nav-link active' : 'nav-link' }}">
                                    <i class="text-warning fas fa-cogs"></i>
                                    <p>Perfil</p>
                                </a>
                            </li>
                            @can('Administrador')
                                <li class="nav-item textsidebar">
                                    <a href="{{ url('usuarios') }}"
                                        class="{{ Request::path() === 'usuarios' ? 'nav-link active ' : 'nav-link' }}">
                                        <i class="text-warning fas fa-users"></i>
                                        <p>
                                            Usuarios
                                            <span class="right badge badge-danger">{{ $users_count ?? '0' }}</span>
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item admin">
                                    <a href="{{ url('roles') }}"
                                        class="{{ Request::path() === 'roles' ? 'nav-link active' : 'nav-link' }}">
                                        <i class="text-warning fas fa-user-tag"></i>
                                        <p>
                                            Roles
                                        </p>
                                    </a>
                                </li>
                                {{-- ***********************PAGINA PRINCIPAL********************* --}}
                                <li class="nav-item textsidebar">
                                    <a href="#" class="nav-link">
                                        <i class="text-warning fas fa-copy"></i>
                                        <p>
                                            Pagina de Inicio
                                            <i class="fas fa-angle-left right"></i>
                                            <span class="badge badge-info right">6</span>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a href="{{ url('configuracion') }}"
                                                class="{{ Request::path() === 'configuracion' ? 'nav-link active' : 'nav-link' }}">
                                                <i class="nav-icon fas fa-cogs"></i>
                                                <p>
                                                    Configuracion
                                                </p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ url('slidermain') }}"
                                                class="{{ Request::path() === 'slidermain' ? 'nav-link active' : 'nav-link' }}">
                                                <i class="nav-icon fas fa-image"></i>
                                                <p>
                                                    Slider Principal
                                                    <span
                                                        class="right badge badge-success">{{ $slider_count ?? '0' }}</span>
                                                </p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ url('cardservicio') }}"
                                                class="{{ Request::path() === 'cardservicio' ? 'nav-link active' : 'nav-link' }}">
                                                <i class="nav-icon fas fa-code-branch"></i>
                                                <p>
                                                    Servicios
                                                </p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ url('producto') }}"
                                                class="{{ Request::path() === 'producto' ? 'nav-link active' : 'nav-link' }}">
                                                <i class="nav-icon fas fa-file-image"></i>
                                                <p>
                                                    Productos Nuevos
                                                    <span
                                                        class="right badge badge-success">{{ $producto_count ?? '0' }}</span>
                                                </p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ url('proveedores') }}"
                                                class="{{ Request::path() === 'proveedores' ? 'nav-link active' : 'nav-link' }}">
                                                <i class="nav-icon fas fa-user-friends"></i>
                                                <p>
                                                    {{-- proveedores --}}
                                                    Marcas Proveedores
                                                </p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ url('categorias') }}"
                                                class="{{ Request::path() === 'categorias' ? 'nav-link active' : 'nav-link' }}">
                                                <i class="nav-icon fas fa-user-friends"></i>
                                                <p>
                                                    {{-- proveedores --}}
                                                    Categorias
                                                </p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ url('politicaprivacidad') }}"
                                                class="{{ Request::path() === 'politicaprivacidad' ? 'nav-link active' : 'nav-link' }}">
                                                <i class="nav-icon fas fa-user-friends"></i>
                                                <p>
                                                    {{-- proveedores --}}
                                                    Politica de Privacidad
                                                </p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                {{-- ***************************PROMOCIONES********************* --}}
                                <li class="nav-item admin">
                                    <a href="{{ url('addpromociones') }}"
                                        class="{{ Request::path() === 'addpromociones' ? 'nav-link active' : 'nav-link' }}">
                                        <i class="text-warning fas fa-percentage"></i>
                                        <p>
                                            {{-- Cursos del dia --}}

                                            Promociones
                                            <span class="right badge badge-success">{{ $promo_count ?? '0' }}</span>
                                        </p>
                                    </a>
                                </li>

                                {{-- **********************OFERTAS DE TRABAJO************ --}}
                                <li class="nav-item textsidebar">
                                    <a href="#" class="nav-link">
                                        <i class="text-warning fas fa-copy"></i>
                                        <p>
                                            Ofertas de Trabajo
                                            <i class="fas fa-angle-left right"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a href="{{ url('ajustesempleo') }}"
                                                class="{{ Request::path() === 'ajustesempleo' ? 'nav-link active' : 'nav-link' }}">
                                                <i class="nav-icon fas fa-cogs"></i>
                                                <p>
                                                    Configuracion
                                                </p>
                                            </a>
                                        </li>
                                    </ul>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a href="{{ url('vacantes') }}"
                                                class="{{ Request::path() === 'vacantes' ? 'nav-link active' : 'nav-link' }}">
                                                <i class="nav-icon fas fa-handshake"></i>
                                                <p>
                                                    Vacantes
                                                </p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                {{-- **********************NOSOTROS************ --}}
                                <li class="nav-item textsidebar">
                                    <a href="#" class="nav-link">
                                        <i class="text-warning fas fa-copy"></i>
                                        <p>
                                            Nosotros
                                            <i class="fas fa-angle-left right"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item admin">
                                            <a href="{{ url('miempresa') }}"
                                                class="{{ Request::path() === 'miempresa' ? 'nav-link active' : 'nav-link' }}">
                                                <i class="nav-icon fas fa-cogs"></i>
                                                <p>
                                                    Configuracion
                                                </p>
                                            </a>
                                        </li>
                                        <li class="nav-item admin">
                                            <a href="{{ url('instalacion') }}"
                                                class="{{ Request::path() === 'instalacion' ? 'nav-link active' : 'nav-link' }}">
                                                <i class="nav-icon fas fa-hotel"></i>
                                                <p>
                                                    {{-- CLEINTES --}}
                                                    Instalacion
                                                </p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item admin">
                                    <a href="{{ url('facturacionPlus') }}"
                                        class="{{ Request::path() === 'facturacion' ? 'nav-link active' : 'nav-link' }}">
                                        <i class="text-warning fas fa-file-image"></i>
                                        <p>
                                            Facturacion
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item admin">
                                    <a href="{{ url('crearCupones') }}"
                                        class="{{ Request::path() === 'crearcupones' ? 'nav-link active' : 'nav-link' }}">
                                        <i class="text-warning fa-solid fa-bullhorn"></i>
                                        <p>
                                            Cupones
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item admin">
                                    <a href="{{ url('crearPublicidad') }}"
                                        class="{{ Request::path() === 'crearPublicidad' ? 'nav-link active' : 'nav-link' }}">
                                        <i class="text-warning fas fa-file-image"></i>
                                        <p>
                                            Pubicidad
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item admin">
                                    <a href="{{ url('#') }}"
                                        class="{{ Request::path() === '#' ? 'nav-link active' : 'nav-link' }}">
                                        <i class="text-warning fas fa-map-marker-alt"></i>
                                        <p>
                                            GoogleMaps
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item admin">
                                    <a href="{{ url('#') }}"
                                        class="{{ Request::path() === '#' ? 'nav-link active' : 'nav-link' }}">
                                        <i class="text-warning fas fa-eye"></i>
                                        <p>
                                            Vista Previa
                                        </p>
                                    </a>
                                </li>
                                {{-- <li class="nav-item admin">
                                <a href="{{url('Categorias')}}"
                                    class="{{ Request::path() === 'Categorias' ? 'nav-link active' : 'nav-link' }}">
                                    <i class="text-info fas fa-shopping-bag"></i>
                                    <p>
                                       Categorias de los Cursos
                                    </p>
                                </a>
                            </li> --}}
                                {{-- <li class="nav-item admin">
                                <a href="{{url('producto')}}"
                                    class="{{ Request::path() === 'producto' ? 'nav-link active' : 'nav-link' }}">
                                    <i class="text-info fas fa-shopping-basket"></i>
                                    <p>
                                      Cursos
                                      <?php $product_count = DB::table('productos')->count(); ?>
                                        <span class="right badge badge-danger">{{ $product_count ?? '0' }}</span>
                                    </p>
                                </a>
                            </li> --}}
                            @endcan
                            {{-- TERMINA EL ROL DE ADMINISTRADOR --}}


                            {{-- EMPEZANDO EL ROL DE MARKETING --}}
                            @can('Marketing')
                                {{-- ***********************PAGINA PRINCIPAL********************* --}}
                                <li class="nav-item textsidebar">
                                    <a href="#" class="nav-link">
                                        <i class="text-warning fas fa-copy"></i>
                                        <p>
                                            Pagina de Inicio
                                            <i class="fas fa-angle-left right"></i>
                                            <span class="badge badge-info right">6</span>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a href="{{ url('configuracion') }}"
                                                class="{{ Request::path() === 'configuracion' ? 'nav-link active' : 'nav-link' }}">
                                                <i class="nav-icon fas fa-cogs"></i>
                                                <p>
                                                    Configuracion
                                                </p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ url('slidermain') }}"
                                                class="{{ Request::path() === 'slidermain' ? 'nav-link active' : 'nav-link' }}">
                                                <i class="nav-icon fas fa-image"></i>
                                                <p>
                                                    Slider Principal
                                                    <span
                                                        class="right badge badge-success">{{ $slider_count ?? '0' }}</span>
                                                </p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ url('cardservicio') }}"
                                                class="{{ Request::path() === 'cardservicio' ? 'nav-link active' : 'nav-link' }}">
                                                <i class="nav-icon fas fa-code-branch"></i>
                                                <p>
                                                    Servicios
                                                </p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ url('producto') }}"
                                                class="{{ Request::path() === 'producto' ? 'nav-link active' : 'nav-link' }}">
                                                <i class="nav-icon fas fa-file-image"></i>
                                                <p>
                                                    Productos Nuevos
                                                    <span
                                                        class="right badge badge-success">{{ $producto_count ?? '0' }}</span>
                                                </p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ url('proveedores') }}"
                                                class="{{ Request::path() === 'proveedores' ? 'nav-link active' : 'nav-link' }}">
                                                <i class="nav-icon fas fa-user-friends"></i>
                                                <p>
                                                    {{-- proveedores --}}
                                                    Marcas Proveedores
                                                </p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ url('Categorias') }}"
                                                class="{{ Request::path() === 'Categorias' ? 'nav-link active' : 'nav-link' }}">
                                                <i class="nav-icon fas fa-user-friends"></i>
                                                <p>
                                                    {{-- proveedores --}}
                                                    Categorias
                                                </p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ url('politicaprivacidad') }}"
                                                class="{{ Request::path() === 'politicaprivacidad' ? 'nav-link active' : 'nav-link' }}">
                                                <i class="nav-icon fas fa-user-friends"></i>
                                                <p>
                                                    {{-- proveedores --}}
                                                    Politica de Privacidad
                                                </p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                {{-- ***************************PROMOCIONES********************* --}}
                                <li class="nav-item admin">
                                    <a href="{{ url('addpromociones') }}"
                                        class="{{ Request::path() === 'addpromociones' ? 'nav-link active' : 'nav-link' }}">
                                        <i class="text-warning fas fa-percentage"></i>
                                        <p>
                                            {{-- Cursos del dia --}}

                                            Promociones
                                            <span class="right badge badge-success">{{ $promo_count ?? '0' }}</span>
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item admin">
                                    <a href="{{ url('crearCupones') }}"
                                        class="{{ Request::path() === 'crearcupones' ? 'nav-link active' : 'nav-link' }}">
                                        <i class="text-warning fas fa-file-image"></i>
                                        <p>
                                            Cupones
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item admin">
                                    <a href="{{ url('crearPublicidad') }}"
                                        class="{{ Request::path() === 'crearPublicidad' ? 'nav-link active' : 'nav-link' }}">
                                        <i class="text-warning fas fa-file-image"></i>
                                        <p>
                                            Pubicidad
                                        </p>
                                    </a>
                                </li>

                                {{-- **********************OFERTAS DE TRABAJO************ --}}
                                <li class="nav-item textsidebar">
                                    <a href="#" class="nav-link">
                                        <i class="text-warning fas fa-copy"></i>
                                        <p>
                                            Ofertas de Trabajo
                                            <i class="fas fa-angle-left right"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a href="{{ url('ajustesempleo') }}"
                                                class="{{ Request::path() === 'ajustesempleo' ? 'nav-link active' : 'nav-link' }}">
                                                <i class="nav-icon fas fa-cogs"></i>
                                                <p>
                                                    Configuracion
                                                </p>
                                            </a>
                                        </li>
                                    </ul>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a href="{{ url('vacantes') }}"
                                                class="{{ Request::path() === 'vacantes' ? 'nav-link active' : 'nav-link' }}">
                                                <i class="nav-icon fas fa-handshake"></i>
                                                <p>
                                                    Vacantes
                                                </p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                {{-- **********************NOSOTROS************ --}}
                                <li class="nav-item textsidebar">
                                    <a href="#" class="nav-link">
                                        <i class="text-warning fas fa-copy"></i>
                                        <p>
                                            Nosotros
                                            <i class="fas fa-angle-left right"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item admin">
                                            <a href="{{ url('miempresa') }}"
                                                class="{{ Request::path() === 'miempresa' ? 'nav-link active' : 'nav-link' }}">
                                                <i class="nav-icon fas fa-cogs"></i>
                                                <p>
                                                    Configuracion
                                                </p>
                                            </a>
                                        </li>
                                        <li class="nav-item admin">
                                            <a href="{{ url('instalacion') }}"
                                                class="{{ Request::path() === 'instalacion' ? 'nav-link active' : 'nav-link' }}">
                                                <i class="nav-icon fas fa-hotel"></i>
                                                <p>
                                                    {{-- CLEINTES --}}
                                                    Instalacion
                                                </p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item admin">
                                    <a href="{{ url('#') }}"
                                        class="{{ Request::path() === '#' ? 'nav-link active' : 'nav-link' }}">
                                        <i class="text-warning fas fa-map-marker-alt"></i>
                                        <p>
                                            GoogleMaps
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item admin">
                                    <a href="{{ url('#') }}"
                                        class="{{ Request::path() === '#' ? 'nav-link active' : 'nav-link' }}">
                                        <i class="text-warning fas fa-eye"></i>
                                        <p>
                                            Vista Previa
                                        </p>
                                    </a>
                                </li>
                                {{-- <li class="nav-item admin">
                            <a href="{{url('Categorias')}}"
                                class="{{ Request::path() === 'Categorias' ? 'nav-link active' : 'nav-link' }}">
                                <i class="text-info fas fa-shopping-bag"></i>
                                <p>
                                   Categorias de los Cursos
                                </p>
                            </a>
                        </li> --}}
                                {{-- <li class="nav-item admin">
                            <a href="{{url('producto')}}"
                                class="{{ Request::path() === 'producto' ? 'nav-link active' : 'nav-link' }}">
                                <i class="text-info fas fa-shopping-basket"></i>
                                <p>
                                  Cursos
                                  <?php $product_count = DB::table('productos')->count(); ?>
                                    <span class="right badge badge-danger">{{ $product_count ?? '0' }}</span>
                                </p>
                            </a>
                        </li> --}}
                            @endcan

                            @can('RecursosHumanos')
                                {{-- **********************OFERTAS DE TRABAJO************ --}}
                                <li class="nav-item textsidebar">
                                    <a href="#" class="nav-link">
                                        <i class="text-warning fas fa-copy"></i>
                                        <p>
                                            Ofertas de Trabajo
                                            <i class="fas fa-angle-left right"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a href="{{ url('ajustesempleo') }}"
                                                class="{{ Request::path() === 'ajustesempleo' ? 'nav-link active' : 'nav-link' }}">
                                                <i class="nav-icon fas fa-cogs"></i>
                                                <p>
                                                    Configuracion
                                                </p>
                                            </a>
                                        </li>
                                    </ul>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a href="{{ url('vacantes') }}"
                                                class="{{ Request::path() === 'vacantes' ? 'nav-link active' : 'nav-link' }}">
                                                <i class="nav-icon fas fa-handshake"></i>
                                                <p>
                                                    Vacantes
                                                </p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                {{-- **********************NOSOTROS************ --}}
                                <li class="nav-item textsidebar">
                                    <a href="#" class="nav-link">
                                        <i class="text-warning fas fa-copy"></i>
                                        <p>
                                            Nosotros
                                            <i class="fas fa-angle-left right"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item admin">
                                            <a href="{{ url('miempresa') }}"
                                                class="{{ Request::path() === 'miempresa' ? 'nav-link active' : 'nav-link' }}">
                                                <i class="nav-icon fas fa-cogs"></i>
                                                <p>
                                                    Configuracion
                                                </p>
                                            </a>
                                        </li>
                                        {{-- <li class="nav-item admin">
                                            <a href="{{ url('Instalacion/todas') }}"
                                                class="{{ Request::path() === 'Instalacion/todas' ? 'nav-link active' : 'nav-link' }}">
                                                <i class="nav-icon fas fa-hotel"></i>
                                                <p>                                                    
                                                    Instalacion
                                                </p>
                                            </a>
                                        </li> --}}
                                    </ul>
                                </li>
                            @endcan
                        </ul>

                    </nav>
                    <!-- /.sidebar-menu -->
                    <div class="info">
                        <a href="#" class="d-block">
                            @guest
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Iniciar Sesión') }}</a>
                            @else
                                {{-- {{ Auth::user()->name }} --}}
                                {{-- BOTON DE CERRAR SESION --}}
                                <a class="" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                    <button style="margin-top: 50px; margin-bottom: 20px" type="button"
                                        class="btn btn-outline-danger btn-block">Cerrar Sesión</button>
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    style="display: none;">
                                    @csrf
                                </form>
                            @endguest
                        </a>
                    </div>
                </div>
                <!-- /.sidebar -->
            </aside>

            <!-- Content Wrapper. Contains page content -->
            <div class="mt-6 content-wrapper" style="background: white">
                <section class="content">
                    @yield('content')
                </section>
                <!-- Main content -->
                <section class="content">
                    @yield('contentUsu')
                </section>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->
            <footer class="main-footer">
                <!-- NO QUITAR -->
                <strong> SuperPlus
                    <div class="float-right d-none d-sm-inline-block">
                        <b>Version</b> 1.0
                    </div>
            </footer>

            <!-- Control Sidebar -->
            {{-- <aside class="control-sidebar control-sidebar-dark">
                <h1>Hola que hace</h1>
            </aside> --}}
            <!-- /.control-sidebar -->
        </div>
    </div>
    
    <script src="{{ asset('js/jquery-3.5.1.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('dist/js/adminlte.js') }}"></script>
    <script src="{{ asset('js/responsive.js') }}"></script>
    <script src="{{ asset('js/dashboard/counter.js') }}"></script>

    <script>
        function countChars(obj, targetId = 'charNum') {
            const target = document.getElementById(targetId);
            if (target) {
                target.innerHTML = obj.value.length + ' caracteres';
            }
        }
    </script>
    <script>
        var $seleccionArchivos = document.querySelector("#seleccionArchivos"),
            $imagenPrevisualizacion = document.querySelector("#imagenPrevisualizacion");
        if ($seleccionArchivos) {
            $seleccionArchivos.addEventListener("change", function() {
                var archivos = $seleccionArchivos.files;
                if (!archivos || !archivos.length) {
                    $imagenPrevisualizacion.src = "";
                    return;
                }
                var primerArchivo = archivos[0];
                var objectURL = URL.createObjectURL(primerArchivo);
                $imagenPrevisualizacion.src = objectURL;
            });
        }
    </script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireScripts
    @yield('scripts')
</body>

</html>
