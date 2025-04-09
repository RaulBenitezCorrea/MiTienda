<?php

require_once './model/Usuario.php';

class UsuarioController {
    public function listar() {
        // Obtener datos del modelo
        $usuarios = Usuario::obtenerTodos();

        // Pasar los datos a la vista
        require_once './view/usuarios.php';
    }

    public function ver() {
        // Obtener el parámetro 'id' de la URL
        $id = isset($_GET['id']) ? intval($_GET['id']) : null;

        if ($id) {
            // Obtener datos del modelo
            $usuario = Usuario::obtenerPorId($id);

            if ($usuario) {
                // Pasar los datos a la vista
                require_once './view/usuario.php';
            } else {
                echo "Usuario no encontrado.";
            }
        } else {
            echo "ID de usuario no especificado.";  
        }
    }

    public function crear() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nombre = isset($_POST['nombre']) ? trim($_POST['nombre']) : '';
    
            if (!empty($nombre)) {
                // Registrar el usuario en la base de datos
                $id = Usuario::crear($nombre);
                echo "Usuario creado con ID: " . $id;
            } else {
                echo "El nombre no puede estar vacío.";
            }
        } else {
            // Mostrar el formulario
            require_once './view/crear_usuario.php';
        }
    }
}

?>