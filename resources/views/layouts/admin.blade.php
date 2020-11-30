<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Unimar Cientifica">
    <meta name="description" content="">
    <!-- Title -->
    <title>{{ config('app.name', 'Laravel') }}@yield('co-title')</title>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Styles -->
    <link href="{{ asset('css/ftp4/admin.css') }}" rel="stylesheet">
    <!-- iconos -->
    <link rel="icon" href="{{ Storage::url('logo.png') }}" sizes="32x32">
    <!-- Config -->
    <meta name="fragment" content="!">
</head>
<body>
    <div class="wrapper d-flex align-items-stretch">
        <nav id="sidebar">
            <div class="p-4 pt-5">
                <a href="#" class="img logo rounded-circle mb-5" style="background-image: url({{ Storage::url('logo.png') }});"></a>
                <ul class="list-unstyled components mb-5">
                    <li class="active">
                        <a href="/admin">Articulos</a>
                    </li>
                    <li>
                        <a href="#">Comentarios</a>
                    </li>
                    <li>
                        <a href="{{ route('users') }}">Usuarios</a>
                    </li>
                    <li>
                        <a href="{{ route('sliders') }}">Sliders</a>
                    </li>
                    <li>
                        <a href="/">Ir a la pagina</a>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- Page Content  -->
        <div id="content">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid justify-content-start">
                    <button type="button" id="sidebarCollapse" class="btn btn-primary">
                        <i class="fa fa-bars"></i>
                        <span class="sr-only">Toggle Menu</span>
                    </button>
                    <h2 style="font-size: 20px;" class="ml-2 p-2 mb-0">
                        @yield('title')
                    </h2>
                    @yield('btn-add')
                </div>
            </nav>
            <main class="p-3">
                @yield('content')
            </main>
        </div>
    </div>
    <script src="/js/ftp4/app.js"></script>
    @yield('script')
</body>
</html>