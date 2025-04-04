

<?php
  $cookie_name = "usuario";
  $cookie_value = "dmaloof";
  setcookie($cookie_name, $cookie_value, time() + (60*60*24) ); // 86400 seg = 1 day
  echo "la cookie se ha creado";
 ?>
