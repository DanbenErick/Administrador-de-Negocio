document.addEventListener("DOMContentLoaded", function () {
  document
    .getElementById("formulario")
    .addEventListener("submit", validarFormulario)
})
const errorU = document.getElementById("errorU")
const errorP = document.getElementById("errorP")
const letra = "No has escrito nada "
function validarFormulario(evento) {
  evento.preventDefault()
  var usuario = document.getElementById("usuario").value
  if (usuario.length == 0) {
    errorU.innerHTML = letra + "en el usuario"
    errorU.style.color = "red"
    return
  } else {
    document.getElementById("errorU").innerHTML = ""
    var password = document.getElementById("password").value
    if (password.length == 0) {
      errorP.innerHTML = letra + "en la contraseña"
      return
    } else {
    }
  }
  this.submit()
}
