<?php
  try{
    $matricula = $_POST['matricula'];
    $nombre = $_POST['nombre'];
    $apellidopaterno = $_POST['apellidopaterno'];
    $apellidomaterno = $_POST['apellidomaterno'];
    $edad = $_POST['edad'];
    $carrera = $_POST['carrera'];

    $conexion = mysqli_connect("localhost","root","","basedatosclase");

    $query = "insert into alumnos values
              (".$matricula.", '".$apellidopaterno."', '".$apellidomaterno."', '".$nombre."', ".$edad.",
                '".$carrera."');";

    mysqli_query($conexion, $query);
    // si todo estuvo bien, redirige al formulario con mensaje de éxito
    header("Location: introducirinfo.php?reg=1");
    exit;
  }
  catch(Exception $e){
    // si algo malo ocurrió, redirige al formulario con mensaje de error
    header("Location: introducirinfo.php?reg=2");
    exit;
  }





 ?>
