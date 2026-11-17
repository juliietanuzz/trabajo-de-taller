<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
    rel="stylesheet" crossorigin="anonymous">
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <nav>
        <a href="index.html">
            <div class="logo">Travel plus </div>
        </a>
        <div class="eso">
            <a href="index.html">Inicio</a>
            <a href="destinos.html">Destinos</a>
            <a href="reservas.html">Reserva</a>
            <a href="contacto.html">Contacto</a>
        </div>  
    </nav>
    <div class="principal">

    <h1 class="h11">Agregar reserva</h1>

</div>
    <form action="insertar.php" method="POST" class="mx-3 p-2" style="width: 1000px;">
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" name="nombre" class="form-control" id="nombre" required>
        </div>
        <div class="mb-3">
            <label for="apellido" class="form-label">Apellido</label>
            <input type="text" name="apellido" class="form-control" id="apellido" required>
        </div>
        <div class="md-3">
            <label for="email" class="form-label">Correo electronico</label>
            <input type="text" name="email" class="form-control" id="email" required>
        </div>
        <div class="md-3">
            <label for="telefono" class="form-label">Telefono</label>
            <input type="number" name="telefono" class="form-control" id="telefono" required>
        </div>
        <div class="md-3">
            <label for="destino" class="form-label">Destino</label>
            <input type="text" name="destino" class="form-control" id="destino" required>
        </div>
        <div class="md-3">
            <label for="fecha_salida" class="form-label">Fecha de salida</label>
            <input type="date" name="fecha_salida" class="form-control" id="fecha_salida" required>
        </div>
        <div class="md-3">
            <label for="fecha_regreso" class="form-label">Fecha de regreso</label>
            <input type="date" name="fecha_regreso" class="form-control" id="fecha_regreso" required>
        </div>
        <button type="submit" class="btn btn-outline-dark">Guardar</button>
        <a class="btn btn-outline-dark mx-3" href="index.html" role="button">Volver</a>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
    crossorigin="anonymous"></script>
        <footer>
        <a href="">Nuestras politicas</a>
    </footer>
</body>
</html>