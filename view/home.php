<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
</head>
<body>
    <h1>Bienvenido a la página principal</h1>
    <p>Esta es la vista de inicio.</p>

    <!-- Botones para navegar a otras vistas -->
    <a href="<?php echo BASE_URL; ?>usuarios/listar">
        <button>Ir a Usuarios</button>
    </a>
    <a href="<?php echo BASE_URL; ?>productos/ver">
        <button>Ir a Productos</button>
    </a>
</body>
</html>