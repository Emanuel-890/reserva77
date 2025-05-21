<?php
require 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $servicio = $_POST['servicio'];
  $fecha = $_POST['fecha'];
  $hora = $_POST['hora'];

  if ($servicio && $fecha && $hora) {
    $stmt = $conn->prepare("INSERT INTO reservas (servicio, fecha, hora) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $servicio, $fecha, $hora);

    if ($stmt->execute()) {
      echo "<script>alert('Reserva realizada con éxito');window.location.href='index.html';</script>";
    } else {
      echo "Error al guardar reserva: " . $conn->error;
    }

    $stmt->close();
  } else {
    echo "Todos los campos son obligatorios.";
  }

  $conn->close();
}
?>
