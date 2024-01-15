const imgDiv = document.querySelector('.profile-user')
const imgProfile = document.querySelector('#photo')
const file= document.querySelector('#file')
const  uplodeBtn= document.querySelector('#uplodeBtn')

file.addEventListener('change', function () {
    const chosedFile = this.files[0]
    if (chosedFile) {
        const reader = new FileReader()
        
        reader.addEventListener('load', function () {
            imgProfile.setAttribute('src', reader.result)
        })
        reader.readAsDataURL(chosedFile)
    }
})
