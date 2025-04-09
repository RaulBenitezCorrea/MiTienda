<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

// Funciones para el controlador frontal
require_once 'core/ControladorFrontal.php';
require_once 'config/global.php';

// Autoload para cargar clases automáticamente
function loadClasses($class_name) {
    $paths = [
        './model/' . $class_name . '.php',
        './controller/' . $class_name . '.php',
        './core/' . $class_name . '.php',
        './config/' . $class_name . '.php',
    ];

    foreach ($paths as $path) {
        if (file_exists($path)) {
            require_once($path);
            return;
        }
    }
}
spl_autoload_register('loadClasses');

// Sistema de ruteo
$requestUri = $_SERVER['REQUEST_URI'];
$requestMethod = $_SERVER['REQUEST_METHOD'];

// Elimina el prefijo de la URL (si estás usando un subdirectorio)
$basePath = '/red_aee'; // Cambia esto según tu configuración
$route = str_replace($basePath, '', parse_url($requestUri, PHP_URL_PATH));
$route = trim($route, '/');

// Rutas definidas
$routes = [
'' => ['controller' => CONTROLADOR_DEFECTO, 'action' => ACCION_DEFECTO],
        'usuarios/listar' => ['controller' => 'UsuarioController', 'action' => 'listar'],
        'productos/ver' => ['controller' => 'ProductoController', 'action' => 'ver'],
        'usuarios/crear' => ['controller' => 'UsuarioController', 'action' => 'crear'],
];

// Verifica si la ruta existe
if (array_key_exists($route, $routes)) {
    $controllerName = $routes[$route]['controller'];
    $actionName = $routes[$route]['action'];
} else {
    // Ruta no encontrada (404)
    http_response_code(404);
    echo "Página no encontrada 34";
    exit;
}

// Carga el controlador y ejecuta la acción
$controllerObj = cargarControlador($controllerName);
lanzarAccion($controllerObj, $actionName);

?>