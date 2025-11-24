@extends('layouts.app')

@section('content')
<div class="auth-wrapper">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8">
                <div class="card auth-card shadow-lg border-0">
                    <div class="card-body p-4 p-md-5">
                        <h2 class="auth-title mb-1">Bem-vindo de volta</h2>
                        <p class="auth-subtitle mb-4">
                            Acesse sua conta para continuar sua jornada em educação inclusiva.
                        </p>

                        <form method="POST" action="{{ route('login') }}">
                            @csrf

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
                                       autocomplete="email"
                                       autofocus>

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
                                       autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            {{-- Lembrar-me + Esqueci a senha --}}
                            <div class="d-flex justify-content-between align-items-center mb-4 flex-wrap gap-2">
                                <div class="form-check">
                                    <input class="form-check-input"
                                           type="checkbox"
                                           name="remember"
                                           id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="remember">
                                        {{ __('Lembrar-me') }}
                                    </label>
                                </div>

                                @if (Route::has('password.request'))
                                    <a class="auth-link" href="{{ route('password.request') }}">
                                        {{ __('Esqueceu sua senha?') }}
                                    </a>
                                @endif
                            </div>

                            {{-- Botão entrar --}}
                            <div class="d-grid mb-3">
                                <button type="submit" class="btn btn-auth-primary">
                                    {{ __('Entrar') }}
                                </button>
                            </div>

                            {{-- Link para cadastro --}}
                            @if (Route::has('register'))
                                <p class="text-center small mb-0">
                                    Ainda não tem conta?
                                    <a href="{{ route('register') }}" class="auth-link">
                                        Cadastre-se gratuitamente
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
