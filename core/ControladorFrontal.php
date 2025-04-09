<?php

function cargarControlador($controllerName) {
    $controllerFile = './controller/' . $controllerName . '.php';

    if (file_exists($controllerFile)) {
        require_once $controllerFile;
        return new $controllerName();
    } else {
        http_response_code(404);
        echo "Controlador no encontrado: $controllerName";
        exit;
    }
}

function lanzarAccion($controllerObj, $actionName) {
    if (method_exists($controllerObj, $actionName)) {
        $controllerObj->$actionName();
    } else {
        http_response_code(404);
        echo "Acción no encontrada: $actionName";
        exit;
    }
}

?>