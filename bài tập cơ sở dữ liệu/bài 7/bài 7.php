<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Chi tiết sản phẩm</title>
	<!-- Jquery  -->
	<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
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
		.form{
			width: 500px;
			margin: 0px auto;
		}
		.form label{
			display: inline-block;
			width: 270px;
			margin-bottom: 10px;
		}
		.form input{
			width: 200px;
		}
		.form select{
			width: 204px;
		}
		.form textarea{
			width: 202px;
			max-width: 202px;
		}
		form{
			background-color: #efccbf;
			padding: 10px;
		}
		.form input[type=submit]{
			width: 100px;
		}
		.submit{
			width: 100%;
			text-align: center;
		}
	</style>
</head>
<body>
	<div class="form">
		<div class="title" style="background-color: red; color: #FFF;">Thêm sữa mới</div>
		<form method="post" enctype="multipart/form-data">
<!-- 			<label for="id">Mã sữa:</label>
	<input type="number" id="id" name="id" autocomplete="off" min="1"></br> -->
	<label for="name">Tên sữa:</label>
	<input type="text" id="name" name="name" required autocomplete="off"></br>
	<label for="company">Hãng sữa:</label>
	<select id="company" name="company">
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
				echo "<option value='". $row["name"] ."'>" . $row["name"] . "</option>";
			}
		} else {
			echo "0 results";
		}
		?>
	</select></br>
	<label for="type">Loại sữa:</label>
	<select id="type" name="type">
		<option value="Sữa tươi">Sữa tươi</option>
		<option value="Sữa chua">Sữa chua</option>
		<option value="Sữa bột">Sữa bột</option>
		<option value="Sữa đặc">Sữa đặc</option>
	</select></br>
	<label for="weight">Trọng lượng:</label>
	<input type="number" id="weight" name="weight" required></br>
	<label for="price">Đơn giá:</label>
	<input type="number" step="0.01" id="price" name="price" required></br>
	<label for="nutrition">Thành phần dinh dưỡng:</label>
	<textarea name="nutrition" required></textarea></br>
	<label for="positive">Lợi ích:</label>
	<textarea name="positive" required></textarea></br>
	<label for="image">Hình ảnh:</label>
	<input type="file" id="image" name="image" accept="image/*" required onchange="changeFile(this)"></br>		
	<div class="submit">
		<input type="submit" value="Submit" name="submit">
	</div>
</form> 
</div>

<?php
if( isset($_POST['submit']) ){

	$sql = "SELECT COUNT(*) as total FROM sua";
	$result = $conn->query($sql);
	$data = $result->fetch_assoc();
	$id = $data['total'] + 1;

	$image_path = "image/" . $_FILES['image']['name'];

	$sql = "INSERT INTO sua (name, company, type, weight, price, nutrition, positive, image) VALUES ('" . $_POST['name'] . "','" . $_POST['company'] . "','" . $_POST['type'] . "','" . $_POST['weight'] . "','". $_POST['price'] . "','" . $_POST['nutrition'] ."','" . $_POST['positive'] . "','" . $image_path . "')";
		if ($conn->query($sql) === TRUE) {
			$sql = "SELECT * FROM sua WHERE id=" . $id;
			$result = $conn->query($sql);
			$image = "";
			$name =  "";
			$weight = "";
			$price = "";

			if ($result->num_rows > 0) {
  				// output data of each row
				while($row = $result->fetch_assoc()) {
					$image = $row["image"];
					$name =  $row["name"];
					$weight = $row["weight"];
					$price = $row["price"];
					$nutrition = $row["nutrition"];
					$positive = $_POST['positive'];
				}
			}
			?>

			<div class="container">
				<?php echo "<p style='text-align:center'>Thêm sữa thành công!</p>" ?>
				<div class="title"><?php echo $name; ?></div>
				<div class="content">
					<div class="image">
						<img width="180px" height="200px" src="<?php echo $image; ?>" alt="">
					</div>
					<div class="info">
						<p class="head">Thành phần dinh dưỡng:</p>
						<p class="description"><?php echo $nutrition; ?></p>
						<p class="head">Lợi ích:</p>
						<p class="description"><?php echo $positive; ?></p>
						<div class="stats">
							<p class="head">Trọng lượng: </p>
							<p style="display: block; width: 5px;"></p>
							<p style="color: red;"><?php echo $weight; ?> gr</p>
							<p style="margin: 0 2px;"> - </p>
							<p class="head"> Đơn giá: </p>
							<p style="display: block; width: 5px;"></p>
							<p style="color: red;"><?php echo $price; ?> VND</p>
						</div>
					</div>
				</div>
			</div>
			<?php
		} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}
		$conn->close(); } ?>

		<script>
			function changeFile(e){
        //Post image to server
        for(var i = 0; i < e.files.length; i++){
        	var form = new FormData();
        	form.append("image", e.files[i]);

        //Post image to server
        $.ajax({
        	type: "POST",
        	url: "upload.php",
        	processData: false,
        	mimeType: "multipart/form-data",
        	contentType: false,
        	data: form,
        	success: function(response) {
        		let result = JSON.parse(response);
        		console.log(result.path);
        	}
        })
      }
    }
  </script>
</body>
</html>