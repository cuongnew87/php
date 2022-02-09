<!DOCTYPE html>
<?php
// Start the session
session_start();
?>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>xl</title>

	<style>
/* The Modal (background) */
.modal {
	position: fixed; /* Stay in place */
	z-index: 1; /* Sit on top */
	padding-top: 100px; /* Location of the box */
	left: 0;
	top: 0;
	width: 100%; /* Full width */
	height: 100%; /* Full height */
	overflow: auto; /* Enable scroll if needed */
	background-color: rgb(0,0,0); /* Fallback color */
	background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
	background-color: #fefefe;
	margin: auto;
	padding: 20px;
	border: 1px solid #888;
	width: 80%;
}

/* The Close Button */
.close {
	color: #aaaaaa;
	float: right;
	font-size: 28px;
	font-weight: bold;
}

.close:hover,
.close:focus {
	color: #000;
	text-decoration: none;
	cursor: pointer;
}
</style>
</head>
<body>
	<!-- The Modal -->
	<div id="myModal" class="modal">

		<!-- Modal content -->
		<div class="modal-content">
			<span class="close">&times;</span>
			<p>Chúc mừng bạn đăng ký thành công, click <a href="đăng ký.php">vào đây</a> để chuyển về trang chủ nếu hệ thống không tự chuyển</p>
		</div>

	</div>
	<?php
	echo $_POST['email'] . "</br>";
	echo $_POST['name'] . "</br>";
	echo $_POST['address'] . "</br>";
	echo $_POST['phone'] . "</br>";
	echo $_POST['gender'] . "</br>";
	if( isset($_POST['habit']) ) echo $_POST['habit'] . "</br>";

	// Set session variables
	$_SESSION["email"] = $_POST['email'];
	$_SESSION["password"] = $_POST['password'];
	$_SESSION["name"] = $_POST['name'];
	$_SESSION["address"] = $_POST['address'];
	$_SESSION["phone"] = $_POST['phone'];
	$_SESSION["gender"] = $_POST['gender'];
	if( isset($_POST['habit']) ) $_SESSION["habit"] = $_POST['habit'];

	$_SESSION["remember"] = 0;

	?>

	<script>

		window.setTimeout(function(){

        // Move to a new location or you can do something else
        window.location.href = "đăng ký.php";

    }, 4000);
</script>
</body>
</html>