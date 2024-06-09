if (document.querySelector("#tabuleiro")) {
  const criarTabuleiro = () => {
    const tabuleiro = []

    let contador = 0
    while (contador < 16) {
      const numero = Math.ceil(Math.random() * (16 / 2))
      if (tabuleiro.filter((x) => x === numero).length >= 2) continue

      tabuleiro.push(numero)
      contador++
    }

    return tabuleiro
  }

  if (!localStorage.getItem("conexoJogoStatus"))
    localStorage.setItem("conexoJogoStatus", JSON.stringify({}))
  const dadosLocalStorage = JSON.parse(localStorage.getItem("conexoJogoStatus"))

  const id = new URLSearchParams(window.location.search).get("id")
  const url = id
    ? `http://localhost:8000/api/jogo?id=${id}`
    : "http://localhost:8000/api/jogo"

  fetch(url)
    .then((response) => {
      if (response.ok) {
        return response.json()
      }
      throw new Error("Algo deu errado na solicitação")
    })
    .then((data) => {
      const jogo = data
      document.querySelector("#dataJogo").innerHTML = jogo.data

      const grupos = [
        {
          grupo: jogo.grupo_1_nome,
          palavras: jogo.grupo_1_palavras.split(","),
          jogo_id: jogo.grupo_1_id,
        },
        {
          grupo: jogo.grupo_2_nome,
          palavras: jogo.grupo_2_palavras.split(","),
          jogo_id: jogo.grupo_2_id,
        },
        {
          grupo: jogo.grupo_3_nome,
          palavras: jogo.grupo_3_palavras.split(","),
          jogo_id: jogo.grupo_3_id,
        },
        {
          grupo: jogo.grupo_4_nome,
          palavras: jogo.grupo_4_palavras.split(","),
          jogo_id: jogo.grupo_4_id,
        },
      ]

      document.querySelector("#skeleton").classList.add("hidden")
      document.querySelector("#nomeJogo").innerHTML = jogo.nome

      const todasPalavras = grupos
        .reduce((acc, grupo) => {
          return acc.concat(grupo.palavras)
        }, [])
        .sort()

      const jogoId = grupos[0].jogo_id

      if (dadosLocalStorage[jogoId] && dadosLocalStorage[jogoId].finalizado) {
        document.querySelector("#acertou").classList.remove("hidden")

        const gruposDiv = document.querySelector("#grupos")
        gruposDiv.classList.remove("hidden")

        grupos.forEach((grupo) => {
          document.querySelector("#acertouNumeroTentativas").innerHTML =
            dadosLocalStorage[jogoId].tentativas
          document.querySelector("#numeroTentativas").innerHTML =
            dadosLocalStorage[jogoId].tentativas

          gruposDiv.innerHTML += `
                <div class="flex flex-col uppercase bg-violet-300 px-4 py-6 rounded-2xl mb-2 shadow-md">
                    <h2 class="text-center font-bold text-violet-800">${
                      grupo.grupo
                    }</h2>
                    <p class="text-center">
                        ${grupo.palavras.join(", ")}
                    </p>
                </div>`
        })

        document.querySelector("#tabuleiro").classList.add("pb-4")
        return
      }

      let jogadas = []
      let numeroTentativas = 0
      const tentativas = []
      let tentativa = {
        selecionado: jogadas,
      }

      const tabuleiro = document.querySelector("#tabuleiro")

      const verificarJogadas = (grupos, jogadas) => {
        let numeroAcertosElement = document.querySelector("#numeroAcertos")
        let numeroAcertos = parseInt(numeroAcertosElement.innerHTML)
        const gruposAcertados = document.querySelector("#grupos")

        grupos.forEach((grupo) => {
          const palavrasGrupo = grupo.palavras
          const todasPresentes = jogadas.every((jogada) =>
            palavrasGrupo.includes(jogada)
          )

          if (todasPresentes) {
            numeroAcertos++
            numeroAcertosElement.innerHTML = numeroAcertos
            gruposAcertados.innerHTML += `
                    <div class="flex flex-col uppercase bg-violet-300  px-4 py-6 rounded-xl mb-2">
                        <span class="text-center font-bold">
                            ${grupo.grupo}
                        </span>
                        <span class="text-center">
                            ${jogadas.join(", ")}
                        </span>
                    </div>`

            jogadas.forEach((palavra) => {
              document.querySelectorAll("button").forEach((botao) => {
                if (botao.textContent === palavra) botao.classList.add("hidden")
              })
            })
          }
        })

        if (numeroAcertos === 4) {
          let jogoDados = {
            finalizado: true,
            tentativas: numeroTentativas,
          }

          dadosLocalStorage[jogoId] = jogoDados
          localStorage.setItem(
            "conexoJogoStatus",
            JSON.stringify(dadosLocalStorage)
          )

          document.querySelector("#acertou").classList.remove("hidden")
          document.querySelector("#acertouNumeroTentativas").innerHTML =
            numeroTentativas
        }
      }

      for (let i = 0; i < 16; i++) {
        const botao = document.createElement("button")
        botao.setAttribute("type", "button")
        botao.setAttribute("class", "conexo-btn")
        botao.textContent = todasPalavras[i]
        botao.addEventListener("click", () => {
          if (jogadas.some((j) => j === botao.textContent)) return
          botao.classList.add("bg-violet-500")
          botao.disabled = true
          jogadas.push(botao.textContent)

          if (jogadas.length === 4) {
            numeroTentativas++
            let numeroTentativasElement =
              document.querySelector("#numeroTentativas")
            numeroTentativasElement.innerHTML = numeroTentativas

            tentativa = { selecionado: jogadas }

            tentativas.push(tentativa)
            verificarJogadas(grupos, jogadas)

            jogadas = []

            document.querySelectorAll("button").forEach((botao) => {
              botao.disabled = false
              if (botao.classList.contains("bg-violet-500"))
                botao.classList.remove("bg-violet-500")
            })
          }
        })

        tabuleiro.appendChild(botao)
      }
    })
    .catch((error) => {
      document
        .querySelector("#tabuleiro")
        .setAttribute("class", "flex justify-center items-center m-auto")

      document.querySelector("#numeroTentativas").classList.add("hidden")
      document
        .querySelector("#numeroTentativas")
        .parentElement.classList.add("hidden")
      document.querySelector("#voltar").classList.add("hidden")

      document.querySelector("body").classList.add("max-h-[100vh]")

      document.querySelector("#tabuleiro").innerHTML = `
      <section class="flex gap-2 my-auto w-full max-w-[100vw]">
        <div class="py-4 flex flex-col justify-center items-center w-6/12">
          <p class="text-xl font-semibold ">404<p>
          <h2 class="text-7xl mx-auto font-bold text-violet-500">Erro!</h2>
          <div class='my-4 *:text-xl *:font-semibold'>
            <p>Ocorreu algum erro ao buscar os dados,</p> 
            <p>tente novamente mais tarde</p>
          </div>
          <button type='button' onClick="window.history.back()" class='btn-primary p-4 inline-flex items-center gap-x-2'>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5">
              <path fill-rule="evenodd" d="M17 10a.75.75 0 0 1-.75.75H5.612l4.158 3.96a.75.75 0 1 1-1.04 1.08l-5.5-5.25a.75.75 0 0 1 0-1.08l5.5-5.25a.75.75 0 1 1 1.04 1.08L5.612 9.25H16.25A.75.75 0 0 1 17 10Z" clip-rule="evenodd" />
            </svg>
            Voltar
          </button>
        </div>

        <figure class='w-6/12 flex justify-center'>  
          <img src='error.svg' class='w-[30rem]'>
        </figure>  
        
      </section>`
    })
}
