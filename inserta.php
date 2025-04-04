<?php
  try{

    $nombre = $_POST["nombre"];
    $conexion = mysqli_connect("localhost","root","","basedatosclase");
    $query = "insert into pruebainsert values
    ('David2', 'México', '18-25 años', 'david@dominio.com', 'masculino');";

    $resultado = mysqli_query($conexion,$query);

    echo "inserción de datos con éxito";

  }
  catch(Exception $error){
    echo "El error es " . $error;
  }

?>
