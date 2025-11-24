@extends('layouts.site')

@section('content')
    {{-- HERO / CAPA --}}
    <section class="hero-section py-5">
        <div class="container">
            <div class="row align-items-center gy-4">
                <div class="col-lg-6">
                    <p class="hero-eyebrow mb-1">TUDO SOBRE</p>
                    <h1 class="hero-title mb-2">
                        NEURODIVERSIDADE
                    </h1>
                    <p class="hero-subtitle mb-3">PARA PROFESSORES</p>

                    <p class="lead mb-3">
                        É o conceito que reconhece a diversidade natural das funções cerebrais e comportamentais humanas.
                    </p>

                </div>

                <div class="col-lg-6 text-center">
                    <img src="{{ asset('img/banner-neurodiversidade.png') }}"
                         alt="Neurodiversidade"
                         class="img-fluid hero-image">
                </div>
            </div>
        </div>
    </section>

    {{-- SOBRE / ENTENDENDO OS TERMOS --}}
    <section class="py-5 section-soft-green">
        <div class="container">
            <h2 class="section-title mb-3">Sobre a Neurodiversidade</h2>

            <p class="mb-3">
                A neurodivergência abrange uma vasta gama de condições que afetam o funcionamento cerebral de maneiras
                variadas. Cada pessoa aprende, sente e interage com o mundo de um jeito único.
            </p>
            
            <h4 class="fw-bold mb-2">Reconhecendo a Pluralidade do Cérebro Humano</h4>
            <p class="mb-3">
            A neurodiversidade propõe que variações neurológicas como
            Transtorno do Espectro Autista (TEA), TDAH, dislexia, dispraxia
            não sejam vistas como doenças a serem “curadas”, mas como diferenças normais e valiosas
            na espécie humana.
            </p>
       
            <h4 class="fw-bold mb-2">Entendendo os Termos-Chave</h4>
            <p class="mb-2">
                <strong>Neurodiversidade:</strong> conceito amplo que afirma que existe uma grande variedade de
                funcionamentos neurológicos entre as pessoas e que essa variação é natural e deve ser respeitada.
            </p>
            <p class="mb-2">
                <strong>Neurotípico:</strong> indivíduo cujo funcionamento neurológico se enquadra no que é considerado
                padrão esperado pela sociedade.
            </p>
            <p class="mb-0">
                <strong>Neurodivergente:</strong> indivíduo que apresenta um funcionamento neurológico atípico, fora do
                padrão esperado. Inclui, por exemplo: TEA, TDAH, dislexia, dispraxia, discalculia, entre outros.
            </p>
        </div>
    </section>

    {{-- TIPOS DE NEURODIVERGÊNCIAS --}}
    <section class="py-5 section-blue">
        <div class="container">
            <h2 class="section-title mb-2">Tipos de Neurodivergências</h2>
            <p class="mb-4">
                Abaixo estão alguns dos tipos de neurodivergência mais reconhecidos e comumente citados:
            </p>

            <div class="row g-4">
                {{-- TEA --}}
                <div class="col-md-4">
                    <div class="card card-neuro h-100">
                        <img src="{{ asset('img/tea.png') }}" class="card-img-top" alt="TEA">
                        <div class="card-body">
                            <h5 class="card-title">Transtorno do Espectro Autista, TEA</h5>
                            <p class="card-text">
                                Afeta principalmente a comunicação, interação social e pode envolver padrões de
                                comportamento restritos ou repetitivos, além de sensibilidade sensorial.
                                O termo “espectro” indica uma grande variação nas manifestações.
                            </p>
                            <a href="{{ route('tea') }}" class="stretched-link"></a>
                        </div>
                    </div>
                </div>

                {{-- TDAH --}}
                <div class="col-md-4">
                    <div class="card card-neuro h-100">
                        <img src="{{ asset('img/tdah.png') }}" class="card-img-top" alt="TDAH">
                        <div class="card-body">
                            <h5 class="card-title">
                                Transtorno do Déficit de Atenção com Hiperatividade, TDAH
                            </h5>
                            <p class="card-text">
                                Caracterizado por níveis clinicamente significativos de desatenção, hiperatividade
                                e impulsividade que interferem no funcionamento diário.
                            </p>
                            <a href="{{ route('tdah') }}" class="stretched-link"></a>
                        </div>
                    </div>
                </div>

                {{-- Dislexia --}}
                <div class="col-md-4">
                    <div class="card card-neuro h-100">
                        <img src="{{ asset('img/dislexia.png') }}" class="card-img-top" alt="Dislexia">
                        <div class="card-body">
                            <h5 class="card-title">Dislexia</h5>
                            <p class="card-text">
                                Transtorno de aprendizagem que afeta as habilidades de leitura. Envolve dificuldade em
                                reconhecer sons da fala e decodificar palavras.
                            </p>
                            <a href="{{ route('dislexia') }}" class="stretched-link"></a>
                        </div>
                    </div>
                </div>

                {{-- Discalculia --}}
                <div class="col-md-4">
                    <div class="card card-neuro h-100">
                        <img src="{{ asset('img/discalculia.png') }}" class="card-img-top" alt="Discalculia">
                        <div class="card-body">
                            <h5 class="card-title">Discalculia</h5>
                            <p class="card-text">
                                Transtorno de aprendizagem específico que afeta a capacidade de compreender e
                                processar números e conceitos matemáticos.
                            </p>
                            <a href="{{ route('discalculia') }}" class="stretched-link"></a>
                        </div>
                    </div>
                </div>

                {{-- Disgrafia --}}
                <div class="col-md-4">
                    <div class="card card-neuro h-100">
                        <img src="{{ asset('img/disgrafia.png') }}" class="card-img-top" alt="Disgrafia">
                        <div class="card-body">
                            <h5 class="card-title">Disgrafia</h5>
                            <p class="card-text">
                                Transtorno de aprendizagem que afeta a capacidade de escrita, resultando em caligrafia
                                desorganizada, difícil de ler e velocidade de escrita lenta.
                            </p>
                            <a href="{{ route('disgrafia') }}" class="stretched-link"></a>
                        </div>
                    </div>
                </div>

                {{-- Tourette --}}
                <div class="col-md-4">
                    <div class="card card-neuro h-100">
                        <img src="{{ asset('img/tourette.png') }}" class="card-img-top" alt="Síndrome de Tourette">
                        <div class="card-body">
                            <h5 class="card-title">Síndrome de Tourette</h5>
                            <p class="card-text">
                                Caracterizada pela presença de tiques motores e vocais (movimentos e sons repetitivos
                                e involuntários).
                            </p>
                            <a href="{{ route('tourette') }}" class="stretched-link"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- COMO IDENTIFICAR --}}
    <section class="py-5 section-soft-green">
        <div class="container">
            <div class="row gy-4 align-items-center">
                <div class="col-lg-6">
                    <h2 class="section-title mb-3">Como identificar?</h2>
                    <p class="mb-2">
                        A neurodivergência se manifesta em como a pessoa processa informações, interage, aprende e regula
                        emoções. Os sinais variam muito – essa é justamente uma característica central da neurodiversidade.
                    </p>
                    <ul class="mb-2">
                        <li>Dificuldade em iniciar ou manter conversas; interpretar expressões ou linguagem corporal.</li>
                        <li>Desatenção frequente, esquecimento, dificuldade em organizar tarefas e materiais.</li>
                        <li>Reações intensas a sons, luzes, cheiros ou texturas, ou busca constante por estímulos.</li>
                        <li>Dificuldade significativa com leitura, escrita, ortografia ou cálculos.</li>
                        <li>Movimentos repetitivos, apego intenso a rotinas, interesses muito focados em poucos temas.</li>
                    </ul>
                    <p class="mb-0">
                        A observação atenta, o diálogo com a família e a equipe multiprofissional são essenciais
                        para oferecer suporte adequado.
                    </p>
                </div>
                <div class="col-lg-6 text-center">
                    <img src="{{ asset('img/identificar.png') }}"
                         alt="Criança estudando"
                         class="img-fluid rounded-3 shadow-sm">
                </div>
            </div>
        </div>
    </section>

    {{-- GUIA PARA EDUCADORES --}}
    <section class="py-5 section-blue-light">
        <div class="container">
            <h2 class="section-title mb-2">Guia para Educadores Inclusivos</h2>
            <p class="mb-4">
                A inclusão começa quando o educador é compreendido, capacitado e apoiado.
                Aqui reunimos orientações e recursos práticos para acolher alunos neurodivergentes
                de forma empática e eficaz.
            </p>

            <p class="mb-4">
                Nosso objetivo é fortalecer a prática pedagógica e inspirar uma educação que reconhece
                e valoriza as diferentes formas de pensar, sentir e aprender.
            </p>

            <h5 class="fw-bold mb-3">Confira guias práticos de apoio:</h5>

            <div class="row g-4 mb-4">
                <div class="col-md-3 col-sm-6">
                    <div class="card guia-card h-100">
                        <img src="{{ asset('img/adaptar.png') }}" class="card-img-top" alt="">
                        <div class="card-body">
                            <h6 class="card-title">
                                COMO ADAPTAR O AMBIENTE ESCOLAR
                            </h6>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="card guia-card h-100">
                        <img src="{{ asset('img/comunicar.png') }}" class="card-img-top" alt="">
                        <div class="card-body">
                            <h6 class="card-title">
                                COMUNICAÇÃO EFICAZ COM ALUNOS NEURODIVERGENTES
                            </h6>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="card guia-card h-100">
                        <img src="{{ asset('img/estrategia.png') }}" class="card-img-top" alt="">
                        <div class="card-body">
                            <h6 class="card-title">
                                ESTRATÉGIAS DE ENSINO INCLUSIVAS
                            </h6>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="card guia-card h-100">
                        <img src="{{ asset('img/ferramentas.png') }}" class="card-img-top" alt="">
                        <div class="card-body">
                            <h6 class="card-title">
                                FERRAMENTAS DIGITAIS ACESSÍVEIS
                            </h6>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center">
                <a href="{{route('baixar-pdf')}}" class="btn btn-lg btn-danger shadow cta-btn" download >
                    Baixar Guia Prático Inclusivo
                </a>

                <div class="text-success  pt-2">
               <strong>   Total de downloads ({{ $contador }}) </strong>
                </div>
            </div>
        </div>
    </section>
@endsection
