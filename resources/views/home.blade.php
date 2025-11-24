@extends('layouts.app')

@section('content')
<div class="dashboard-wrapper">
    <div class="container">

        {{-- LINHA DE BOAS-VINDAS --}}
        <div class="row mb-4">
            <div class="col-12">
                <div class="card dashboard-hero border-0 shadow-sm">
                    <div class="card-body d-flex flex-column flex-md-row align-items-md-center justify-content-between">
                        <div>
                            <h2 class="dashboard-title mb-1">
                                Olá, {{ Auth::user()->name }} 👋
                            </h2>
                            <p class="dashboard-subtitle mb-3 mb-md-0">
                                Bem-vindo à sua área exclusiva para explorar conteúdos sobre neurodiversidade,
                                inclusão e práticas para sala de aula.
                            </p>
                        </div>
                        <div class="text-md-end">
                            <a href="{{ url('/') }}#comunidade" class="btn btn-neuro-community">
                                Entrar na Comunidade
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- LINHA DE CARDS PRINCIPAIS --}}
        <div class="row g-3 mb-4">
            {{-- Card 1: Comece por aqui --}}
            <div class="col-md-4">
                <div class="card dashboard-card h-100">
                    <div class="card-body">
                        <h5 class="card-title mb-2">Comece por aqui</h5>
                        <p class="card-text mb-3">
                            Se é sua primeira vez por aqui, veja os conteúdos introdutórios sobre neurodiversidade e
                            termos essenciais.
                        </p>
                        <a href="{{ url('/') }}#introducao" class="btn btn-sm btn-outline-primary">
                            Ver introdução
                        </a>
                    </div>
                </div>
            </div>

            {{-- Card 2: Tipos de Neurodivergência --}}
            <div class="col-md-4">
                <div class="card dashboard-card h-100">
                    <div class="card-body">
                        <h5 class="card-title mb-2">Tipos de Neurodivergência</h5>
                        <p class="card-text mb-3">
                            Acesse rapidamente os materiais sobre TEA, TDAH, Dislexia, Discalculia, Disgrafia
                            e Síndrome de Tourette.
                        </p>
                        <div class="d-flex flex-wrap gap-2">
                            <a href="{{ route('tea') }}" class="badge bg-primary-subtle text-primary">TEA</a>
                            <a href="{{ route('tdah') }}" class="badge bg-primary-subtle text-primary">TDAH</a>
                            <a href="{{ route('dislexia') }}" class="badge bg-primary-subtle text-primary">Dislexia</a>
                            <a href="{{ route('discalculia') }}" class="badge bg-primary-subtle text-primary">Discalculia</a>
                            <a href="{{ route('disgrafia') }}" class="badge bg-primary-subtle text-primary">Disgrafia</a>
                            <a href="{{ route('tourette') }}" class="badge bg-primary-subtle text-primary">Tourette</a>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Card 3: Guias práticos --}}
            <div class="col-md-4">
                <div class="card dashboard-card h-100">
                    <div class="card-body">
                        <h5 class="card-title mb-2">Guias práticos para sala de aula</h5>
                        <p class="card-text mb-3">
                            Acesse materiais práticos para adaptar o ambiente escolar, melhorar a comunicação
                            e planejar estratégias inclusivas.
                        </p>
                        <a href="{{ url('/') }}#guias" class="btn btn-sm btn-outline-primary">
                            Ver guias
                        </a>
                    </div>
                </div>
            </div>
        </div>

        {{-- LINHA: MINHA JORNADA / PROGRESSO (mock) --}}
        <div class="row g-3 mb-4">
            <div class="col-lg-8">
                <div class="card dashboard-card h-100">
                    <div class="card-body">
                        <h5 class="card-title mb-2">Minha jornada de aprendizagem</h5>
                        <p class="card-text mb-3">
                            Em breve você poderá acompanhar aqui os conteúdos já vistos, favoritos e trilhas recomendadas
                            para seu contexto de ensino.
                        </p>

                        <div class="progress" role="progressbar" aria-label="Progresso geral" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width: 35%">35% (exemplo)</div>
                        </div>

                        <p class="small text-muted mt-2 mb-0">
                            Este é apenas um exemplo visual. Depois podemos ligar isso a conteúdos reais, trilhas e certificados.
                        </p>
                    </div>
                </div>
            </div>

            {{-- Card lateral: Próximos passos --}}
            <div class="col-lg-4">
                <div class="card dashboard-card h-100">
                    <div class="card-body">
                        <h5 class="card-title mb-3">Próximos passos sugeridos</h5>
                        <ul class="list-unstyled small mb-0">
                            <li class="mb-2">✅ Ler o conteúdo introdutório sobre neurodiversidade</li>
                            <li class="mb-2">✅ Escolher um tipo de neurodivergência para se aprofundar</li>
                            <li class="mb-2">🔄 Aplicar uma estratégia inclusiva em sala nesta semana</li>
                            <li class="mb-2">🔄 Registrar suas experiências para compartilhar com a comunidade</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        {{-- LINHA: RECURSOS EXTERNOS (como no footer) --}}
        <div class="row g-3 mb-4">
            <div class="col-12">
                <div class="card dashboard-card">
                    <div class="card-body">
                        <h5 class="card-title mb-3">Recursos recomendados</h5>
                        <p class="card-text">
                            Alguns sites especializados que você pode consultar para aprofundar o estudo:
                        </p>
                        <div class="d-flex flex-wrap gap-3 small">
                            <a href="#" class="text-decoration-none link-neuro">Tuasaude.com.br</a>
                            <a href="#" class="text-decoration-none link-neuro">preprints.scielo.org</a>
                            <a href="#" class="text-decoration-none link-neuro">vidasaudavel.com.br</a>
                            <a href="#" class="text-decoration-none link-neuro">exame.com.br</a>
                            <a href="#" class="text-decoration-none link-neuro">autismorealidade.org.br</a>
                            <a href="#" class="text-decoration-none link-neuro">clinicaformare.com.br</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>


@endsection
