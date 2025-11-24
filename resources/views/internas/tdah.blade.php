@extends('layouts.site')

@section('content')
    {{-- Faixa topo: Tipos de Neurodivergências --}}
    <section class="py-3" style="background-color:#3d3f45; color:#fff;">
        <div class="container">
            <h5 class="mb-1">Tipos de Neurodivergências</h5>
            <p class="small mb-0">
                A neurodivergência abrange uma vasta gama de condições que afetam o funcionamento cerebral de maneiras variadas.
                Aqui estão alguns dos tipos de neurodivergência mais reconhecidos e comumente citados.
            </p>
        </div>
    </section>

    {{-- Conteúdo principal --}}
    <section class="py-4" style="background-color:#e9f4ff;">
        <div class="container">
            <div class="p-4 p-md-5 rounded-3" style="background-color:#ffffff; border: 2px solid #d0e6ff;">
                <div class="row gy-4">
                    <div class="col-md-4 text-center">
                        <img src="https://notiserrasc.com.br/wp-content/uploads/2025/02/TDAH-CAPA.jpg.webp"
                             alt="TDAH"
                             class="img-fluid rounded-3 shadow-sm mb-3">
                    </div>
                    <div class="col-md-8">
                        <h2 class="fw-bold mb-3" style="color:#1d4f82;">
                            TDAH: Transtorno do Déficit de Atenção com Hiperatividade
                        </h2>

                        <p class="mb-2">
                            Ao se falar em alunos com TDAH, já se pensa nas crianças desobedientes, que não param quietas,
                            que interrompem, que parecem preguiçosas ou desinteressadas, que não entregam trabalhos e
                            causam constante desordem na sala de aula.
                        </p>
                        <p class="mb-2">
                            Atualmente, o Manual Diagnóstico e Estatístico de Transtornos Mentais (DSM-5) classifica o TDAH
                            pela presença de padrões persistentes de desatenção e/ou hiperatividade-impulsividade que
                            interferem no funcionamento ou no desenvolvimento, sendo crucial reconhecer a variação entre
                            o tipo predominantemente desatento, hiperativo-impulsivo ou combinado.
                        </p>

                        <h4 class="fw-bold mt-4 mb-2" style="color:#1d4f82;">O Desafio em Sala:</h4>
                        <p class="mb-3">
                            Caracterizado por níveis clinicamente significativos de desatenção, hiperatividade e
                            impulsividade que interferem no funcionamento diário do estudante.
                        </p>

                        <p class="mb-1"><strong>Comunicação Eficaz:</strong> Use comandos curtos, diretos e garanta o contato visual antes de dar instruções. Use checklists para as tarefas.</p>
                        <p class="mb-1"><strong>Adaptação do Ambiente Escolar:</strong> Posicione o aluno perto do professor e longe de distrações (janelas, portas). Permita pausas ativas curtas ou tarefas que envolvam movimento.</p>
                        <p class="mb-1"><strong>Estratégias de Ensino:</strong> Alterne metodologias para manter o interesse. Incorpore o movimento no aprendizado. Use recursos visuais e auditivos combinados para reforçar a atenção.</p>

                        <h4 class="fw-bold mt-4 mb-2" style="color:#1d4f82;">Dicas Extras para Adaptação e Ensino:</h4>
                        <p class="mb-1">
                            <strong>Permita o Movimento Funcional:</strong> As pausas ativas (como pedir para o aluno entregar materiais,
                            apagar o quadro ou levar um recado rápido) ajudam a liberar o excesso de energia sem quebrar o ritmo da aula.
                        </p>
                        <p class="mb-1">
                            <strong>Uso de Temporizadores:</strong> Utilize um cronômetro visual (como um timer de cozinha ou um
                            aplicativo) para marcar o tempo de uma atividade. Isso ajuda a internalizar a noção de tempo, que é
                            difícil para quem tem TDAH.
                        </p>
                        <p class="mb-0">
                            <strong>Reforço Positivo Imediato:</strong> O aluno com TDAH se beneficia de elogios e de recompensas
                            de feedback imediato do que de recompensas distantes. Elogie imediatamente um bom comportamento
                            ou a finalização de uma tarefa.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
