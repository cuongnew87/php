<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Khách hàng</title>

	<style>
		.container{
			border: 1px solid black;
			width: 600px;
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
				</tr>
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

					$sql = "SELECT * FROM khach_hang";
					$result = $conn->query($sql);

					if ($result->num_rows > 0) {
  						// output data of each row
						while($row = $result->fetch_assoc()) {
							echo "<tr>";
							echo "<td>" . $row["id"] . "</td>";
							echo "<td>" . $row["name"] . "</td>";
							echo "<td class='center'>" . $row["gender"] . "</td>";
							echo "<td>" . $row["address"] . "</td>";
							echo "<td>" . $row["phone"] . "</td>";
							echo "</tr>";
						}
					} else {
						echo "0 results";
					}
					$conn->close();
					?>
			</table>
		</div>
	</div>
</body>
</html>