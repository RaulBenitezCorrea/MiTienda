<?php

require_once './core/Database.php';

class Usuario {
    public static function obtenerTodos() {
        $db = Database::connect();
        $query = $db->query("SELECT * FROM usuarios");
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function obtenerPorId($id) {
        $db = Database::connect();
        $stmt = $db->prepare("SELECT * FROM usuarios WHERE id = :id");
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public static function crear($nombre) {
        $db = Database::connect();
        $stmt = $db->prepare("INSERT INTO usuarios (UsuNom) VALUES (:nombre)");
        $stmt->bindParam(':nombre', $nombre, PDO::PARAM_STR);
        $stmt->execute();
        return $db->lastInsertId(); // Devuelve el ID del usuario creado
    }
}

?>