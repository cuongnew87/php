<!DOCTYPE html>
<?php
// Start the session
session_start();
?>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Đăng nhập</title>

	<style>
		*{
			padding: 0;
			margin: 0;
			font-family: tahoma;
		}
		a{
			text-decoration: none;
			color: black;
		}
		.container{
			width: 1000px;
			margin: 0 auto;
		}
		.banner{
			width: 100%;
			height: 200px;
			background-color: #025cf8;
			color: #FFF;
			text-transform: uppercase;
			font-weight: bold;
			font-size: 18px;
			text-align: center;
			line-height: 200px;
			margin-bottom: 3px;
			border: 1px black;
			border-style: double double none double;
		}
		.content{
			display: flex;
			height: 400px;
		}
		.menu{
			width: 250px;
			border-style: double;
		}
		.menu h4{
			background-color: #333333;
			color: #FFF;
			text-align: center;
			padding: 5px;
		}
		.menu p{
			border: 1px black;
			border-style: none none solid none;
			padding: 3px;
		}
		.form{
			width: 750px;
			border-style: double double double none;
			padding-left: 5px;
		}
		.form h2{
			color: #1916d1;
			text-align: center;
			text-transform: uppercase;
			margin: 10px 0;
		}
		.label{
			display: inline-block;
			width: 270px;
		}
		input[type="text"], input[type="password"]{
			width: 300px;
			margin-bottom: 5px;
			height: 20px;
		}
		input[type="checkbox"]{
			margin-right: 10px;
		}
		.radio-group{
			width: 300px;
			margin-bottom: 5px;
			height: 20px;
			display: inline-block;
		}
		input[type="submit"], input[type="reset"]{
			margin-top: 15px;
			height: 25px;
			width: 80px;
		}
	</style>
</head>
<body>
	<div class="container">
		<div class="banner">vung banner website</div>
		<div class="content">
			<div class="menu">
				<h4>Menu</h4>
				<p>Trang chủ</p>
				<p id="signup"><a href="đăng ký.php">Đăng ký</a></p>
				<p id="login"><a href="đăng nhập.php">Đăng nhập</a></p>
				<p id="user-info" style="display: none; cursor: pointer;" onclick="getInfo()">Thông tin cá nhân</p>
				<p id="logout" style="display: none; cursor: pointer;" onclick="logout()">Đăng xuất</p>
			</div>
			<div class="form">  		
				<h2 id="title">Thông tin đăng nhập</h2>
				<form method="post" action="đăng nhập.php" id="form-login">
					<label for="email" class="label">Email</label>
					<input type="text" id="email" name="email" required><br>
					<label for="password" class="label">Password</label>
					<input type="Password" id="password" name="password" required><br>

					<label class="label"></label>   
					<input type="checkbox" id="remember" name="remember">
					<label for="remember" style="font-size: 14px;">Ghi nhớ thông tin</label><br>

					<label class="label"></label>       
					<input type="submit" value="Đăng nhập">
					<input type="reset" value="Làm lại">
				</form> 

				<div id="info" style="display: none;">
					<?php
					echo "Email: " . $_SESSION['email'] . "</br>";
					echo "Name: " . $_SESSION['name'] . "</br>";
					echo "Address: " . $_SESSION['address'] . "</br>";
					echo "Phone: " . $_SESSION['phone'] . "</br>";
					echo "Gender: " . $_SESSION['gender'] . "</br>";
					echo "Remember: " . $_SESSION['remember'] . "</br>";
					if( isset($_SESSION['habit']) ) echo "Habit: " . $_SESSION['habit'] . "</br>";
					?>
				</div>	
			</div>
		</div>
	</div>

	<?php
	if( isset($_GET['logout']) ) $_SESSION["remember"] = 0;
	if( isset($_POST['remember']) ) $_SESSION["remember"] = 1;

	function login(){
		echo '<script>
		document.getElementById("form-login").style.display = "none";
		document.getElementById("title").innerHTML = "Đăng nhập thành công";
		document.getElementById("signup").style.display = "none";
		document.getElementById("login").style.display = "none";
		document.getElementById("user-info").style.display = "block";
		document.getElementById("logout").style.display = "block";

		document.getElementById("signup").href = "#"; 
		</script>';
	}
	if( $_SESSION["remember"] == 1 ) login();
	else if( isset($_POST['email']) && isset($_POST['password']) ){
		if( ($_POST['email'] == $_SESSION["email"] && $_POST['password'] == $_SESSION["password"]) ){ 
			login();
		} else{
			echo '<script>alert("Đăng nhập không thành công")</script>';
		}
	}

	?>
	<script type="text/javascript">
		function getInfo(){
			document.getElementById("info").style.display = "block";
		}
		function logout(){
			window.location.href = "đăng nhập.php?logout=true";
		}
	</script>
</body>
</html>