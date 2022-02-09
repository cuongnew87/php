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
        <h2>Cạnh huyền tam giác vuông</h2>
      <form method="POST" name="cnd">
        <label for="lFirstnumber" class="label-width">Cạnh A :</label>
        <input type="number" id="lFirstnumber" name="lFirstnumber" min="0" value="<?php if( isset($_POST['lFirstnumber']) ) echo $_POST['lFirstnumber']; ?>" required></br>
        <label for="lSecondnumber" class="label-width">Cạnh B :</label>
        <input type="number" id="lSecondnumber" name="lSecondnumber" min="0"value="<?php if( isset($_POST['lSecondnumber']) ) echo $_POST['lSecondnumber']; ?>" required></br>
        <label for="lCanhhuyen" class="label-width">Cạnh huyền :</label>
        <input type="number" id="lCanhhuyen" name="lCanhhuyen" class="result" value="<?php
          if( isset($_POST['lFirstnumber']) && isset($_POST['lSecondnumber']) ) {
            $fNumber = $_POST['lFirstnumber'];
            $sNumber = $_POST['lSecondnumber'];

            $result = sqrt(pow($fNumber, 2) + pow($sNumber, 2));
            echo $result;
          }
        ?>" readonly></br>
        <label class="label-width"></label>
        <input type="submit" name="fSubmit" value="Tính"/>
      </form> 
    </div>
  </body>

  </html>
