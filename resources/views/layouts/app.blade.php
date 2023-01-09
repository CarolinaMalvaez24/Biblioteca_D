<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('static/css/app.css') }}"/>
    <link rel="stylesheet" href="{{ asset('node_modules/bootstrap-icons/font/bootstrap-icons.scc') }}"/>
    <link rel="stylesheet" href="{{ asset('resources/css/app.css') }}"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="/css/app.css">
    <script src="/js/app.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    @vite(['resources/css/app.css'])
    <script>
        $( document ).ready(function() {
            $('[data-toggle="tooltip"]').tooltip({'placement': 'top'});
        });
    </script>
</head>
<body>
<div id="app">
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/home') }}">
                <img src="{{url("img/logo_transparent.png")}}" height="50" width="70">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav me-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ms-auto">
                    <!-- Authentication Links -->
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Iniciar Sesión') }}</a>
                            </li>
                        @endif

                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Registrar') }}</a>
                            </li>
                        @endif
                    @else
                    @can('ver-usuario')
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                Permisos
                            </a>
                            <div class="dropdown-menu dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{url('usuarios')}}">
                                    Usuarios
                                </a>
                                <a class="dropdown-item" href="{{url('roles')}}">
                                    Roles
                                </a>
                            </div>
                        </li>
                    @endcan
                    @can('crear-libro')
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                Bases de datos
                            </a>
                            <div class="dropdown-menu dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{url('libros')}}">
                                    Libros
                                </a>
                                <a class="dropdown-item" href="{{url('autores')}}">
                                    Autores
                                </a>
                                <a class="dropdown-item" href="{{url('categorias')}}">
                                    Categorias
                                </a>
                                <a class="dropdown-item" href="{{url('editoriales')}}">
                                    Editoriales
                                </a>
                            </div>
                        </li>
                    @endcan
                    @can('ver-prestamo')
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                Registros
                            </a>
                            <div class="dropdown-menu dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{url('prestamos')}}">
                                    Prestamos
                                </a>
                                <a class="dropdown-item" href="{{url('devoluciones')}}">
                                    Devoluciones
                                </a>
                            </div>
                        </li>
                    @endcan
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
                                    {{ __('Salir') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>

    <main class="py-4">
        @yield('content')
    </main>
<script>
    import Scripts from "../../../vendor/twbs/bootstrap-icons/docs/layouts/partials/scripts.html";
    export default {
        components: {Scripts}
    }
</script>
<script src="https://unpkg.com/alpinejs@3.1.x/dist/cdn.min.js" defer></script>
    @stack("scripts")
</div>
</body>
</html>

