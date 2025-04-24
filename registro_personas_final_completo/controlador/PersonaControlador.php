<?php
require_once "../modelo/Persona.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['id'])) {
        Persona::actualizar($_POST['id'], [
            'nombre' => $_POST['nombre'],
            'apellido' => $_POST['apellido'],
            'sexo_id' => $_POST['sexo_id'],
            'estadocivil_id' => $_POST['estadocivil_id']
        ]);
    } else {
        Persona::insertar([
            'nombre' => $_POST['nombre'],
            'apellido' => $_POST['apellido'],
            'sexo_id' => $_POST['sexo_id'],
            'estadocivil_id' => $_POST['estadocivil_id']
        ]);
    }
    header("Location: ../vista/mostrarPersonas.php");
    exit();
}

if (isset($_GET['eliminar'])) {
    Persona::eliminar($_GET['eliminar']);
    header("Location: ../vista/mostrarPersonas.php");
    exit();
}
?>