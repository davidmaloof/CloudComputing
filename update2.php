<?php


  //conectar a bd y hacer consulta
  $conexion = mysqli_connect("localhost","root","","basedatosclase");

  $query = "select * from alumnos where matricula = ".$_POST["registro"].";";
  $resultado = mysqli_query($conexion, $query);

  $registro = mysqli_fetch_array($resultado);


?>

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
        <h2>Formulario de Cambio de Datos de matrícula <?php echo $registro["matricula"]; ?></h2>
        <form action="update3.php" method="POST">
            <div class="form-group">
                <label for="matricula">Matrícula:</label>
                <?php
                  echo '  <input type="text" name="matricula" value="'.$registro["matricula"].'" readonly>';
                ?>

            </div>
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <?php
                  echo '  <input type="text" name="nombre" value="'.$registro["nombre"].'" required>';
                ?>

            </div>
            <div class="form-group">
                <label for="apellido_paterno">Apellido Paterno:</label>
                <?php
                  echo '  <input type="text" name="apellidopaterno" value="'.$registro["apellidopaterno"].'" required>';
                ?>

            </div>
            <div class="form-group">
                <label for="apellido_materno">Apellido Materno:</label>
                <?php
                  echo '  <input type="text" name="apellidomaterno" value="'.$registro["apellidomaterno"].'" required>';
                ?>
                
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
            <input type="submit" value="Cambiar Datos">
        </form>
    </div>
</body>
</html>
