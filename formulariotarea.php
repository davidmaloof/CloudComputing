<?php
    /*
    Integrantes:
    Ramon Reyna Garcia 348411
    Gabriel Isai Prieto Saenz 353297
    Gabriel Jesus Bustillos Fierro 353267
    */

    if(isset($_COOKIE["color"])){
        header("Location: res.php");
        exit();
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Seleccionar Color</title>
<style>
  /* Estilo para el contenedor del formulario */
  body {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
    background-color: #f0f0f0; /* Color de fondo */
  }

  /* Estilo para el formulario */
  form {
    text-align: center;
    background-color: #fff; /* Color de fondo del formulario */
    padding: 20px;
    border-radius: 8px; /* Borde redondeado */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Sombra */
    width: 300px;
  }

  /* Estilo para el título */
  h1 {
    margin-bottom: 20px;
    color: #333; /* Color del texto */
  }

  /* Estilo para el elemento select */
  select {
    padding: 8px 16px; /* Ajuste del relleno */
    font-size: 16px; /* Tamaño de fuente */
    border: 1px solid #ccc; /* Borde */
    border-radius: 4px; /* Borde redondeado */
    appearance: none; /* Eliminar el estilo de selección nativo del sistema */
    background-color: #f9f9f9; /* Color de fondo */
    cursor: pointer; /* Cursor */
    width: 100%; /* Ancho */
    margin-bottom: 20px;
  }

  /* Estilo para el botón de enviar */
  input[type="submit"] {
    background-color: #007bff; /* Color de fondo del botón */
    color: #fff; /* Color del texto del botón */
    padding: 10px 20px; /* Ajuste del relleno */
    border: none; /* Sin borde */
    border-radius: 4px; /* Borde redondeado */
    cursor: pointer; /* Cursor */
    font-size: 16px; /* Tamaño de fuente */
    transition: background-color 0.3s; /* Transición suave */
  }

  input[type="submit"]:hover {
    background-color: #0056b3; /* Color de fondo del botón al pasar el cursor */
  }
</style>
</head>
<body>

<form method="post" action="cookie.php">
  <h1>Selecciona un Color</h1>
  <select id="color" name="color">
    <?php
      $conexion = mysqli_connect("localhost","root","","basedatosclase");
      $query = "select * from colores order by descripcion;";
      $resultado = mysqli_query($conexion,$query);

      while($registro = mysqli_fetch_array($resultado)){

          echo '<option name="color" value="'.$registro['codigo'].'">'
          .$registro['descripcion'].'</option>';

      }

    ?>



  </select>
  <br>
  <input type="submit" value="Enviar">
</form>

</body>
</html>
