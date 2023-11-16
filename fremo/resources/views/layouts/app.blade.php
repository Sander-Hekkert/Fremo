<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <!-- Replace the text with an image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ asset('Fotos/logo.png') }}" alt="Rails" class="img-fluid mx-auto d-block mb-0" style="width: 30%; max-height: 30%;">
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
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @endguest
                        @auth
                            @if (Route::has('home'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('home') }}">{{ __('Home') }}</a>
                                </li>
                            @endif
                            @if (Route::has('dienstregeling'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('dienstregeling') }}">{{ __('Dienstregeling') }}</a>
                                </li>
                            @endif
                    <li class="nav-item dropdown">
                       <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ 'Spoorbeheer' }}
                                </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            @if (Route::has('module.index'))
                                <a class="dropdown-item" href="{{ route('module.index') }}">{{ __('Module') }}</a>
                            @endif
                            @if (Route::has('trein'))
                                <a class="dropdown-item" href="{{ route('trein') }}">{{ __('Treinen') }}</a>
                            @endif
                        </div>
                    </li>
                            @if (Route::has('wagenkaart'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('wagenkaart') }}">{{ __('Wagenkaart') }}</a>
                                </li>
                            @endif
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endauth
                    </ul>
                </div>
            </div>
        </nav>
        <img src="{{ asset('Fotos/image.png') }}" alt="Rails" class="img-fluid mx-auto d-block mb-0" style="width: 100%; max-height: 200px;">

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
