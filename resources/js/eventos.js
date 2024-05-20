if (document.querySelector('#conta')) {

  const btnConta = document.querySelector('#conta')

  btnConta.addEventListener('click', (e) => {
    e.preventDefault
    const modalConta = document.querySelector('#modalConta')
    modalConta.classList.toggle('hidden')
    e.stopPropagation()
  })

  document.addEventListener('click', (e) => {
    const modalConta = document.querySelector('#modalConta');
    const btnConta = document.querySelector('#conta')

    if (!modalConta.contains(e.target) && e.target !== btnConta) modalConta.classList.add('hidden')

  })

}

if (document.querySelector('button.spin')) {
  const btn = document.querySelector('button.spin')
  btn.addEventListener('click', () => {
    if (document.querySelector('#login-icon')) document.querySelector('#login-icon').classList.add('hidden')
    
    if(document.querySelector('button>span')) document.querySelector('button>span').textContent = 'Salvando...'

    const spinner = document.querySelector("#spinner")
    spinner.classList.remove('hidden')
  })
}
// const buscarDisciplina = document.querySelector('#buscarDisciplina')

// buscarDisciplina.addEventListener('click', () => {
//   document.querySelector('#menu-disciplinas').classList.toggle('hidden')
// })