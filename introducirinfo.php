<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Formulario de Registro de Alumnos</title>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        padding: 20px;
    }
    .container {
        max-width: 600px;
        margin: auto;
        background-color: #fff;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    .form-group {
        margin-bottom: 20px;
    }
    label {
        display: block;
        font-weight: bold;
        margin-bottom: 5px;
    }
    input[type="text"],
    select {
        width: 100%;
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }
    input[type="submit"] {
        background-color: #4CAF50;
        color: #fff;
        border: none;
        padding: 10px 20px;
        cursor: pointer;
        border-radius: 4px;
    }
    input[type="submit"]:hover {
        background-color: #45a049;
    }
</style>
</head>
<body>
    <div class="container">
        <h2>Formulario de Registro de Alumnos</h2>
        <form action="procesar_registro.php" method="POST">
          <?php
              if (isset($_GET["reg"])){
                if ($_GET["reg"] == 1){
                  echo "** Registro introducido con éxito! **<br>";
                }
                else{
                  echo "** Ocurrió un error, vuelve a intentar **<br>";
                }

              }

           ?>
            <div class="form-group">
                <label for="matricula">Matrícula:</label>
                <input type="text" id="matricula" name="matricula" required>
            </div>
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" required>
            </div>
            <div class="form-group">
                <label for="apellido_paterno">Apellido Paterno:</label>
                <input type="text" id="apellido_paterno" name="apellidopaterno" required>
            </div>
            <div class="form-group">
                <label for="apellido_materno">Apellido Materno:</label>
                <input type="text" id="apellido_materno" name="apellidomaterno" required>
            </div>
            <div class="form-group">
                <label for="edad">Edad:</label>
                <select id="edad" name="edad" required>
                    <option value="">Selecciona tu edad</option>
                    <!-- Generar opciones de edad desde 17 hasta 99 -->
                    <?php
                    for ($i = 17; $i <= 99; $i++) {
                        echo "<option value='$i'>$i</option>";
                    }
                    ?>
                </select>
            </div>
            <div class="form-group">
                <label for="carrera">Carrera:</label>
                <select id="carrera" name="carrera" required>
                    <option value="">Selecciona tu carrera</option>
                    <option value="Ingeniería Civil">Ingeniería Civil</option>
                    <option value="Ingeniería Geológica">Ingeniería Geológica</option>
                    <option value="Ingeniería Aeroespacial">Ingeniería Aeroespacial</option>
                    <option value="Ingeniería Física">Ingeniería Física</option>
                </select>
            </div>
            <input type="submit" value="Registrarse">
        </form>
    </div>
</body>
</html>
