<?php
include_once '../modelo/PersonaModelo.php';
$modelo = new PersonaModelo();
$persona = $modelo->obtenerPersona($_GET['id']);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Editar Persona</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
<div class="container">
    <h1>Editar Persona</h1>
    <form action="../controlador/PersonaControlador.php" method="POST">
        <input type="hidden" name="id" value="<?= $persona['id'] ?>">
        <label>Nombre:</label>
        <input type="text" name="nombre" value="<?= $persona['nombre'] ?>" required>
        <label>Sexo:</label>
        <select name="sexo">
            <option value="Masculino" <?= $persona['sexo'] == 'Masculino' ? 'selected' : '' ?>>Masculino</option>
            <option value="Femenino" <?= $persona['sexo'] == 'Femenino' ? 'selected' : '' ?>>Femenino</option>
        </select>
        <label>Teléfono:</label>
        <input type="text" name="telefono" value="<?= $persona['telefono'] ?>" required>
        <label>Dirección:</label>
        <input type="text" name="direccion" value="<?= $persona['direccion'] ?>" required>
        <label>Estado Civil:</label>
        <select name="estado_civil">
            <option value="Soltero" <?= $persona['estado_civil'] == 'Soltero' ? 'selected' : '' ?>>Soltero</option>
            <option value="Casado" <?= $persona['estado_civil'] == 'Casado' ? 'selected' : '' ?>>Casado</option>
            <option value="Divorciado" <?= $persona['estado_civil'] == 'Divorciado' ? 'selected' : '' ?>>Divorciado</option>
        </select>
        <input type="hidden" name="accion" value="actualizar">
        <input type="submit" value="Actualizar">
    </form>

<a href="javascript:history.back()" class="btn-volver">
    <i class="fas fa-arrow-left icon"></i> Volver

</a>


</a>


</div>
</body>
</html>
