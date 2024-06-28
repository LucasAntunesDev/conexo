if (document.querySelector("#conta")) {
  const btnConta = document.querySelector("#conta")

  btnConta.addEventListener("click", (e) => {
    e.preventDefault
    const modalConta = document.querySelector("#modalConta")
    modalConta.classList.toggle("hidden")
    e.stopPropagation()
  })

  document.addEventListener("click", (e) => {
    const modalConta = document.querySelector("#modalConta")
    const btnConta = document.querySelector("#conta")

    if (!modalConta.contains(e.target) && e.target !== btnConta)
      modalConta.classList.add("hidden")
  })
}

if (document.querySelector("button.spin")) {
  const btn = document.querySelector("button.spin")
  btn.addEventListener("click", () => {
    if (document.querySelector("#login-icon"))
      document.querySelector("#login-icon").classList.add("hidden")

    if (document.querySelector("button>span"))
      document.querySelector("button>span").textContent = "Salvando"

    const btnLoader = document.querySelector(".btn-loader")
    btnLoader.classList.remove("hidden")
  })
}

const filtrar = () => {
  const items = document.querySelectorAll(".lista-item")

  const pesquisarBtn = document.querySelector("#pesquisar")

  if (pesquisarBtn.value != "") {
    for (let item of items) {
      let titulo = item.querySelector("a")
      // console.log(titulo.textContent)
      // let titulo = document.querySelectorAll('.lista-titulo')
      titulo = titulo.innerHTML.toLowerCase()
      // titulo = titulo.textContent.toLowerCase()
      // alert(titulo.innerHTML)

      let filtrarTexto = pesquisarBtn.value.toLowerCase()

      if (!titulo.includes(filtrarTexto)) {
        item.classList.add("hidden")
      } else {
        item.classList.remove("hidden")
        // item.classList.add('hidden')
      }
    }
  } else {
    for (let item of items) {
      // item.classList.add('hidden')
      item.classList.remove("hidden")
    }
  }
}

if (document.querySelector("#pesquisar")) {
  document.querySelector("#pesquisar").addEventListener("input", filtrar)
}

const toast = document.querySelector(".toast")

if (toast) {
  const close = document.querySelector("#close-toast")
  close.addEventListener("click", () => toast.classList.add("disappear"))
  setTimeout(() => toast.classList.add("disappear"), 2000)
}
