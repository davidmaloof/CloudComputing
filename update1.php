<!DOCTYPE html>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Seleccionar el registro a editar</title>
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
        <h2>Seleccionar el registro a editar</h2>
        <form action="update2.php" method="POST">
            <div class="form-group">
                <label for="registro">Registro:</label>
                <select id="registro" name="registro" required>
                    <option value="">Selecciona el registro</option>

                    <?php
                      //conectar a bd y hacer consulta
                      $conexion = mysqli_connect("localhost","root","","basedatosclase");

                      $query = "select * from alumnos;";
                      $resultado = mysqli_query($conexion, $query);

                      while($registro = mysqli_fetch_array($resultado)){

                        echo '<option value="'.$registro["matricula"].'">'.$registro["matricula"].'-'.$registro["apellidopaterno"].' '.$registro["apellidomaterno"].'</option>';
                      }

                    ?>
                </select>
            </div>
            <input type="submit" value="Cambiar datos del registro">
        </form>
    </div>
</body>
</html>
