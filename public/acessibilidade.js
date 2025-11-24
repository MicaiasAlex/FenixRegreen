const btn = document.querySelector('.acessibilidade'); // Onde está o evento de clique
const menu = document.querySelector('.box_acessibilidade');
const icon = document.querySelector('.icon_acessibilidade');

// Ícones
const ICONE_ABRIR = `<svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e3e3e3"><path d="M480-720q-33 0-56.5-23.5T400-800q0-33 23.5-56.5T480-880q33 0 56.5 23.5T560-800q0 33-23.5 56.5T480-720ZM360-80v-520H120v-80h720v80H600v520h-80v-240h-80v240h-80Z"/></svg>`;
const ICONE_FECHAR = `<svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e3e3e3"><path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z"/></svg>`;

if (!menu.classList.contains('sumir')) {
    icon.innerHTML = ICONE_ABRIR;
}

btn.addEventListener("click", function () {
    menu.classList.toggle('sumir');

    if (menu.classList.contains('sumir')) {
        icon.innerHTML = ICONE_FECHAR;
    } else {
        icon.innerHTML = ICONE_ABRIR;
    }
});

// TAMANHOS DE LETRA
const btnTamanhoGrande = document.querySelector('.l_grande');
const btnTamanhoMedio = document.querySelector('.l_media');
const btnTamanhoPequeno = document.querySelector('.l_pequena');

const body = document.body;
const classesDeTamanho = ['fonte-pequena', 'fonte-media', 'fonte-grande'];


function mudarTamanhoTexto(novaClasse) {
    // Remove todas as classes de tamanho no body
    classesDeTamanho.forEach(classe => {
        body.classList.remove(classe);
    });

    // Adiciona a nova classe que queremos
    body.classList.add(novaClasse);
}

// Garanti que os botões realmente foram encontrados, para não ter erro de só pegar 1
if (btnTamanhoGrande) {
    btnTamanhoGrande.addEventListener('click', () => {
        mudarTamanhoTexto('fonte-grande');
    });
}

if (btnTamanhoMedio) {
    btnTamanhoMedio.addEventListener('click', () => {
        mudarTamanhoTexto('fonte-media'); 
    });
}

if (btnTamanhoPequeno) {
    btnTamanhoPequeno.addEventListener('click', () => {
        mudarTamanhoTexto('fonte-pequena');
    });
}