<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sữa</title>

	<style>
		.container{
			border: 1px solid black;
			width: 660px;
			margin: 0px auto;
		}
		.title{
			text-transform: uppercase;
			text-align: center;
			font-size: 20px;
			font-weight: bold;
			color: #07397c;
			margin-bottom: 15px;
		}
		table{
			margin: 10px auto;
		}
		table, th, td {
			border: 1px solid black;
		}
	</style>
</head>
<body>
	<div class="container">
		<div class="title">Thông tin hãng sữa</div>
		<div class="table">
			<table>
				<tr>
					<th>Mã HS</th>
					<th>Tên hãng sữa</th>
					<th>Địa chỉ</th>
					<th>Điện thoại</th>
					<th>Email</th>
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

					$sql = "SELECT * FROM hang_sua";
					$result = $conn->query($sql);

					if ($result->num_rows > 0) {
  						// output data of each row
						while($row = $result->fetch_assoc()) {
							echo "<tr>";
							echo "<td>" . $row["id"] . "</td>";
							echo "<td>" . $row["name"] . "</td>";
							echo "<td>" . $row["address"] . "</td>";
							echo "<td>" . $row["phone"] . "</td>";
							echo "<td>" . $row["email"] . "</td>";
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