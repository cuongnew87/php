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
      width: 50px;
    }
    .result{
      background-color: #ffc9cf;
    }

  </style>
  <body>
    <div class="container">
        <h2>Phương trình bậc nhất</h2>
      <form method="POST" name="cnd">
        <label for="lFirstnumber" class="label-width">Phương trình :</label>
        <input type="number" id="lFirstnumber" name="lFirstnumber" value="<?php if( isset($_POST['lFirstnumber']) ) echo $_POST['lFirstnumber']; ?>" required>
        <label for="lSecondnumber">x + </label>
        <input type="number" id="lSecondnumber" name="lSecondnumber" value="<?php if( isset($_POST['lSecondnumber']) ) echo $_POST['lSecondnumber']; ?>" required>
        <label for="lSecondnumber">= 0 </label></br>
        <label for="lCanhhuyen" class="label-width">Nghiệm :</label>
        <input type="text" id="lCanhhuyen" name="lCanhhuyen" class="result" value="<?php
          if( isset($_POST['lFirstnumber']) && isset($_POST['lSecondnumber']) ) {
            $a = $_POST['lFirstnumber'];
            $b = $_POST['lSecondnumber'];

            if($a == 0){
              if($b == 0) echo "Phương trình có vô số nghiệm";
              else echo "Phương trình vô nghiệm";
            } else{
              $result = -$b/$a;
              echo "x = " . $result;
            }
          }
        ?>" readonly></br>
        <label class="label-width"></label>
        <input type="submit" name="fSubmit" value="Giải phương trình"/>
      </form> 
    </div>
  </body>

  </html>
