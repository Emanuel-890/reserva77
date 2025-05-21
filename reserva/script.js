document.addEventListener('DOMContentLoaded', () => {
  const mensaje = document.getElementById('mensaje');
  const listaReservas = document.getElementById('listaReservas');

  fetch('ver_reservas.php')
    .then(response => response.text())
    .then(data => {
      listaReservas.innerHTML = data;
    })
    .catch(error => {
      listaReservas.innerHTML = 'Error cargando reservas.';
    });
});
