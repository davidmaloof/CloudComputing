<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Registro de Estudiante</title>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f0f0f0;
    }
    form {
        max-width: 600px;
        margin: 20px auto;
        padding: 20px;
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }
    label {
        display: block;
        margin-bottom: 8px;
    }
    input[type="text"],
    select {
        width: 100%;
        padding: 8px;
        margin-bottom: 16px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }
    input[type="submit"] {
        background-color: #4CAF50;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }
    input[type="submit"]:hover {
        background-color: #45a049;
    }
</style>
</head>
<body>

<form action="inserta.php" method="post">
    <label for="nombre">Nombre Completo:</label>
    <input type="text" id="nombre" name="nombre" required>

    <label for="pais">País de Nacimiento:</label>
    <select id="pais" name="pais" required>
        <option value="">Selecciona un país</option>
        <option value="Mexico">México</option>
        <option value="Argentina">Argentina</option>
        <option value="España">España</option>
        <!-- Agrega más opciones según sea necesario -->
    </select>

    <label for="edad">Edad:</label>
    <select id="edad" name="edad" required>
        <option value="">Selecciona tu edad</option>
        <option value="18-25">18-25 años</option>
        <option value="26-35">26-35 años</option>
        <option value="36-45">36-45 años</option>
        <!-- Agrega más opciones según sea necesario -->
    </select>

    <label for="correo">Correo Electrónico:</label>
    <input type="email" id="correo" name="correo" required>

    <label for="genero">Género:</label>
    <select id="genero" name="genero" required>
        <option value="">Selecciona tu género</option>
        <option value="masculino">Masculino</option>
        <option value="femenino">Femenino</option>
        <option value="otro">Otro</option>
        <!-- Agrega más opciones según sea necesario -->
    </select>

    <input type="submit" value="Registrar">
</form>

</body>
</html>
