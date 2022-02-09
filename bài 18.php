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
      background-color: #db95b9;

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
      <h2>Kết quả thi đại học</h2>
      <form method="POST" name="ht">
        <label for="lMath" class="label-width">Toán :</label>
        <input type="number" id="lMath" name="lMath" step="0.01" min="0" value="<?php if( isset($_POST['lMath']) ) echo $_POST['lMath']; ?>" required></br>
        <label for="lPhysics" class="label-width">Lý :</label>
        <input type="number" id="lPhysics" name="lPhysics" step="0.01" min="0" value="<?php if( isset($_POST['lPhysics']) ) echo $_POST['lPhysics']; ?>" required></br>
        <label for="lChemistry" class="label-width">Hóa :</label>
        <input type="number" id="lChemistry" name="lChemistry" step="0.01" min="0" value="<?php if( isset($_POST['lChemistry']) ) echo $_POST['lChemistry']; ?>" required></br>
        <label for="lBaseScore" class="label-width">Điểm chuẩn :</label>
        <input type="number" id="lBaseScore" name="lBaseScore" step="0.01" min="0" style="color: red" value="<?php if( isset($_POST['lBaseScore']) ) echo $_POST['lBaseScore']; ?>" required></br>
        <label for="lScore" class="label-width">Tổng kết :</label>
        <input type="number" id="lScore" name="lScore" class="result" value="<?php
          if( isset($_POST['lMath']) && isset($_POST['lPhysics']) && isset($_POST['lChemistry']) ) {
            $mNumber = $_POST['lMath'];
            $pNumber = $_POST['lPhysics'];   
            $cNumber = $_POST['lChemistry'];            

            $result = $mNumber + $pNumber + $cNumber;
            echo $result;
          }
        ?>" readonly></br>
        <label for="lResult" class="label-width">Kết quả thi :</label>
        <input type="text" id="lResult" name="lResult" class="result" value="<?php
        if(isset($result)){
          $bNumber = $_POST['lBaseScore'];
          if($result >= $bNumber && $mNumber == 0 && $pNumber = 0 && $cNumber == 0) echo "Đậu";
          else if($result < $bNumber || $mNumber == 0 || $pNumber = 0 || $cNumber == 0) echo "Rớt";
        }
        ?>" readonly></br>
        <label class="label-width"></label>
        <input type="submit" name="fSubmit" value="Tính"/>
      </form> 
    </div>
  </body>

  </html>
