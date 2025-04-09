<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Usuario</title>
</head>
<body>
    <h1>Crear Usuario</h1>
    <form action="<?php echo BASE_URL; ?>usuarios/crear" method="POST">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>
        <button type="submit">Crear</button>
    </form>
    <br>
    <a href="<?php echo BASE_URL; ?>">Volver al inicio</a>
</body>
</html>