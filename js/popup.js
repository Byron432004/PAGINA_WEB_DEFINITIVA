// Función para abrir la ventana modal por número
function abrirModal(numero) {
  var modal = document.getElementById("ventanaModal" + numero);
  modal.style.display = "block";
}

// Función para cerrar la ventana modal por número
function cerrarModal(numero) {
  var modal = document.getElementById("ventanaModal" + numero);
  modal.style.display = "none";
}

// Asociar funciones a los botones
document.getElementById("abrirModal1").addEventListener("click", function() {
  abrirModal(1);
});
document.getElementById("abrirModal2").addEventListener("click", function() {
  abrirModal(2);
});

document.getElementById("abrirModal3").addEventListener("click", function() {
  abrirModal(3);
});
document.getElementById("abrirModal4").addEventListener("click", function() {
  abrirModal(4);
});
document.getElementById("abrirModal5").addEventListener("click", function() {
  abrirModal(5);
});
document.getElementById("abrirModal6").addEventListener("click", function() {
  abrirModal(6);
});
document.getElementById("abrirModal7").addEventListener("click", function() {
  abrirModal(7);
});
document.getElementById("abrirModal8").addEventListener("click", function() {
  abrirModal(8);
});
document.getElementById("abrirModal9").addEventListener("click", function() {
  abrirModal(9);
});
document.getElementById("abrirModal10").addEventListener("click", function() {
  abrirModal(10);
});
document.getElementById("abrirModal11").addEventListener("click", function() {
  abrirModal(11);
});
document.getElementById("abrirModal12").addEventListener("click", function() {
  abrirModal(12);
});
document.getElementById("abrirModal13").addEventListener("click", function() {
  abrirModal(13);
});
document.getElementById("abrirModal14").addEventListener("click", function() {
  abrirModal(14);
});
document.getElementById("abrirModal15").addEventListener("click", function() {
  abrirModal(15);
});
document.getElementById("abrirModal16").addEventListener("click", function() {
  abrirModal(16);
});
// Asociar funciones a los botones de cerrar
document.querySelector(".cerrar-modal1").addEventListener("click", function() {
  cerrarModal(1);
});
document.querySelector(".cerrar-modal2").addEventListener("click", function() {
  cerrarModal(2);
});

document.querySelector(".cerrar-modal3").addEventListener("click", function() {
  cerrarModal(3);
});
document.querySelector(".cerrar-modal4").addEventListener("click", function() {
  cerrarModal(4);
});
document.querySelector(".cerrar-modal5").addEventListener("click", function() {
  cerrarModal(5);
});
document.querySelector(".cerrar-modal6").addEventListener("click", function() {
  cerrarModal(6);
});
document.querySelector(".cerrar-modal7").addEventListener("click", function() {
  cerrarModal(7);
});
document.querySelector(".cerrar-modal8").addEventListener("click", function() {
  cerrarModal(8);
});
document.querySelector(".cerrar-modal9").addEventListener("click", function() {
  cerrarModal(9);
});
document.querySelector(".cerrar-modal10").addEventListener("click", function() {
  cerrarModal(10);
});
document.querySelector(".cerrar-modal11").addEventListener("click", function() {
  cerrarModal(11);
});
document.querySelector(".cerrar-modal12").addEventListener("click", function() {
  cerrarModal(12);
});
document.querySelector(".cerrar-modal13").addEventListener("click", function() {
  cerrarModal(13);
});
document.querySelector(".cerrar-modal14").addEventListener("click", function() {
  cerrarModal(14);
});
document.querySelector(".cerrar-modal15").addEventListener("click", function() {
  cerrarModal(15);
});
document.querySelector(".cerrar-modal16").addEventListener("click", function() {
  cerrarModal(16);
});
// Evento para cerrar el modal cuando se hace clic fuera de él
window.addEventListener("click", function(event) {
  var modales = document.querySelectorAll('.modal');
  modales.forEach(function(modal) {
    if (event.target == modal) {
      modal.style.display = "none";
    }
  });
});

// ... puedes seguir añadiendo más eventos para otros modales si es necesario ...
