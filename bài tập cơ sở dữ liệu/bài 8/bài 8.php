<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Khách hàng</title>

	<style>
		.container{
			border: 1px solid black;
			width: 800px;
			margin: 0px auto;
		}
		.title{
			text-transform: uppercase;
			text-align: center;
			font-size: 20px;
			font-weight: bold;
			color: black;
			margin-bottom: 15px;
			margin-top: 10px;
		}
		table{
			margin: 10px auto;
		}
		table, th, td {
			border: 1px solid black;
		}
		.center{
			text-align: center;
			padding: 5px;
		}
		tr:nth-child(even) {
			background-color: #ffaa4f;
		}
	</style>
</head>
<body>
	<div class="container">
		<div class="title">Thông tin khách hàng</div>
		<div class="table">
			<table>
				<tr>
					<th>Mã KH</th>
					<th>Tên khách hàng</th>
					<th>Giới tính</th>
					<th>Địa chỉ</th>
					<th>Số điện thoại</th>
					<th>Email</th>
					<th>Sửa</th>
					<th>Xóa</th>
				</tr>
				<?php

				function getKhachhang($conn){
					$sql = "SELECT * FROM khach_hang";
					$result = $conn->query($sql);

					if ($result->num_rows > 0) {
  						// output data of each row
						while($row = $result->fetch_assoc()) {
							echo "<tr>";
							echo "<td>" . $row["id"] . "</td>";
							echo "<td>" . $row["name"] . "</td>";
							if($row["gender"] == 1) echo "<td class='center'>Nữ</td>";
							else echo "<td class='center'>Nam</td>";
							echo "<td>" . $row["address"] . "</td>";
							echo "<td>" . $row["phone"] . "</td>";
							echo "<td>" . $row["email"] . "</td>";
							echo "<td><a href='edit.php?id=" . $row["id"] . "'>Sửa</a></td>";
							echo "<td><a href='bài 8.php?xoa=" . $row["id"] ."'>Xóa</a></td>";							
							echo "</tr>";
						}
					}
				}

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

				getKhachhang($conn);

				if(isset($_GET['xoa'])){
					$sql = "DELETE FROM khach_hang WHERE id ='" . $_GET['xoa'] . "'";
					if ($conn->query($sql) === TRUE) {
						echo '<script type="text/javascript">
           					window.location = "bài 8.php";
      					</script>';
					} else{
						echo "Error: " . $sql . "<br>" . $conn->error;
					}
				}

				$conn->close();
				?>
			</table>
		</div>
	</div>
</body>
</html>