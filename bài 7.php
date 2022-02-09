<!DOCTYPE html>
<html>
<body>

<select>
  <?php
  for($i = 1900; $i <= date("Y"); $i++){
    echo" 
      <option value='$i'>
        $i
      </option>
    ";
  }
  ?>
</select>

</body>
</html>