{{-- resources/views/includes/header.blade.php --}}
<header class="site-header sticky-top bg-white shadow-sm">
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">

            {{-- LOGO --}}
            <a class="navbar-brand d-flex align-items-center" href="#">
                <img src="{{ asset('img/logo-modo-claro-1.png') }}" alt="NeuroEdu" class="site-logo me-2">
            </a>

            {{-- Botão do menu mobile --}}
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNeuroEdu" aria-controls="navbarNeuroEdu"
                    aria-expanded="false" aria-label="Alternar navegação">
                <span class="navbar-toggler-icon"></span>
            </button>

            {{-- Links --}}
            <div class="collapse navbar-collapse" id="navbarNeuroEdu">
                <ul class="navbar-nav ms-auto align-items-lg-center gap-lg-3">

                    {{-- Links de navegação da landing --}}
                    <li class="nav-item">
                        <a class="nav-link nav-link-neuro" href="#topo">Início</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link nav-link-neuro" href="#introducao">Introdução</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link nav-link-neuro" href="#tipos">Tipos</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link nav-link-neuro" href="#como-identificar">Como Identificar</a>
                    </li>

                    {{-- CTA fixo da comunidade --}}
                    <li class="nav-item">
                        <a href="#comunidade"
                           class="btn btn-neuro-community ms-lg-2 mt-3 mt-lg-0" style="background-color:#FE6869;color:#fff">
                            Entrar na Comunidade
                        </a>
                    </li>

                    {{-- Autenticação --}}
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item ms-lg-2 mt-3 mt-lg-0">
                                <a class="btn btn-outline-primary"
                                   href="{{ route('login') }}">
                                    Entrar
                                </a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown ms-lg-2 mt-3 mt-lg-0">
                            <a id="navbarDropdown"
                               class="nav-link dropdown-toggle nav-link-neuro d-flex align-items-center"
                               href="#"
                               role="button"
                               data-bs-toggle="dropdown"
                               aria-haspopup="true"
                               aria-expanded="false"
                            >
                                {{ Auth::user()->name }}
                            </a>

                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                {{-- opcional: link pro painel --}}
                                @if (Route::has('home'))
                                    <li>
                                        <a class="dropdown-item" href="{{ route('home') }}">
                                            Meu painel
                                        </a>
                                    </li>
                                    <li><hr class="dropdown-divider"></li>
                                @endif

                                <li>
                                    <a class="dropdown-item"
                                       href="{{ route('logout') }}"
                                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        Sair
                                    </a>
                                </li>
                            </ul>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                    @endguest

                </ul>
            </div>
        </div>
    </nav>
</header>
