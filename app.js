window.addEventListener("scroll", function () {
    let variavel = document.querySelector(".header")
    variavel.classList.toggle("navAct", window.scrollY > 200)
})

window.addEventListener("scroll", function () {
    let variavel = document.querySelector(".degrade")
    variavel.classList.toggle("act", window.scrollY > 50)
})
