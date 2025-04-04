<?php
  if($_POST["campo1"] == ""){
    header("Location: index2.php?login=1");
    exit();
  }

  $conexion = mysqli_connect("localhost","root","","basedatosclase");
  $campo1 = $_POST["campo1"];
  $query = "select * from usuarios where usuario = '".$campo1."'; ";
  $resultado = mysqli_query($conexion,$query);

  $registro = mysqli_fetch_array($resultado);

  // $registro se convierte en un arreglo asociativo, cuyos indices
  //corresponden a los nombres de los campos en la base de datos
  $usuario_correcto = $registro["usuario"];
  $password_correcto = $registro["password"];

  if(($_POST['campo1'] == $usuario_correcto ) && ($_POST["campo2"] == $password_correcto)){
    // si fue correcta la Autenticación
    //setcookie("usuario",$_POST["campo1"],time()+30);
    header("Location: bienvenida.php");
  }
  else{ // está mal el login
    header("Location: index2.php?login=1");
  }


?>
