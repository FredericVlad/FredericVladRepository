<?php
include_once '../modelo/PersonaModelo.php';

$modelo = new PersonaModelo();

if (isset($_POST['accion'])) {
    switch ($_POST['accion']) {
        case 'agregar':
            $modelo->agregarPersona($_POST['nombre'], $_POST['sexo'], $_POST['telefono'], $_POST['direccion'], $_POST['estado_civil']);
            break;
        case 'actualizar':
            $modelo->actualizarPersona($_POST['id'], $_POST['nombre'], $_POST['sexo'], $_POST['telefono'], $_POST['direccion'], $_POST['estado_civil']);
            break;
    }
    header("Location: ../vista/mostrarPersonas.php");
}

if (isset($_GET['eliminar'])) {
    $modelo->eliminarPersona($_GET['eliminar']);
    header("Location: ../vista/mostrarPersonas.php");
}
?>
