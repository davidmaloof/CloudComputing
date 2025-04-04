<html>

<?php
 /* To navigate you can use next($array), prev($array), reset($array), end($array),
 while the data is read using current($array) and/or key($array). */
 $arreglo1["alejandro"] = 5;
 $arreglo1["ramon"] = 6;
 $arreglo1["diego"] = 8;
  $arreglo1[2] = 10;
  $arreglo1[0] = "hola";
  print_r($arreglo1);

  echo "<br>";

  echo end($arreglo1);
 ?>



</html>
