<?php
require_once "../modelo/Persona.php";

$persona = Persona::obtenerPorId($_GET['id']);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Editar Persona</title>
</head>
<body>
<h1>Editar Persona</h1>
<form action="../controlador/PersonaControlador.php" method="post">
    <input type="hidden" name="id" value="<?= $persona['id'] ?>">
    <label>Nombre:</label><br>
    <input type="text" name="nombre" value="<?= $persona['nombre'] ?>"><br>
    <label>Apellido:</label><br>
    <input type="text" name="apellido" value="<?= $persona['apellido'] ?>"><br>
    <label>Sexo:</label><br>
    <input type="number" name="sexo_id" value="<?= $persona['sexo_id'] ?>"><br>
    <label>Estado Civil:</label><br>
    <input type="number" name="estadocivil_id" value="<?= $persona['estadocivil_id'] ?>"><br><br>
    <input type="submit" value="Actualizar">
</form>
</body>
</html>