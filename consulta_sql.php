<html>
<?php
      // se crea un handler para guardar el estado de la conexión
      $conexion = mysqli_connect("localhost","root","","basedatosclase");

      $query = "select * from alumnos;";
      $resultado = mysqli_query($conexion, $query);

      while($registro = mysqli_fetch_array($resultado)){

        echo $registro["matricula"] ." ". $registro["nombre"] ." ". $registro["apellido"];
        echo "<br>";
      }




      // instrucción para cerrar la conexión
     mysqli_close($conexion);
 ?>
</html>
