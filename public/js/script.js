
const elementos = document.querySelectorAll('.delete')

elementos.forEach(elemento => {
    elemento.addEventListener('click', function(evento) {
        let consulta = confirm("Deseas eliminar este elemento")
        consulta ? console.log('Eliminacion abortada'): evento.preventDefault()
    })
})