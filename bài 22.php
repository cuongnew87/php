  <!DOCTYPE html>
  <html>
  <style>
    h2{
      text-transform: uppercase;
      color: #FFF;
      background-color: #016e79;
      text-align: center;
    }
    .container{
      margin: 0 auto;
      width: 400px;
      background-color: #019faa;

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
      background-color: #cbff9b;
    }

  </style>
  <body>
    <div class="container">
      <h2>Tính tiền karaoke</h2>
      <form method="POST" name="cnd">
        <label for="lFirstnumber" class="label-width">Giờ bắt đầu :</label>
        <input type="number" id="lFirstnumber" name="lFirstnumber" min="10" value="<?php if( isset($_POST['lFirstnumber']) ) echo $_POST['lFirstnumber']; ?>" required></br>
        <label for="lSecondnumber" class="label-width">Giờ kết thúc :</label>
        <input type="number" id="lSecondnumber" name="lSecondnumber" min="10" value="<?php if( isset($_POST['lSecondnumber']) ) echo $_POST['lSecondnumber']; ?>" required></br>
        <label for="lCanhhuyen" class="label-width">Tiền thanh toán :</label>
        <input type="text" id="lCanhhuyen" name="lCanhhuyen" class="result" value="<?php
          if( isset($_POST['lFirstnumber']) && isset($_POST['lSecondnumber']) ) {
            $fNumber = $_POST['lFirstnumber'];
            $sNumber = $_POST['lSecondnumber'];
            $result = 0;
            if($sNumber > $fNumber){
              if($fNumber < 17){
                if($sNumber < 17){
                  $result = ($sNumber - $fNumber) * 20000;
                } else{
                  $result = (17 - $fNumber) * 20000 + (17 - $sNumber) * 45000;
                }
              } else{
                $result = ($sNumber - $fNumber) * 45000;
              }

              echo $result;
          } else{
            echo "error";
          }

          }
        ?>" readonly></br>
        <label class="label-width"></label>
        <input type="submit" name="fSubmit" value="Tính"/>
      </form> 
    </div>
  </body>

  </html>
