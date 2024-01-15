const sideMenu      = document.querySelector('aside')
const menuBtn       = document.querySelector('#menu-btn')
const closeBtn      = document.querySelector('#close-btn')
const themeToggler  = document.querySelector('.theme-toggler')
const links         = document.querySelectorAll('.sidebar a')
const bodyId        = document.querySelector('body').id

for (const link of links) {
    if (link.dataset.active == bodyId) {
        link.classList.add('active')
    }
}

// Show Navigation
menuBtn.addEventListener('click', () => {
    sideMenu.classList.toggle('slide');
})

closeBtn.addEventListener('click', () =>  {
    sideMenu.classList.toggle('slide')
})


// change theme
if(localStorage.getItem('theme') == 'dark')  {
    setDarkMode(true)
}

function setDarkMode(isDark) {
    if (isDark) {
        document.body.classList.toggle('dark-theme')
        themeToggler.querySelector('span:nth-child(1)').classList.toggle('active')
        themeToggler.querySelector('span:nth-child(2)').classList.toggle('active')
        localStorage.setItem('theme','dark')
    }else {
        localStorage.removeItem('theme','dark')
        document.body.classList.toggle('dark-theme')
        themeToggler.querySelector('span:nth-child(1)').classList.toggle('active')
        themeToggler.querySelector('span:nth-child(2)').classList.toggle('active')
    }
}


// ubah foto
let imgDivPorto       = document.querySelector('.form-group')
let imgPorto          = document.querySelector('.imgPorto')
let filePorto         = document.querySelector('.filePorto')

filePorto.addEventListener('change', function () {
    const chosedFile = this.files[0]
    if (chosedFile) {
        const reader = new FileReader()
        
        reader.addEventListener('load', function () {
            imgPorto.setAttribute('src', reader.result)
        })
        reader.readAsDataURL(chosedFile)
    }
})


// themeToggler.addEventListener('click', () => {
//     themeToggler.querySelector('span:nth-child(1)').classList.toggle('active')
//     themeToggler.querySelector('span:nth-child(2)').classList.toggle('active')

//     if (document.body.classList.toggle('dark-theme') ==  ) {
        
//     }

// })