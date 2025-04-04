<html>
<table border="1">
  <tr>
    <th>Columna 1</th>
    <th>Columna 2</th>
    <th>Columna 3</th>
  </tr>
  <tr>
    <td>Fila 1, Celda 1</td>
    <td>Fila 1, Celda 2</td>
    <td>Fila 1, Celda 3</td>
  </tr>
  <tr>
    <td>Fila 2, Celda 1</td>
    <td>Fila 2, Celda 2</td>
    <td>Fila 2, Celda 3</td>
  </tr>
</table>
<html>

<?php
  $cantidadfilasmax = 20;
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
