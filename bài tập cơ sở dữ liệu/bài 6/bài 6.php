<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sữa</title> 
	<style>  
		*{
			margin: 0;
			padding: 0;
		} 
		.container{
			width: 1000px;
			margin: 10px auto;
		}
		.title{
			text-transform: uppercase;
			font-weight: bold;
			font-size: 20px;
			color: red;
			background-color: #efccbf;
			text-align: center;
			border-top: 1px solid black;
			border-left: 1px solid black;
			border-right: 1px solid black;
			width: 100%;
			padding: 10px 0;
		} 
		.content{
			grid-template-columns: 200px 200px 200px 200px 200px;
			display: grid;
		}
		.card{
			width: 200px;
			height: 200px;
		}
		.content > div {
			text-align: center;
			border: 1px solid black;
			margin:0 -1px -1px 0;
		}
		.name{
			font-weight: bold;
			color: black;
		}
	</style>
</head>
<body>
	<div class="container">
		<div class="title">thông tin các sản phẩm</div>
		<div class="content">
			<?php
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "ql_ban_sua";

			// Create connection
			$conn = new mysqli($servername, $username, $password, $dbname);
			// Check connection
			if ($conn->connect_error) {
				die("Connection failed: " . $conn->connect_error);
			}

			$sql = "SELECT * FROM sua LIMIT 10";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
  			// output data of each row
				while($row = $result->fetch_assoc()) {
					echo "<div class='card'>";
					echo "<a href='detail.php?id=". $row["id"] ."' class='name'>" . $row["name"] . "</a>";
					echo "<p style='margin: 5px 0'>" . $row["weight"] . " gr - " . $row["price"] . " VND" . "</p>";
					echo "<img src=". $row["image"] ." width='150px'>";
					echo "</div>";
				}
			} else {
				echo "0 results";
			}
			$conn->close();
			?>
		</div>
	</div>   
</body>
</html>