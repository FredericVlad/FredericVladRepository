<?php
include_once '../modelo/PersonaModelo.php';
$modelo = new PersonaModelo();
$personas = $modelo->obtenerPersonas();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Listado de Personas</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
<div class="container">
    <h1>Listado de Personas</h1>
    <a href="agregarPersona.php" class="button">Agregar Persona</a>
    <table>
        <thead>
        <tr>
            <th>ID</th><th>Nombre</th><th>Sexo</th><th>Teléfono</th><th>Dirección</th><th>Estado Civil</th><th>Acciones</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach($personas as $p): ?>
            <tr>
                <td><?= $p['id'] ?></td>
                <td><?= $p['nombre'] ?></td>
                <td><?= $p['sexo'] ?></td>
                <td><?= $p['telefono'] ?></td>
                <td><?= $p['direccion'] ?></td>
                <td><?= $p['estado_civil'] ?></td>
                <td>
                    <a href="editarPersona.php?id=<?= $p['id'] ?>" class="button">Editar</a>
                    <a href="../controlador/PersonaControlador.php?eliminar=<?= $p['id'] ?>" class="button" style="background-color:#e74c3c;">Eliminar</a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>
</body>
</html>
