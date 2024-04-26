const dataAtual = document.querySelector('#dataAtual')
dataAtual.innerHTML = new Date(Date.now()).toLocaleString().split(',')[0];

const criarTabuleiro = (max = 16) => {
    const tab = [];

    let k = 0;
    while (k < max) {
        const n = Math.ceil(Math.random() * (max / 2));
        if (tab.filter((x) => x === n).length >= 2) continue;

        tab.push(n);
        k++;
    }

    return tab;
};

const jogo = fetch('http://localhost:8000/api/diario').then(response => response.json()).
then(data => console.log(data[0])).
catch(error => console.log(`Ocorreu o seguinte erro: ${error}`))

console.log(jogo)

const grupos = [
    {
        numero: 3,
        tema: "Advérbios de lugar",
        palavras: ["lá", "ali", "aqui", "acolá"],
    },
    {
        numero: 2,
        tema: "Fontes de energia",
        palavras: ["vento", "sol", "carvão", "água"],
    },
    {
        numero: 4,
        tema: "Participantes num processo judicial",
        palavras: ["ré", "juíza", "testemunha", "autora"],
    },
    { numero: 1, tema: "Notas musicais", palavras: ["dó", "mi", "si", "fá"] },
]

let todasPalavras = grupos[0].palavras.concat(grupos[1].palavras).concat(grupos[2].palavras).concat(grupos[3].palavras)
todasPalavras = todasPalavras.sort()

let placar = [];
let trancarJogo = false;

let jogadas = []

const tentativas = []

let tentativa = {
    selecionado: jogadas
}

const tab = criarTabuleiro();
const div = document.getElementById("tabuleiro");

const verificarJogadas = (grupos, jogadas) => {
    let numeroAcertosElement = document.querySelector('#numeroAcertos')
    numeroAcertos = parseInt(numeroAcertosElement.innerHTML)
    const gruposAcertados = document.querySelector('#grupos')

    for (const grupo of grupos) {
        const palavrasGrupo = grupo.palavras;
        const todasPresentes = jogadas.every(jogada => palavrasGrupo.includes(jogada));

        if (todasPresentes) {
            console.log(`Todas as palavras de 'jogadas' estão no grupo com tema "${grupo.tema}" (Grupo ${grupo.numero}).`);
            numeroAcertos++
            numeroAcertosElement.innerHTML = numeroAcertos
            gruposAcertados.innerHTML = `${gruposAcertados.innerHTML} <span class="uppercase"><b>${grupo.tema}</b>: ${jogadas} </span>`

        } else { console.log('Não!!') }
    }
    console.log(numeroAcertos)
    if (numeroAcertos === 4) {
        document.querySelector('#tabuleiro').setAttribute('class', 'hidden')
        document.querySelector('#acertou').setAttribute('class', 'bg-violet-100 rounded-md p-3 flex-col justify-center gap-y-2 my-8 flex')
        document.querySelector('#acertouNumeroTentativas').innerHTML = document.querySelector('#numeroTentativas').innerHTML
        console.log(document.querySelector('numeroTentativas').innerHTML)
        // alert('Você venceu!! =D')
    }
}

for (let i = 0; i < 16; i++) {
    const btn = document.createElement("button");
    btn.setAttribute("type", "button");
    btn.setAttribute("class", "bg-violet-100 p-6 rounded-md flex items-center hover:cursor-pointer focus:scale-90 transition duration-300 ease-in-out uppercase");
    btn.innerHTML = todasPalavras[i];
    btn.addEventListener("click", () => {
        if (jogadas.some((j) => j === btn)) return;
        btn.classList.add('bg-sky-500')
        jogadas.push(btn.innerHTML)

        if (jogadas.length === 4) {
            let numeroTentativasElement = document.querySelector('#numeroTentativas')
            let numeroTentativas = parseInt(document.querySelector('#numeroTentativas').innerHTML)
            numeroTentativas++
            numeroTentativasElement.innerHTML = numeroTentativas

            tentativa = {
                selecionado: jogadas
            }

            tentativas.push(tentativa)

            verificarJogadas(grupos, jogadas)

            jogadas = []

        }

    });

    console.log(typeof document.querySelectorAll('button')[1])
    document.querySelectorAll('button')[1].classList.remove('bg-sky-500')

    div.appendChild(btn);
}