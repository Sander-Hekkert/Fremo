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
    <nav class="navbar navbar-expand-md bg-white">
        <div class="container-fluid g-0">

            <!-- Replace the text with an image -->
            <a class="navbar-brand ms-5" href="{{ url('/') }}">
                <img src="{{ asset('Fotos/logo.png') }}" alt="Rails" class="img-fluid my-3 d-block " style="width: 100px;">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">




                <ul class="navbar-nav ms-auto d-flex align-items-center me-5">

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
                                @if (Route::has('trein.index'))
                                    <a class="dropdown-item" href="{{ route('trein.index') }}">{{ __('Treinen') }}</a>
                                @endif
                            </div>
                        </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('wagenkaart.index') }}">Wagenkaart</a>
                                </li>
                        @if(Auth::user() && !in_array(Auth::user()->roles_id, [2, 3]))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('users.index') }}">Users</a>
                            </li>
                        @endif

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                        <li class="nav-item dropdown ms-5">
                            <a class="dropdown-item d-flex flex-column align-items-center" href="<?php echo e(route('profiles.show')); ?>">
                                <div class="profile-circle mb-1"><?php echo e(Auth::user()->name[0]); ?></div>
                                <span><?php echo e(Auth::user()->name); ?></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown" style="left: auto; right: 0;">
                                <a class="dropdown-item" href="<?php echo e(route('profiles.show')); ?>">Profiel</a>
                            </div>
                        </li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>

    <img src="{{ asset('Fotos/rails.svg') }}" alt="Rails" class="img-fluid mx-auto d-block mb-0" style="width: 100%; max-height: 200px;">

    <main class="py-4">
        @yield('content')
    </main>
    <!-- resources/views/layouts/app.blade.php -->
@livewireStyles
@livewireScripts
</div>
</body>
</html>
<style>
    .profile-circle {
        width: 40px;
        height: 40px;
        background-color: #007bff;
        border-radius: 50%;
        display: flex;
        justify-content: center;
        align-items: center;
        color: #fff;
        font-weight: bold;
    }
</style>

