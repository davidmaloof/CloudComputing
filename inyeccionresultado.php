<?php
  $apellido = $_POST["apellido"];
  if(str_contains($apellido,"'")){
    header("Location: inyeccionformulario.php?error=1");
    exit();
  }

?>


<html>
<?php
      // se crea un handler para guardar el estado de la conexión
      $conexion = mysqli_connect("localhost","root","","basedatosclase");

      $query = "select * from alumnos where apellidopaterno = '".$apellido."';";
      $resultado = mysqli_query($conexion, $query);
      echo "La query que se está consultando es: ". $query;
      echo "<br>";
      while($registro = mysqli_fetch_array($resultado)){

        echo $registro["matricula"] ." ". $registro["nombre"] ." ".
          $registro["apellidopaterno"] . ". Edad: " . $registro["edad"] .
          ". Carrera: " . $registro["carrera"];
        echo "<br>";
      }




      // instrucción para cerrar la conexión
     mysqli_close($conexion);
 ?>
</html>
