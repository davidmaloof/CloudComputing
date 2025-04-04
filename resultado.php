<html>

<?php
  $j = $_POST["operador1"];
  $i = 0;
  while($i < $j){
    if($i%3 == 0){
      echo "<br>";
    }
    echo '<img src="imagenia.jpg" width="100" height="100">';
    $i = $i + 1;
  }

 ?>


</html>
