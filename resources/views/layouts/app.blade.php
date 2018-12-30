<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel" >
            <div class="container">
                <a class="navbar-brand" href="http://vps627012.ovh.net/~piscine/piscine/public/">
                    <img src="http://vps627012.ovh.net/~piscine/piscine/resources/image/logo.png" width="60" height="60" class="d-inline-block align-top" alt ="NotrePlellie">
                </a>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Catégories</a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Chaussures</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Basket</a>
                                <a class="dropdown-item" href="#">Tong</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Jeux Vidéo</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">PC</a>
                                <a class="dropdown-item" href="#">Xbox One</a>
                                <a class="dropdown-item" href="#">PS4</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Espace Client</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#">Panier</a>
                        </li>
                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Nike, PS4..." aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Rechercher</button>
                    </form>
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Connexion') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Inscription') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
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
    
        <nav class="navbar navbar-light bg-dark" >
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="http://vps627012.ovh.net/~piscine/piscine/resources/image/logo.png" width="40" height="40" class="d-inline-block align-top" alt ="NotrePlellie">
                </a>
                <span class="navbar-text">
                    © 2018, NOTRE PELLIER, Tous droits réservés. 
                </span>
            </div>
        </nav>
    </div>
</body>
</html>
