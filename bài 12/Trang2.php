  <!DOCTYPE html>
  <html>
  <style>
    h2{
      text-transform: uppercase;
      color: #36689a;
      text-align: center;
    }
    .container{
      margin: 0 auto;
      width: 600px;
    }
    .radio-group{
      display: flex;
    }
    .choose{
      color:#b1643e; 
      font-weight: bold;
    }
    .red-text{
      color: red;
    }
    .label-width{
      display: inline-block;
      width: 150px;
      color: #3a61ff;
      font-weight: bold;
      text-align: right;
      margin: 5px 0;
    }
    input[type=submit] {
      cursor: pointer;
      margin: 0 auto;
    }

  </style>
  <body>
    <div class="container">
      <h2>Phép tính trên hai số</h2>
      <form method="post" action="Trang2.php">
        <div class="radio-group">
          <label class="choose" style="width: 150px; text-align: right;">Chọn phép tính :</label>
          <label class="choose" style="margin-left: 5px;"><?php echo  $_POST['pheptinh'] ?></label>
        </div>

        <label for="lFirstnumber" class="label-width">Số 1 :</label>
        <input type="number" id="lFirstnumber" name="lFirstnumber" value="<?php echo  $_POST['lFirstnumber'] ?>" disabled></br>
        <label for="lSecondnumber" class="label-width">Số 2 :</label>
        <input type="number" id="lSecondnumber" name="lSecondnumber" value="<?php echo  $_POST['lSecondnumber'] ?>" disabled></br>
        <label for="lResult" class="label-width">Kết quả :</label>
        <input type="text" id="lResult" name="lResult" value="<?php 
        	$fNumber = $_POST['lFirstnumber'];
        	$sNumber = $_POST['lSecondnumber'];
        	$pheptinh = $_POST['pheptinh'];

        	if($pheptinh === "Cộng") $result = $fNumber + $sNumber;
        	else if($pheptinh === "Trừ") $result = $fNumber - $sNumber;
        	else if($pheptinh === "Nhân") $result = $fNumber * $sNumber;
        	else if($pheptinh === "Chia") {
        		if($sNumber == 0){
        			$result = "error";
        		} else{
        			$result = $fNumber / $sNumber;
        		}
        	}
        	echo $result ?>" disabled></br>
       	<label class="label-width"></label>
        <a href="" style="font-style: italic;" onclick="window.history.go(-1); return false;">Quay lại trang trước</a>
      </form> 
    </div>
  </body>

  </html>
