@extends('layouts.app')

@section('content')
<div class="auth-wrapper">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8">
                <div class="card auth-card shadow-lg border-0">
                    <div class="card-body p-4 p-md-5">
                        <h2 class="auth-title mb-1">Criar conta</h2>
                        <p class="auth-subtitle mb-4">
                            Junte-se à comunidade e tenha acesso a conteúdos sobre neurodiversidade e inclusão.
                        </p>

                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            {{-- Nome --}}
                            <div class="mb-3">
                                <label for="name" class="form-label">
                                    {{ __('Nome') }}
                                </label>
                                <input id="name"
                                       type="text"
                                       class="form-control auth-input @error('name') is-invalid @enderror"
                                       name="name"
                                       value="{{ old('name') }}"
                                       required
                                       autocomplete="name"
                                       autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            {{-- Email --}}
                            <div class="mb-3">
                                <label for="email" class="form-label">
                                    {{ __('E-mail') }}
                                </label>
                                <input id="email"
                                       type="email"
                                       class="form-control auth-input @error('email') is-invalid @enderror"
                                       name="email"
                                       value="{{ old('email') }}"
                                       required
                                       autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            {{-- Senha --}}
                            <div class="mb-3">
                                <label for="password" class="form-label">
                                    {{ __('Senha') }}
                                </label>
                                <input id="password"
                                       type="password"
                                       class="form-control auth-input @error('password') is-invalid @enderror"
                                       name="password"
                                       required
                                       autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            {{-- Confirmar Senha --}}
                            <div class="mb-4">
                                <label for="password-confirm" class="form-label">
                                    {{ __('Confirmar senha') }}
                                </label>
                                <input id="password-confirm"
                                       type="password"
                                       class="form-control auth-input"
                                       name="password_confirmation"
                                       required
                                       autocomplete="new-password">
                            </div>

                            {{-- Botão cadastrar --}}
                            <div class="d-grid mb-3">
                                <button type="submit" class="btn btn-auth-primary">
                                    {{ __('Cadastrar') }}
                                </button>
                            </div>

                            {{-- Link para login --}}
                            @if (Route::has('login'))
                                <p class="text-center small mb-0">
                                    Já tem uma conta?
                                    <a href="{{ route('login') }}" class="auth-link">
                                        Fazer login
                                    </a>
                                </p>
                            @endif
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
