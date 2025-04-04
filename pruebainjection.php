<?php
  //prueba injection
  $var = $_POST["campo1"];



  $conexion = mysqli_connect("localhost","root","","basedatosclase");
  $campo1 = $_POST["campo1"];
  $query = "select * from usuarios where usuario = '".$var."'; ";


  echo "La query es: <br>";
  echo $query;
  $resultado = mysqli_query($conexion,$query);
  echo "<br><br>";
  while($registro = mysqli_fetch_array($resultado)){
      echo $registro["usuario"] ." - " . $registro["password"] . "<br>";
  }

?>
