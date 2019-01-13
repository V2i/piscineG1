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
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel" >
            <div class="container">
                <a class="navbar-brand" href="{{ route('welcome') }}">
                    <img src="http://vps627012.ovh.net/~piscine/piscine/resources/image/logo.png" width="60" height="60" class="d-inline-block align-top" alt ="NotrePlellie">
                </a>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('carte') }}">
                                <span class="fas fa-map-marked-alt fa-2x">
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Catégories</a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <h6 class="dropdown-header"><span class="fas fa-shoe-prints"></span> Chaussure</h6>
                                <a class="dropdown-item" href="#">Basket</a>
                                <a class="dropdown-item" href="#">Tong</a>
                                <a class="dropdown-item" href="#">Chausson</a>
                                <div class="dropdown-divider"></div>
                                <h6 class="dropdown-header"><span class="fas fa-gamepad"></span> Jeux Vidéo</h6>
                                <a class="dropdown-item" href="#">PC</a>
                                <a class="dropdown-item" href="#">Xbox One</a>
                                <a class="dropdown-item" href="#">PS4</a>
                            </div>
                        </li>
                    </ul>
                    <form class="form-inline my-2 my-lg-0" method="GET" action="{{ route('search') }}">
                        <input class="form-control mr-sm-2" type="search" placeholder="Nike, PS4..." aria-label="Search">
                        <button class="btn btn-outline-success my-1 my-sm-0" type="submit">Rechercher</button>
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
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('home')}}">Espace Client</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Déconnexion') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display:none;">
                                    @csrf
                                </form>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('basket') }}">
                                    <span class="fas fa-shopping-basket fa-2x">
                                </a>
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
                    
                </a>
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('welcome') }}"><img src="http://vps627012.ovh.net/~piscine/piscine/resources/image/logo.png" width="40" height="40" class="d-inline-block align-top" alt ="NotrePlellie"> NOTRE PELLIER</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('contact') }}"><img src="http://vps627012.ovh.net/~piscine/piscine/resources/image/cci-herault-1.png" width="100" height="" class="d-inline-block align-center" alt ="CCI HERAULT"> CCI Herault Contact</a>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto">
                    <span class="navbar-text">
                       © 2018, NOTRE PELLIER, Tous droits réservés. 
                    </span>
                </ul>
            </div>
        </nav>
    </div>
</body>
</html>
