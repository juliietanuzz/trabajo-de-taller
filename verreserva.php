<?php
require "conexion.php";

$resultado = mysqli_query($conexion, "SELECT * FROM reservas ORDER BY id DESC");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de reservas</title>
    <link rel="stylesheet" href="estilos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
</head>
<body>
    <nav>
        <a href="index.html">
            <div class="logo">Travel plus </div>
        </a>
        <div class="eso">
            <a href="index.html">Inicio</a>
            <a href="destinos.html">Destinos</a>
            <a href="reserva.html">Reserva</a>
            <a href="contacto.html">Contacto</a>
        </div>
    </nav>
    <div class="principal">
        <h1 class="h11">Reservas</h1>
    </div>
    <table class="table table-striped mx-3 p-2" style="width: 1000px;">
        <thead>
            <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido</th>
                <th scope="col">Correo electronico</th>
                <th scope="col">Telefono</th>
                <th scope="col">Destino</th>
                <th scope="col">Fecha de salida</th>
                <th scope="col">Fecha de regreso</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($fila = mysqli_fetch_assoc($resultado)) { ?>
            <tr>
                <td><?= htmlspecialchars($fila['nombre']) ?></td>
                <td><?= htmlspecialchars($fila['apellido']) ?></td>
                <td><?= htmlspecialchars($fila['email']) ?></td>
                <td><?= htmlspecialchars($fila['telefono']) ?></td>
                <td><?= htmlspecialchars($fila['destino']) ?></td>
                <td><?= $fila['fecha_salida'] ?></td>
                <td><?= $fila['fecha_regreso'] ?></td>
                <td>
                    <a href="editar.php?id=<?= $fila['id'] ?>">Editar</a>
                    <a href="eliminar.php?id=<?= $fila['id'] ?>" onclick="return confirm('¿Estás seguro?')">Eliminar</a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
    <a class="btn btn-outline-dark mx-3" href="agregar.php" role="button">Agregar reserva</a>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <footer>
        <a href="">Nuestras politicas</a>
    </footer>
</body>
</html>