<html>
<table border="1">
  <tr>
    <th>Columna 1</th>
    <th>Columna 2</th>
    <th>Columna 3</th>
  </tr>

<?php
  $cantidadfilasmax = 8;
  $filas = 1;
  while($filas <= $cantidadfilasmax){
    echo "  <tr>
              <td>Fila ".$filas.", Celda 1</td>
              <td>Fila ".$filas.", Celda 2</td>
              <td>Fila ".$filas.", Celda 3</td>
            </tr>";
    $filas = $filas + 1;
  }
 ?>
</table>
<html>
