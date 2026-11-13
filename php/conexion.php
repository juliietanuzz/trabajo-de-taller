<?php
$conn = mysqli_connect("localhost", "root", "", "agencia_viaje");
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$destino = $_POST['destino'];
$fecha_salida = $_POST['fecha_salida'];
$fecha_regreso = $_POST['fecha_regreso'];
mysqli_query($conn, "UPDATE alumnos SET nombre='$nombre', apellido='$apellido', email='$email' ");
header("Location: index.html");
?>