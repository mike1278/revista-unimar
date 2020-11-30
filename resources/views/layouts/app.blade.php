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
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- iconos -->
    <link rel="icon" href="{{ Storage::url('logo.png') }}" sizes="32x32">
    <!-- Config -->
    <meta name="fragment" content="!">
    <meta name="robots" content="index,follow">
</head>
<body>
   <header>
        <nav class="navbar navbar-light navbar-expand-md navigation-clean" style="padding-bottom: 0;">
            <div class="container-fluid">
                <a class="navbar-brand" href="/" style="height: 90px;">
                    <img style="height: 90px;" src="{{ Storage::url('public/logotipo.png') }}">
                </a>
                <button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div
                    class="collapse navbar-collapse" id="navcol-1">
                    <ul class="nav navbar-nav mr-auto">
                        <li class="nav-item" role="presentation"><a class="nav-link" href="/">@lang('data.home')</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="/articulos">@lang('data.publications')</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="{{ route('about') }}">@lang('data.about-us')</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="{{ route('contact') }}">@lang('data.contact-us')</a></li>
                    </ul>
                    <div style="height: 100%;" class="d-flex">
                        <div class="dropdown mr-3">
                            <button
                                class="btn dropdown-toggle"
                                type="button"
                                data-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="false"
                                style="background: transparent; color:black;"
                            >
                            {{ App::getLocale() }}
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="/setLocale/en">@lang('data.english')</a>
                                <a class="dropdown-item" href="/setLocale/es">@lang('data.spanish')</a>
                                <a class="dropdown-item" href="/setLocale/fr">@lang('data.french')</a>
                                <a class="dropdown-item" href="/setLocale/it">@lang('data.italian')</a>
                                <a class="dropdown-item" href="/setLocale/de">@lang('data.german')</a>
                            </div>
                        </div>
                        @guest()
                        <a
                            href="#"
                            data-toggle="modal"
                            class="p-2 ml-2"
                            data-target="#loginModal"
                        >
                            <i class="far fa-user" style="font-size: 20px;color: #0056b3;"></i>
                        </a>
                        @else
                        <div class="dropdown">
                            <button
                                class="btn dropdown-toggle"
                                type="button"
                                data-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="false"
                                style="background: transparent; color:black;"
                            >
                            {{ Auth::user()->name }} {{ Auth::user()->lastname }}
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                @Admin()
                                <a class="dropdown-item" href="{{ route('admin') }}">Panel Administrativo</a>
                                @endAdmin
                                <a class="dropdown-item" href="{{ route('logout') }}">@lang('data.close-session')</a>
                            </div>
                        </div>
                        @endguest
                    </div>
                </div>
            </div>
        </nav>
        <hr>
        <div class="row no-gutters" style="background-color: rgb(18,54,91);padding: 10px 15px;">
            <div class="col"><span style="color: rgb(255,255,255);"><b>ISS:558-966585</b></span></div>
            <div class="col d-flex justify-content-center">
                <a
                    href="http://unimar.edu.ve/unimarportal/index.php"
                    class="link-menu-blu"
                >Unimar</a>
                <a
                    href="http://unimar.edu.ve/unimarportal/estudios/pregrado.php"
                    class="link-menu-blu"
                >Pre-Grado</a>
                <a
                    href="http://unimar.edu.ve/unimarportal/estudios/posgrado.php"
                    class="link-menu-blu"
                >Post-Grado</a>
            </div>
            <form class="col d-flex justify-content-end" action="/articulos" method="get">
                <input
                    type="text"
                    name="filter[title]"
                    value="{{ request()->filter['title']?request()->filter['title']:'' }}"
                    style="border-radius: 20px;border: none;padding: 5px;"
                    placeholder="Buscar"
                >
                <button class="btn" style="background-color: rgb(18,54,91); color:white;"><i class="fas fa-search"></i></button>
            </form>
        </div>
    </header>
    <main>
        @yield('content')
    </main>
    <hr/>
    <div class="footer-basic">
        <footer>
            <div class="social"><a href="#"><i class="fab fa-facebook-f"></i></a><a href="#"><i class="fab fa-instagram"></i></a><a href="#"><i class="fab fa-whatsapp"></i></a><a href="#"><i class="fab fa-twitter"></i></a></div>
            <ul class="list-inline">
                <li class="list-inline-item"><a href="{{ route('contact') }}">@lang('data.contact-us')</a></li>
                <li class="list-inline-item"><a href="#">@lang('data.need-help')</a></li>
            </ul>
            <p class="copyright">© 2020 Universidad de Margarita, RIF j-30660040-0, Telefono; 0800-UNIMAR</p>
            <p class="copyright" style="margin: .0;">0800-222255, Isla de Margarita, Venezuela</p>
        </footer>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
    @include('components.auth')
    @yield('script')
</body>
</html>