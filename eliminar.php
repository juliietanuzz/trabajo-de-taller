<?php
$conexion = mysqli_connect("localhost", "root", "", "agencia_viaje");

$id = (int) $_GET['id'];

mysqli_query($conexion, "DELETE FROM reservas WHERE id = $id");

header("Location: verreserva.php");
exit();
?>