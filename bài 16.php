  <!DOCTYPE html>
  <html>
  <style>
    h2{
      text-transform: uppercase;
      color: #36689a;
      background-color: #fac563;
      text-align: center;
    }
    .container{
      margin: 0 auto;
      width: 350px;
      background-color: #feebca;

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
      width: 120px;
      margin: 5px 10px;
    }
    input[type=submit] {
      cursor: pointer;
      margin: 0 auto;
    }
    input[type=number] {
      border-style: inset;
    }
    .result{
      background-color: #ffc9cf;
    }

  </style>
  <body>
    <div class="container">
        <h2>Thanh toán tiền điện</h2>
      <form method="POST" name="ht">
        <label for="lName" class="label-width">Tên chủ hộ :</label>
        <input type="text" id="lName" name="lName" value="<?php if( isset($_POST['lName']) ) echo $_POST['lName']; ?>"></br>
        <label for="lFirstnumber" class="label-width">Chỉ số cũ :</label>
        <input type="number" id="lOldnumber" name="lOldnumber" min="0" value="<?php if( isset($_POST['lOldnumber']) ) echo $_POST['lOldnumber']; ?>" required></br>
        <label for="lFirstnumber" class="label-width">Chỉ số mới :</label>
        <input type="number" id="lNewnumber" name="lNewnumber" min="0" value="<?php if( isset($_POST['lNewnumber']) ) echo $_POST['lNewnumber']; ?>" required></br>
        <label for="lFirstnumber" class="label-width">Đơn giá :</label>
        <input type="number" id="lFirstnumber" name="lFirstnumber" min="0" value="<?php if( isset($_POST['lFirstnumber']) ) echo $_POST['lFirstnumber']; else echo "2000" ?>" required></br>
        <label for="lDientich" class="label-width">Số tiền thanh toán :</label>
        <input type="number" id="lChuvi" name="lChuvi" class="result" value="<?php
          if( isset($_POST['lFirstnumber']) && isset($_POST['lNewnumber']) && isset($_POST['lOldnumber'])) {
            $fNumber = $_POST['lFirstnumber'];
            $oNumber = $_POST['lOldnumber'];
            $nNumber = $_POST['lNewnumber'];            

            $result = $fNumber * ($nNumber - $oNumber);
            echo $result;
          }
        ?>" readonly></br>
        <label class="label-width"></label>
        <input type="submit" name="fSubmit" value="Tính"/>
      </form> 
    </div>
  </body>

  </html>
