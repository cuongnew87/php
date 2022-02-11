<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Edit</title>

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
			text-align: center;
			width: 100%;
			padding: 10px 0;
			background-color: #e56800; 
			color: #942000;
		} 
		.content{
			display: flex;
			width: 100%;
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
			padding: 0px 5px;
		}
		.head{
			font-weight: bold;
			font-style: italic;
		}
		.description{
			margin-bottom: 5px;
		}
		.form{
			width: 500px;
			margin: 0px auto;
		}
		.form .label{
			display: inline-block;
			width: 270px;
			margin: 10px;
		}
		.form input[type=text], .radio-group{
			width: 200px;
		}
		form{
			background-color: #e6b664;		
		}
		.form input[type=submit]{
			width: 100px;
			background-color: #7d735f;
			cursor: pointer;
		}
		.submit{
			width: 100%;
			text-align: center;
			background-color: #e6a00f;
			height: 30px;
			line-height: 30px;
		}
		.radio-group{
			float: right;
			margin-right: 4px;
		}

	</style>
</head>
<body>

	<?php

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "ql_ban_sua";

	$conn = new mysqli($servername, $username, $password, $dbname);
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

	$sql = "SELECT * FROM khach_hang WHERE id='" . $_GET['id'] ."'";
	$result = $conn->query($sql);

	$name = "";
	$address = "";
	$phone = "";
	$email = "";
	$gender = "";
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			$name = $row["name"];
			$gender = $row["gender"];
			$address = $row["address"];
			$email = $row["email"];
			$phone = $row["phone"];							
		}
	}

	if(isset($_POST['edit'])){
		$sql = "UPDATE khach_hang SET name='" . $_POST['name'] . 
		"', gender='" . $_POST['gender'] .
		"', address='" . $_POST['address'] . 
		"', email='" . $_POST['email'] . 
		"', phone='" . $_POST['phone'] . 
		"' WHERE id='" . $_GET['id'] ."'";
		if ($conn->query($sql) === TRUE) {
			echo '<script type="text/javascript">
			window.location = "bài 8.php";
			</script>';
		} else{
			echo "Error: " . $sql . "<br>" . $conn->error;
		}
		// echo $_POST['gender'];
	}

	$conn->close();
	?>

	<div class="form">
		<div class="title">Cập nhật thông tin khách hàng</div>
		<form method="post">
			<label for="id" class="label">Mã khách hàng:</label>
			<input type="text" id="id" name="id" readonly style="background-color: #e6e669;" value="<?php echo $_GET['id'] ?>"></br>
			<label for="name" class="label">Tên khách hàng:</label>
			<input type="text" id="name" name="name" required autocomplete="off" value="<?php echo $name ?>"></br>
			<label for="gender" class="label">Phái:</label>
			<div class="radio-group">
				<label for="gender">Nam</label>
				<input type="radio" name="gender" value="0" <?php if( $gender == 0 ) echo "checked" ?>>
				<label for="gender">Nữ</label>
				<input type="radio" name="gender" value="1" <?php if( $gender == 1 ) echo "checked" ?>>
			</div>
			<label for="address" class="label">Địa chỉ:</label>
			<input type="text" id="address" name="address" required value="<?php echo $address ?>"></br>
			<label for="phone" class="label">Điện thoại:</label>
			<input type="text" id="phone" name="phone" required value="<?php echo $phone ?>"></br>
			<label for="email" class="label">Email:</label>
			<input type="text" id="email" name="email" required value="<?php echo $email ?>"></br>
			<div class="submit">
				<input type="submit" value="Cập nhật" name="edit">
			</div>
		</form> 
	</div>
</body>
</html>