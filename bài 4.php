<!DOCTYPE html>
<html>
<style>
th, td {
  border:1px solid black;
}
</style>
<body>

<table style="width:50%">
  <tr>
    <th>i</th>
    <th>i<sup>2</sup></th>
  </tr>
  <?php
  for($i = 1; $i <= 10; $i++){
    $a = $i * $i;
    echo" 
      <tr>
        <td>$i</td>
        <td>$a</td>
      </tr>
    ";
  }
  ?>
</table>

</body>
</html>