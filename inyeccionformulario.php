<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Buscar por apellido</title>
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
  <?php
    if(isset($_GET["error"])){
      echo "No puedes introducir comillas!<br>";
    }
   ?>
<form id="miFormulario" action="inyeccionresultado.php" method="post">
    <label for="nombre">Escribe el apellido a buscar:</label>
    <input type="text" id="apellido" name="apellido"  required><br>




    <input type="submit" value="Buscar">
</form>
<script>
  document.getElementById('apellido').addEventListener('keydown', function(event) {
    var tecla = event.key;
    var soloLetras = /^[A-Za-z]+$/;
    if (!soloLetras.test(tecla) && tecla !== 'Backspace' && tecla !== 'ArrowLeft' && tecla !== 'ArrowRight') {
      event.preventDefault(); // Evita que se escriba la tecla no válida
    }
  });
</script>
</body>
</html>
