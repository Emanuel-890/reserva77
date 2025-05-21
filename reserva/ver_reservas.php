<?php
require 'conexion.php';

$sql = "SELECT * FROM reservas ORDER BY fecha, hora";
$resultado = $conn->query($sql);

if ($resultado->num_rows > 0) {
  echo "<ul>";
  while ($fila = $resultado->fetch_assoc()) {
    echo "<li>{$fila['servicio']} - {$fila['fecha']} a las {$fila['hora']}</li>";
  }
  echo "</ul>";
} else {
  echo "No hay reservas.";
}

$conn->close();
?>
