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
      <h2>Kết quả học tập</h2>
      <form method="POST" name="ht">
        <label for="lHK1number" class="label-width">Điểm HK 1 :</label>
        <input type="number" id="lHK1number" name="lHK1number" step="0.01" min="0" value="<?php if( isset($_POST['lHK1number']) ) echo $_POST['lHK1number']; ?>" required></br>
        <label for="lHK2number" class="label-width">Điểm HK 2 :</label>
        <input type="number" id="lHK2number" name="lHK2number" step="0.01" min="0" value="<?php if( isset($_POST['lHK2number']) ) echo $_POST['lHK2number']; ?>" required></br>
        <label for="lScore" class="label-width">Điểm trung bình :</label>
        <input type="number" id="lScore" name="lScore" class="result" value="<?php
          if( isset($_POST['lHK1number']) && isset($_POST['lHK2number']) ) {
            $hk1Number = $_POST['lHK1number'];
            $hk2Number = $_POST['lHK2number'];            

            $result = ($hk1Number + $hk2Number * 2)/3;
            echo $result;
          }
        ?>" readonly></br>
        <label for="lResult" class="label-width">Kết quả :</label>
        <input type="text" id="lResult" name="lResult" class="result" value="<?php
        if(isset($result)){
          if($result >= 5) echo "Được lên lớp";
          else if($result < 5) echo "Ở lại lớp";
        }
        ?>" readonly></br>
        <label for="lRank" class="label-width">Xếp loại học lực :</label>
        <input type="text" id="lRank" name="lRank" class="result" value="<?php
        if(isset($result)){
          if($result >= 8) echo "Giỏi";
          else if($result > 6.5 && $result < 8) echo "Khá";
          else if($result >= 5 && $result <= 6.5) echo "Trung bình";
          else if($result < 5) echo "Kém";
        }
        ?>" readonly></br>
        <label class="label-width"></label>
        <input type="submit" name="fSubmit" value="Tính"/>
      </form> 
    </div>
  </body>

  </html>
