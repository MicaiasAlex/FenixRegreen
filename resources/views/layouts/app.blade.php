<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- CSRF Token --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'NeuroEdu') }}</title>

    {{-- Bootstrap / CSS --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('custon.css') }}" rel="stylesheet">

    {{-- Google Fonts --}}
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700;800&display=swap" rel="stylesheet">
</head>

<body class="app-body">

    {{-- HEADER GLOBAL --}}
    <header class="site-header shadow-sm">
        <nav class="navbar navbar-expand-lg navbar-light bg-white">
            <div class="container py-2">

                {{-- LOGO --}}
                <a class="navbar-brand d-flex align-items-center" href="{{ url('/') }}">
                    <img src="{{ asset('img/logo-modo-claro-1.png') }}" class="header-logo" alt="">
                </a>

                {{-- mobile --}}
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarContent" aria-controls="navbarContent"
                    aria-expanded="false" aria-label="Menu">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarContent">
                    {{-- Links à direita --}}
                    <ul class="navbar-nav ms-auto align-items-lg-center">

                        @guest
                            {{-- BOTÃO LOGIN --}}
                            <li class="nav-item me-2 mt-2 mt-lg-0">
                                <a href="{{ route('login') }}" class="btn btn-outline-primary px-4">
                                    Entrar
                                </a>
                            </li>

                            {{-- BOTÃO REGISTER --}}
                            @if (Route::has('register'))
                                <li class="nav-item mt-2 mt-lg-0">
                                    <a href="{{ route('register') }}" class="btn btn-primary px-4"
                                        style="background:#fe6869; border-color:#fe6869; border-radius:10px;">
                                        Criar conta
                                    </a>
                                </li>
                            @endif
                        @else

                            {{-- Usuário logado --}}
                            <li class="nav-item dropdown mt-3 mt-lg-0">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle fw-bold"
                                   href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true"
                                   aria-expanded="false">
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end">

                                    {{-- Link para home (dashboard nativo do Laravel) --}}
                                    <a class="dropdown-item" href="{{ route('home') }}">
                                        Meu Painel
                                    </a>

                                    <div class="dropdown-divider"></div>

                                    {{-- logout --}}
                                    <a class="dropdown-item text-danger"
                                       href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                                        Sair
                                    </a>

                                    <form id="logout-form"
                                          action="{{ route('logout') }}"
                                          method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>

                        @endguest

                    </ul>
                </div>
            </div>
        </nav>
    </header>

    {{-- CONTEÚDO DAS PÁGINAS --}}
    <main class="py-4">
        @yield('content')
    </main>

    {{-- Bootstrap --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>
