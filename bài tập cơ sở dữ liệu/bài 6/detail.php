<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Chi tiết sản phẩm</title>

	<style>  
		*{
			margin: 0;
			padding: 0;
		} 
		.container{
			width: 500px;
			margin: 10px auto;
			border: 1px solid black;
		}
		.title{
			text-transform: uppercase;
			font-weight: bold;
			font-size: 20px;
			color: red;
			background-color: #efccbf;
			text-align: center;
			width: 100%;
			padding: 10px 0;
		} 
		.content{
			display: flex;
			width: 100%;
			border-bottom: 1px solid black;
		}
		.image{
			width: 200px;
			border-top: 1px solid black;
			border-right: 1px solid black;
			text-align: center;
			padding-top: 10px;
		}
		.info{
			font-size: 14px;
			border-top: 1px solid black;
			width: 300px;
			padding: 5px;
		}
		.head{
			font-weight: bold;
			font-style: italic;
		}
		.stats{
			display: flex;
			float: right;
		}
		.description{
			margin-bottom: 5px;
		}
		.back{
			width: 196px;
			border-right: 1px solid black;
			text-align: right;
		}
		.back a{
			padding-right: 5px;
		}
	</style>
</head>
<body>

	<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "ql_ban_sua";

	$image = "";
	$name =  "";
	$weight = "";
	$price = "";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

	$sql = "SELECT * FROM sua WHERE id=" . $_GET['id'];
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
  	// output data of each row
		while($row = $result->fetch_assoc()) {
			$image = $row["image"];
			$name =  $row["name"];
			$weight = $row["weight"];
			$price = $row["price"];			
		}
	} else {
		echo "0 results";
	}
	$conn->close();
	?>

	<div class="container">
		<div class="title"><?php echo $name; ?></div>
		<div class="content">
			<div class="image">
				<img width="180px" height="200px" src="<?php echo $image; ?>" alt="">
			</div>
			<div class="info">
				<p class="head">Thành phần dinh dưỡng:</p>
				<p class="description">Sữa toàn phần, sữa bột không béo, mặt bắp, đường lactose, đường sucrose, hương liệu vani nhân tạo, vitamin, khoáng chất, taurine...</p>
				<p class="head">Lợi ích:</p>
				<p class="description">Sữa bột GROW được đặc chế và gia tăng thêm các loại vitamin, khoáng chất và các nguyên tố siêu vi lượng cần thiết cho khẩu phần ăn. Sữa bột GROW bổ sung các nhu cầu dinh dưỡng giúp cho việc tăng trưởng</p>
				<div class="stats">
					<p class="head">Trọng lượng: </p>
					<p style="display: block; width: 5px;"></p>
					<p><?php echo $weight; ?> gr</p>
					<p style="margin: 0 2px;"> - </p>
					<p class="head"> Đơn giá: </p>
					<p style="display: block; width: 5px;"></p>
					<p><?php echo $price; ?> VND</p>
				</div>
			</div>
		</div>
		<div class="back"><a href="bài 6.php">Quay về</a></div>
	</div>
</body>
</html>