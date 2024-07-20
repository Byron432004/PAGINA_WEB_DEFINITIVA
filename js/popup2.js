// Obtener el modal
var modal = document.getElementById("ventanaModal2");

// Obtener el botón que abre el modal
var abrirBtn = document.getElementById("abrirModal2");

// Obtener el botón de cerrar
var cerrarBtn = document.querySelector(".cerrar-modal.cerrar-modal2");

// Cuando se haga clic en el botón de abrir, mostrar el modal
abrirBtn.onclick = function() {
  modal.style.display = "block";
}

// Cuando se haga clic en el botón de cerrar, cerrar el modal
cerrarBtn.onclick = function() {
  modal.style.display = "none";
}

// Cuando el usuario haga clic fuera del modal, cerrar el modal
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
