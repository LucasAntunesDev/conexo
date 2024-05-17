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

const buscarDisciplina = document.querySelector('#buscarDisciplina')

buscarDisciplina.addEventListener('click', () => {
  document.querySelector('#menu-disciplinas').classList.toggle('hidden')
})
