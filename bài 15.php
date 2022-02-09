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
        <h2>Diện tích và chu vi hình tròn</h2>
      <form method="POST" name="ht">
        <label for="lFirstnumber" class="label-width">Bán kính :</label>
        <input type="number" id="lFirstnumber" name="lFirstnumber" min="0" value="<?php if( isset($_POST['lFirstnumber']) ) echo $_POST['lFirstnumber']; ?>" required></br>
        <label for="lDientich" class="label-width">Chu vi :</label>
        <input type="number" id="lChuvi" name="lChuvi" class="result" value="<?php
          if( isset($_POST['lFirstnumber']) ) {
            $fNumber = $_POST['lFirstnumber'];

            $chuvi = $fNumber * pi() * 2;
            echo $chuvi;
          }
        ?>" readonly></br>
        <label for="lDientich" class="label-width">Diện tích :</label>
        <input type="number" id="lDientich" name="lDientich" class="result" value="<?php
          if( isset($_POST['lFirstnumber']) ) {
            $fNumber = $_POST['lFirstnumber'];

            $dientich = $fNumber * pi() * pi();
            echo $dientich;
          }
        ?>" readonly></br>
        <label class="label-width"></label>
        <input type="submit" name="fSubmit" value="Tính"/>
      </form> 
    </div>
  </body>

  </html>
