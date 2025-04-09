<?php

// Controlador y acción por defecto
define('CONTROLADOR_DEFECTO', 'HomeController');
define('ACCION_DEFECTO', 'index');

// Detectar protocolo (http o https)
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https://" : "http://";

// Obtener el host (localhost, 127.0.0.1, dominio, etc.)
$host = $_SERVER['HTTP_HOST'];

// Obtener la ruta del proyecto automáticamente
$projectName = "/MiTienda/";

// Definir la base URL dinámica
define('BASE_URL', $protocol . $host . $projectName);
;

// Configuración de la base de datos (si es necesario)
define('DB_HOST', '191.96.56.1');
define('DB_USER', 'u749227495_bduser');
define('DB_PASSWORD', 'BDuserBDred@1');
define('DB_NAME', 'u749227495_bdred');

// Configuración de entorno (desarrollo o producción)
define('ENVIRONMENT', 'development'); // Cambiar a 'production' en producción

?>