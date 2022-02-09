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
          <input type="radio" id="cong" name="pheptinh" value="Cộng" checked>
          <label for="cong" class="red-text">Cộng</label>
          <input type="radio" id="tru" name="pheptinh" value="Trừ">
          <label for="tru" class="red-text">Trừ</label>
          <input type="radio" id="nhan" name="pheptinh" value="Nhân">
          <label for="nhan" class="red-text">Nhân</label>
          <input type="radio" id="chia" name="pheptinh" value="Chia">
          <label for="chia" class="red-text">Chia</label>
        </div>

        <label for="lFirstnumber" class="label-width">Số thứ nhất :</label>
        <input type="number" id="lFirstnumber" name="lFirstnumber" required></br>
        <label for="lSecondnumber" class="label-width">Số thứ hai :</label>
        <input type="number" id="lSecondnumber" name="lSecondnumber" required></br>
        <label class="label-width"></label>
        <input type="submit" name="fSubmit" value="Submit"/>
      </form> 
    </div>
  </body>

  </html>
