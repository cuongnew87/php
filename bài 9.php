<?php

function demchan($array){
  $count = 0;
  for($i = 0; $i < count($array); $i++){
    if($array[$i] % 2 == 0){
      $count++;
    }
  }

  echo "Tổng số chẵn: " . $count . "</br>";
}

function tongle($array){
  $sum = 0;
  for($i = 0; $i < count($array); $i++){
    if($array[$i] % 2 != 0){
      $sum += $array[$i];
    }
  }

  echo "Tổng các số lẻ: " . $sum . "</br>";
}

$n = 5;

$min = 1;
$max = 100;

$array = [];
echo "Mảng: </br>";
for($i = 0; $i < $n; $i++){
  $array[$i] = rand($min, $max);
  echo "array[$i] = " . $array[$i] . "</br>";
}

demchan($array);
tongle($array);

echo ("Giá trị lớn nhất: " . max($array) . "<br>");
echo ("Giá trị nhỏ nhất: " . min($array) . "<br>");

echo "Giá trị đảo ngược: </br>";
for($i = $n - 1; $i >= 0; $i--){
  $a = $n - $i - 1;
  echo "array[$a] = " . $array[$i] . "</br>";
}
?>