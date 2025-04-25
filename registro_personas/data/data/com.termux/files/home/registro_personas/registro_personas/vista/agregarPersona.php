<!DOCTYPE html>
<html>
<head>
    <title>Agregar Persona</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
<div class="container">
    <h1>Agregar Nueva Persona</h1>
    <form action="../controlador/PersonaControlador.php" method="POST">
        <label>Nombre:</label>
        <input type="text" name="nombre" required>
        <label>Sexo:</label>
        <select name="sexo">
            <option value="Masculino">Masculino</option>
            <option value="Femenino">Femenino</option>
        </select>
        <label>Teléfono:</label>
        <input type="text" name="telefono" required>
        <label>Dirección:</label>
        <input type="text" name="direccion" required>
        <label>Estado Civil:</label>
        <select name="estado_civil">
            <option value="Soltero">Soltero</option>
            <option value="Casado">Casado</option>
            <option value="Divorciado">Divorciado</option>
        </select>
        <input type="hidden" name="accion" value="agregar">
        <input type="submit" value="Guardar">
    </form>
</div>
</body>
</html>
