fetch('http://localhost:8000/api/professores')
    .then((response) => {
        if (response.ok) {
            return response.json()
        }
        throw new Error("Algo deu errado na solicitação")
    })
    .then((data) => {
        const professores = data.data
        const form = document.querySelector('form')

        const verificarInput = (input, valido) => {
            if (!valido) {
                if (input.classList.contains('border-error')) input.classList.remove('border-error')
                input.classList.add('border-valid')
            } else {
                if (input.classList.contains('border-valid')) input.classList.remove('border-valid')
                input.classList.add('border-error')
            }
        }

        const verificarLogin = () => {
            const loginInput = document.querySelector('#login')
            const senhaInput = document.querySelector('#senha')
            const professor = professores.find(prof => prof.login === loginInput.value)

            const condicoesLogin = professor && loginInput.value !== null && loginInput.value !== ""
            const condicoesSenha = professor && professor.senha === senhaInput.value && senhaInput.value !== null && senhaInput.value !== ""

            verificarInput(loginInput, !condicoesLogin)
            verificarInput(senhaInput, !condicoesSenha)

            document.querySelector('#btn').disabled = !(condicoesSenha && condicoesLogin)
        }

        form.addEventListener('input', verificarLogin)
        verificarLogin()
    })
    .catch((error) => {
        console.error("Erro ao buscar dados:", error)
    });
