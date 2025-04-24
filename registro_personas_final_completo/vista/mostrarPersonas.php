<?php
require_once "../modelo/Persona.php";
$personas = Persona::obtenerTodas();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Listado de Personas</title>
</head>
<body>
<h1>Listado de Personas</h1>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Sexo</th>
        <th>Estado Civil</th>
        <th>Acciones</th>
    </tr>
    <?php foreach ($personas as $p): ?>
    <tr>
        <td><?= $p['id'] ?></td>
        <td><?= $p['nombre'] ?></td>
        <td><?= $p['apellido'] ?></td>
        <td><?= $p['sexo_id'] ?></td>
        <td><?= $p['estadocivil_id'] ?></td>
        <td>
            <a href="formEditar.php?id=<?= $p['id'] ?>">Editar</a> |
            <a href="../controlador/PersonaControlador.php?eliminar=<?= $p['id'] ?>" onclick="return confirm('¿Eliminar esta persona?')">Eliminar</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
<a href="formPersona.php">Agregar nueva persona</a>
</body>
</html>