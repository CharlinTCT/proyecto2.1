//Efecto de ondas
const effect = document.querySelector('.effect')

const createRipple = (e) =>{
    let ripple = document.createElement('span')
    let x = e.clientX
    let y = e.clientY

    ripple.style.left = x + 'px'
    ripple.style.top = y + 'px'

    effect.appendChild(ripple)

    setTimeout(() => {
        ripple.remove()
    },5000)
    
    console.log(x, y)
}

effect.addEventListener('click', createRipple)