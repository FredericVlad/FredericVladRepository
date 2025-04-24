<?php
require_once "Conexion.php";

class Persona {
    public static function obtenerTodas() {
        $conn = Conexion::conectar();
        $stmt = $conn->query("SELECT * FROM persona");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function insertar($datos) {
        $conn = Conexion::conectar();
        $stmt = $conn->prepare("INSERT INTO persona (nombre, apellido, sexo_id, estadocivil_id) VALUES (:nombre, :apellido, :sexo_id, :estadocivil_id)");
        $stmt->execute($datos);
    }

    public static function obtenerPorId($id) {
        $conn = Conexion::conectar();
        $stmt = $conn->prepare("SELECT * FROM persona WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public static function actualizar($id, $datos) {
        $conn = Conexion::conectar();
        $stmt = $conn->prepare("UPDATE persona SET nombre = :nombre, apellido = :apellido, sexo_id = :sexo_id, estadocivil_id = :estadocivil_id WHERE id = :id");
        $datos['id'] = $id;
        $stmt->execute($datos);
    }

    public static function eliminar($id) {
        $conn = Conexion::conectar();
        $stmt = $conn->prepare("DELETE FROM persona WHERE id = ?");
        $stmt->execute([$id]);
    }
}
?>