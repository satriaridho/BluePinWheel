// Animasi Toggle

// const toggle = document.querySelector('.nav-toggle input')
// const nav = document.querySelector('nav ul')

// toggle.addEventListener('click', function () {
//     nav.classList.toggle('slide')
// })

// window.addEventListener('scroll', () => {
//     document.querySelector('.navbar').classList.toggle('scrolling', window.scrollY > 0)
// })


// NavDropDown 
const subMenu = document.getElementById("subMenu")

function subMenuProses() {
    subMenu.classList.toggle("open-menu")
}

window.addEventListener('scroll', function () {
    this.document.querySelector('.scrollah').classList.toggle('scrolling', this.window.scrollY > 0)
})

