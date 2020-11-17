
const elementos = document.querySelectorAll('.delete')

elementos.forEach(elemento => {
    elemento.addEventListener('click', function(evento) {
        let consulta = confirm("Deseas eliminar este elemento")
        consulta ? console.log('Eliminacion abortada'): evento.preventDefault()
    })
})

const aside = document.querySelector("aside") 
boton_accion.addEventListener("click", () => {
    aside.style.display = aside.style.display == "block" ? "none" : "block"; 
    if(boton_accion.classList[0] == "icon-arrow-circle-o-up") {
        boton_accion.classList.replace("icon-arrow-circle-o-up", "icon-arrow-circle-o-down")
    }else if(boton_accion.classList[0] == "icon-arrow-circle-o-down"){
        boton_accion.classList.replace("icon-arrow-circle-o-down", "icon-arrow-circle-o-up")
    }
})