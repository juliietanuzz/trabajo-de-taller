<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

$conexion = mysqli_connect("localhost", "root", "", "agencia_viaje");

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
    echo "<script>
        alert('¡Reserva enviada correctamente!');
        window.location.href = 'reservas.html';
    </script>";
    exit();
} else {
    echo "Error al guardar: " . mysqli_error($conexion);
}
?>