if (document.querySelector("#conta")) {
  const btnConta = document.querySelector("#conta")

  btnConta.addEventListener("click", (e) => {
    e.preventDefault
    const modalConta = document.querySelector("#modalConta")
    modalConta.classList.toggle("dissapear")
    e.stopPropagation()
  })

  document.addEventListener("click", (e) => {
    const modalConta = document.querySelector("#modalConta")
    const btnConta = document.querySelector("#conta")

    if (!modalConta.contains(e.target) && e.target !== btnConta)
      modalConta.classList.add("dissapear")
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

if (document.querySelector("#pesquisar")) {
  document.querySelector("#pesquisar").addEventListener("input", filtrar)
}

const toast = document.querySelector(".toast")

if (toast) {
  const close = document.querySelector("#close-toast")
  close.addEventListener("click", () => toast.classList.add("disappear"))
  setTimeout(() => toast.classList.add("disappear"), 2000)
}
