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
    <th>STT</th>
    <th>Tên sách</th>
    <th>Nội dung sách</th>
  </tr>
  <?php
  for($i = 1; $i <= 100; $i++){
    echo" 
      <tr>
        <td>$i</td>
        <td>Tensach$i</td>
        <td>Noidung$i</td>
      </tr>
    ";
  }
  ?>
</table>

</body>
</html>