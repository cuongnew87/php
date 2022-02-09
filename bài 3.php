<?php
function cong($a, $b) {
  echo "$a + $b = " . $a + $b . "</br>";
}

function tru($a, $b) {
  echo "$a - $b = " . $a - $b . "</br>";
}

function nhan($a, $b) {
  echo "$a * $b = " . $a * $b . "</br>";
}

function chia($a, $b) {
  echo "$a / $b = " . $a / $b . "</br>";
}

function chialaydu($a, $b) {
  echo "$a % $b = " . $a % $b . "</br>";
}

function cbnn($a, $b) {
  $k = ($a < $b ) ? $a :$b;
  for($i = $k; $i <= $a * $b; $i++){
  	if($i % $a == 0 && $i % $b == 0){
  		echo "bcnn($a, $b) = " . $i . "</br>";
  		break;
  	}
  }
}

function ucln($a, $b) {
  $k = ($a < $b ) ? $a :$b;
  for($i = $k; $i >= 1; $i--){
  	if($a % $i == 0 && $b % $i == 0){
  		echo "ucln($a, $b) = " . $i . "</br>";
  		break;
  	}
  }
}

// 2 biến cho trước
cong(3, 5);
tru(3, 5);
nhan(3, 5);
chia(3, 5);
chialaydu(5, 3);

echo "</br>";

// $x, $y được lấy ngẫu nhiên mỗi lần chạy
$x = rand(1, 100);
$y = rand(1, 100);

cong($x, $y);
tru($x, $y);
nhan($x, $y);
chia($x, $y);
chialaydu($x, $y);

echo "</br>";

// $x, $y đƣợc lấy ngẫu nhiên mỗi lần chạy với điều kiện $x >$y 
while($x < $y) {
	$x = rand(1, 100);
	$y = rand(1, 100);
} 

cong($x, $y);
tru($x, $y);
nhan($x, $y);
chia($x, $y);
chialaydu($x, $y);

echo "</br>";

// $x, $y đƣợc lấy ngẫu nhiên mỗi lần chạy với điều kiện $x= k.$y
while($x % $y != 0) {
	$x = rand(1, 100);
	$y = rand(1, 100);
} 

cong($x, $y);
tru($x, $y);
nhan($x, $y);
chia($x, $y);
chialaydu($x, $y);

echo "</br>";

// BCNN($x,$y)
$x = rand(1, 100);
$y = rand(1, 100);

cbnn($x, $y);
ucln($x, $y);
?>