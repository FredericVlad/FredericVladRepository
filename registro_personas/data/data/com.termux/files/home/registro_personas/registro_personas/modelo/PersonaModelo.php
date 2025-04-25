<?php
include_once 'Conexion.php';

class PersonaModelo {
    private $conexion;

    public function __construct() {
        $db = new Conexion();
        $this->conexion = $db->conectar();
    }

    public function obtenerPersonas() {
        $sql = "SELECT * FROM persona";
        return $this->conexion->query($sql);
    }

    public function agregarPersona($nombre, $sexo, $telefono, $direccion, $estado_civil) {
        $stmt = $this->conexion->prepare("INSERT INTO persona (nombre, sexo, telefono, direccion, estado_civil) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("sssss", $nombre, $sexo, $telefono, $direccion, $estado_civil);
        return $stmt->execute();
    }

    public function eliminarPersona($id) {
        $stmt = $this->conexion->prepare("DELETE FROM persona WHERE id = ?");
        $stmt->bind_param("i", $id);
        return $stmt->execute();
    }

    public function obtenerPersona($id) {
        $stmt = $this->conexion->prepare("SELECT * FROM persona WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }

    public function actualizarPersona($id, $nombre, $sexo, $telefono, $direccion, $estado_civil) {
        $stmt = $this->conexion->prepare("UPDATE persona SET nombre=?, sexo=?, telefono=?, direccion=?, estado_civil=? WHERE id=?");
        $stmt->bind_param("sssssi", $nombre, $sexo, $telefono, $direccion, $estado_civil, $id);
        return $stmt->execute();
    }
}
?>
