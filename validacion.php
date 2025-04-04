<?php
 $cadena_campo1 = $_POST["campo1"];
  if(str_contains($cadena_campo1, ";" ) ){
    echo "Tiene ; lo que la hace peligrosa";
  }
  else{
    echo "Cadena ok";
  }

 ?>
