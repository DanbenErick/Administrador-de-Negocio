const empleados = document.querySelectorAll('.delete_empleados')

empleados.forEach(empleado => {
    empleado.addEventListener('click', function() {
        alert('solo se puede eliminar una cuenta que no haya interactuado con el sistema')
    })
})