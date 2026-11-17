<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

$conexion = mysqli_connect("localhost", "root", "", "agencia_viaje");

// Cuando se aprieta "Guardar cambios"
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id            = (int) $_POST['id'];
    $nombre        = $_POST['nombre'];
    $apellido      = $_POST['apellido'];
    $email         = $_POST['email'];
    $telefono      = $_POST['telefono'];
    $destino       = $_POST['destino'];
    $fecha_salida  = $_POST['fecha_salida'];
    $fecha_regreso = $_POST['fecha_regreso'];

    $sql = "UPDATE reservas SET
            nombre = '$nombre',
            apellido = '$apellido',
            email = '$email',
            telefono = '$telefono',
            destino = '$destino',
            fecha_salida = '$fecha_salida',
            fecha_regreso = '$fecha_regreso'
            WHERE id = $id";

    if (mysqli_query($conexion, $sql)) {
        header("Location: verreserva.php");
        exit();
    } else {
        echo "Error al editar: " . mysqli_error($conexion);
        exit();
    }
}

// Cargar los datos actuales de la reserva
$id = (int) $_GET['id'];
$resultado = mysqli_query($conexion, "SELECT * FROM reservas WHERE id = $id");
$fila = mysqli_fetch_assoc($resultado);

if (!$fila) {
    die("Reserva no encontrada");
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar reserva</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
</head>
<body>
    <h1 class="m-3">Editar reserva</h1>
    <form action="editar.php" method="POST" class="mx-3 p-2" style="width: 1000px;">
        <input type="hidden" name="id" value="<?= $fila['id'] ?>">

        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" name="nombre" class="form-control" id="nombre" value="<?= htmlspecialchars($fila['nombre']) ?>" required>
        </div>
        <div class="mb-3">
            <label for="apellido" class="form-label">Apellido</label>
            <input type="text" name="apellido" class="form-control" id="apellido" value="<?= htmlspecialchars($fila['apellido']) ?>" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Correo electronico</label>
            <input type="text" name="email" class="form-control" id="email" value="<?= htmlspecialchars($fila['email']) ?>" required>
        </div>
        <div class="mb-3">
            <label for="telefono" class="form-label">Telefono</label>
            <input type="text" name="telefono" class="form-control" id="telefono" value="<?= htmlspecialchars($fila['telefono']) ?>" required>
        </div>
        <div class="mb-3">
            <label for="destino" class="form-label">Destino</label>
            <input type="text" name="destino" class="form-control" id="destino" value="<?= htmlspecialchars($fila['destino']) ?>" required>
        </div>
        <div class="mb-3">
            <label for="fecha_salida" class="form-label">Fecha de salida</label>
            <input type="date" name="fecha_salida" class="form-control" id="fecha_salida" value="<?= $fila['fecha_salida'] ?>" required>
        </div>
        <div class="mb-3">
            <label for="fecha_regreso" class="form-label">Fecha de regreso</label>
            <input type="date" name="fecha_regreso" class="form-control" id="fecha_regreso" value="<?= $fila['fecha_regreso'] ?>" required>
        </div>

        <button type="submit" class="btn btn-outline-dark">Guardar cambios</button>
        <a class="btn btn-outline-dark mx-3" href="verreserva.php" role="button">Volver</a>
    </form>
</body>
</html>