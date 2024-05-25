const criarTabuleiro = () => {
    const tab = []

    let k = 0
    while (k < 16) {
        const n = Math.ceil(Math.random() * (16 / 2))
        if (tab.filter((x) => x === n).length >= 2) continue

        tab.push(n)
        k++
    }

    return tab
}

if (!localStorage.getItem('conexoJogoStatus')) localStorage.setItem('conexoJogoStatus', JSON.stringify({}))
const dadosLocalStorage = JSON.parse(localStorage.getItem('conexoJogoStatus'))

const id = new URLSearchParams(window.location.search).get('id')
const url = id ? `http://localhost:8000/api/jogo?id=${id}` : 'http://localhost:8000/api/jogo'

fetch(url)
    .then((response) => {
        if (response.ok) {
            return response.json()
        }
        throw new Error("Algo deu errado na solicitação")
    })
    .then((data) => {
        const grupos = data

        document.querySelector('#skeleton').classList.add('hidden')

        document.querySelector("#dataAtual").innerHTML = data[0].data
        document.querySelector('#nomeJogo').innerHTML = data[0].nome


        const todasPalavras = grupos.reduce((acc, grupo) => {
            const j = acc.concat(grupo.palavras)
            return j.sort()
        }, [])

        const jogoId = grupos[0].jogo_id

        if (dadosLocalStorage[jogoId] && dadosLocalStorage[jogoId].finalizado) {
            document.querySelector('#acertou').classList.remove('hidden')

            const gruposDiv = document.querySelector('#grupos')
            gruposDiv.classList.remove('hidden')

            grupos.forEach(grupo => {
                document.querySelector('#acertouNumeroTentativas').innerHTML = dadosLocalStorage[jogoId].tentativas
                document.querySelector('#numeroTentativas').innerHTML =  dadosLocalStorage[jogoId].tentativas

                gruposDiv.innerHTML = `${gruposDiv.innerHTML} 
                <div class="flex flex-col uppercase bg-violet-300 dark:bg-violet-600 px-4 py-6 rounded-md mb-2">
                    <span class="text-center font-bold">
                        ${grupo.grupo}
                    </span>
                    <span class="text-center">
                    ${grupo.palavras}
                    </span>
                </div>`
            })

            document.querySelector('#tabuleiro').classList.add('pb-4')
            return
        }

        let jogadas = []
        let numeroTentativas = 0

        const tentativas = []

        let tentativa = {
            selecionado: jogadas
        }

        const tab = criarTabuleiro()
        const tabuleiro = document.querySelector("#tabuleiro")

        const verificarJogadas = (grupos, jogadas) => {
            let numeroAcertosElement = document.querySelector('#numeroAcertos')
            let numeroAcertos = parseInt(numeroAcertosElement.innerHTML)
            const gruposAcertados = document.querySelector('#grupos')

            for (const grupo of grupos) {
                const palavrasGrupo = grupo.palavras
                const todasPresentes = jogadas.every(jogada => palavrasGrupo.includes(jogada))

                if (todasPresentes) {
                    numeroAcertos++
                    numeroAcertosElement.innerHTML = numeroAcertos
                    gruposAcertados.innerHTML = `${gruposAcertados.innerHTML} 

                    <div class="flex flex-col uppercase bg-violet-300 dark:bg-violet-600 px-4 py-6 rounded-md mb-2">
                        <span class="text-center font-bold">
                            ${grupo.grupo}
                        </span>
                        <span class="text-center">
                        ${jogadas}
                        </span>
                    </div>`

                    jogadas.forEach(palavra => {
                        document.querySelectorAll('button').forEach(botao => {
                            if (botao.innerHTML === palavra) botao.classList.add('hidden')
                        })
                    })

                }
            }

            if (numeroAcertos === 4) {
                let jogoDados = {
                    finalizado: true,
                    tentativas: numeroTentativas
                }

                dadosLocalStorage[jogoId] = jogoDados
                dadosLocalStorage[tentativas] = numeroTentativas
                localStorage.setItem('conexoJogoStatus', JSON.stringify(dadosLocalStorage))

                document.querySelector("#acertou").classList.remove('hidden')

                document.querySelector("#acertouNumeroTentativas").innerHTML =
                    document.querySelector("#numeroTentativas").innerHTML
            }
        }

        for (let i = 0; i < 16; i++) {
            const btn = document.createElement("button")
            btn.setAttribute("type", "button")
            btn.setAttribute(
                "class",
                "conexo-btn"
            )
            btn.innerHTML = todasPalavras[i]
            btn.addEventListener("click", () => {
                if (jogadas.some((j) => j === btn)) return
                btn.classList.add("bg-violet-500")
                btn.disabled = true
                jogadas.push(btn.innerHTML)

                if (jogadas.length === 4) {
                    numeroTentativas++
                    let numeroTentativasElement =
                        document.querySelector("#numeroTentativas")
                    numeroTentativasElement.innerHTML = numeroTentativas

                    tentativa = {
                        selecionado: jogadas
                    };

                    tentativas.push(tentativa)

                    verificarJogadas(grupos, jogadas)

                    jogadas = []

                    document.querySelectorAll('button').forEach(botao => {
                        botao.disabled = false
                        if (botao.classList.contains('bg-violet-500')) {

                            botao.classList.remove('bg-violet-500')
                        }
                    })
                }
            })

            tabuleiro.appendChild(btn)
        }

    })
    .catch((error) => {
        document.querySelector('#tabuleiro').setAttribute('class', 'flex justify-center items-center m-auto')
        document.querySelector('#tabuleiro').innerHTML = `
            <div class="py-4 w-fit flex flex-col justify-center items-center">
                <span class="text-6xl mx-auto font-extrabold">OPS!</span>
                <span class="text-2xl my-2 font-bold">Ocorreu algum erro ao buscar os dados 😔, tente novamente mais tarde</span>
            </div>`
    })
