<!DOCTYPE html>
<html>
<style>
th, td {
  border:1px solid black;
}
</style>
<body>

<table style="width:100%">
  <tr>
  <?php
    for($j = 2; $j <= 10; $j++){
    echo" 
        <th>$j</th>
    ";
    }
  ?>
  </tr>
  <?php
  for($i = 1; $i <= 10; $i++){
    echo "<tr>";
    for($j = 2; $j <= 10; $j++){
      $a = $i * $j;
    echo" 
        <td>$i x $j = $a</td>
    ";
    }
        echo "</tr>";
  }
  ?>
</table>

</body>
</html>