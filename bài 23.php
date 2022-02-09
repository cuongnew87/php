  <!DOCTYPE html>
  <html>
  <style>
    h2{
      text-transform: uppercase;
      color: #FFF;
      background-color: #fac563;
      text-align: center;
    }
    .container{
      margin: 0 auto;
      width: 400px;
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
      width: 100px;
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
      <h2>Nhận dạng tam giác</h2>
      <form method="POST" name="cnd">
        <label for="lFirstnumber" class="label-width">Cạnh 1 :</label>
        <input type="number" id="lFirstnumber" name="lFirstnumber" value="<?php if( isset($_POST['lFirstnumber']) ) echo $_POST['lFirstnumber']; ?>" required></br>
        <label for="lSecondnumber" class="label-width">Cạnh 2 :</label>
        <input type="number" id="lSecondnumber" name="lSecondnumber" value="<?php if( isset($_POST['lSecondnumber']) ) echo $_POST['lSecondnumber']; ?>" required></br>
        <label for="lThirdnumber" class="label-width">Cạnh 3 :</label>
        <input type="number" id="lThirdnumber" name="lThirdnumber" value="<?php if( isset($_POST['lThirdnumber']) ) echo $_POST['lThirdnumber']; ?>" required></br>
        <label for="lCanhhuyen" class="label-width">Loại tam giác :</label>
        <input type="text" id="lCanhhuyen" name="lCanhhuyen" class="result" value="<?php
          if( isset($_POST['lFirstnumber']) && isset($_POST['lSecondnumber']) && isset($_POST['lThirdnumber']) ) {

            $fNumber = $_POST['lFirstnumber'];
            $sNumber = $_POST['lSecondnumber'];
            $tNumber = $_POST['lThirdnumber'];

            if( ($fNumber + $sNumber > $tNumber) && ($tNumber + $sNumber > $fNumber) && ($fNumber + $tNumber > $sNumber) ) {
              if( ($fNumber == $sNumber) && ($tNumber == $sNumber) && ($fNumber == $tNumber) ) {
                echo "Tam giác đều";
              } else if( ($fNumber == $sNumber) || ($tNumber == $sNumber) || ($fNumber == $tNumber) ) {
                echo "Tam giác cân";
              } else if( (pow($fNumber, 2) + pow($sNumber, 2) == pow($tNumber, 2)) || (pow($tNumber, 2) + pow($sNumber, 2) == pow($fNumber, 2)) || (pow($fNumber, 2) + pow($tNumber, 2) == pow($sNumber, 2)) ) {
                echo "Tam giác vuông";
              }
               else{
                echo "Tam giác thường";
              }
            } else {
            echo "Không phải là tam giác";
          }

          }
        ?>" readonly></br>
        <label class="label-width"></label>
        <input type="submit" name="fSubmit" value="Nhận dạng"/>
      </form> 
    </div>
  </body>

  </html>
