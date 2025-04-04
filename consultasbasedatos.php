<html>
<?php

  // se crea un handler para guardar el estado de la conexión
  $conexion = mysqli_connect("localhost","root","","dbprueba");
  if(!$conexion){
    echo "la conexion no pudo ser creada";
  }


  // se selecciona la base de datos
  //$db_select = mysqli_select_db("dbprueba", $conexion);
  // se puede evaluar también si se pudo cambiar a essa base de datos

  $query = "select * from tabla1;";

  //se guarda el resultado en una variable tipo objeto-tabla
  $resultado_query = mysqli_query($conexion, $query);

  $registro = mysqli_fetch_array($resultado_query);
  echo $registro["nombre"] . "<br>";
  $registro = mysqli_fetch_array($resultado_query);
  echo $registro["nombre"] . "<br>";
  // extraemos la información para transformarla a un arreglo
/*  while( $registro = mysqli_fetch_array($resultado_query)){
    echo $registro["nombre"] . "<br>";

  }
*/

  // instrucción para cerrar la conexión
  mysqli_close($conexion);
 ?>
</html>
