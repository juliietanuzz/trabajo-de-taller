<?php
i
$conexion = mysqli_connect("localhost", "root", "", "agencia_viaje");

if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}

$nombre        = $_POST['nombre'];
$apellido      = $_POST['apellido'];
$email         = $_POST['email'];
$telefono      = $_POST['telefono'];
$destino       = $_POST['destino'];
$fecha_salida  = $_POST['fecha_salida'];
$fecha_regreso = $_POST['fecha_regreso'];

$sql = "INSERT INTO reservas (nombre, apellido, email, telefono, destino, fecha_salida, fecha_regreso)
        VALUES ('$nombre', '$apellido', '$email', '$telefono', '$destino', '$fecha_salida', '$fecha_regreso')";

if (mysqli_query($conexion, $sql)) {
    header("Location: verreserva.html");
    exit();
} else {
    echo "Error al guardar: " . mysqli_error($conexion);
}
?>