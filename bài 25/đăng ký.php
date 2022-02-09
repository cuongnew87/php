<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Đăng ký</title>

  <style>
    *{
      padding: 0;
      margin: 0;
      font-family: tahoma;
    }
    a{
      text-decoration: none;
      color: black;
    }
    .container{
      width: 1000px;
      margin: 0 auto;
    }
    .banner{
      width: 100%;
      height: 200px;
      background-color: #025cf8;
      color: #FFF;
      text-transform: uppercase;
      font-weight: bold;
      font-size: 18px;
      text-align: center;
      line-height: 200px;
      margin-bottom: 3px;
      border: 1px black;
      border-style: double double none double;
    }
    .content{
      display: flex;
      height: 400px;
    }
    .menu{
      width: 250px;
      border-style: double;
    }
    .menu h4{
      background-color: #333333;
      color: #FFF;
      text-align: center;
      padding: 5px;
    }
    .menu p{
      border: 1px black;
      border-style: none none solid none;
      padding: 3px;
    }
    .form{
      width: 750px;
      border-style: double double double none;
      padding-left: 5px;
    }
    .form h2{
      color: #1916d1;
      text-align: center;
      text-transform: uppercase;
      margin-top: 5px;
    }
    .red-text{
      color: #c6372f;
      font-weight: bold;
      margin-bottom: 10px;
      display: block;
    }
    .label{
      display: inline-block;
      width: 270px;
    }
    input[type="text"], input[type="password"]{
      width: 300px;
      margin-bottom: 5px;
      height: 20px;
    }
    input[type="radio"], input[type="checkbox"]{
      margin-right: 10px;
    }
    .radio-group{
      width: 300px;
      margin-bottom: 5px;
      height: 20px;
      display: inline-block;
    }
    input[type="submit"], input[type="reset"]{
      margin-top: 15px;
      height: 25px;
      width: 60px;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="banner">vung banner website</div>
    <div class="content">
      <div class="menu">
        <h4>Menu</h4>
        <p>Trang chủ</p>
        <p><a href="đăng ký.php">Đăng ký</a></p>
        <p><a href="đăng nhập.php">Đăng nhập</a></p>
      </div>
      <div class="form">
        <h2>Thông tin đăng ký</h2>

        <form method="post" action="xl.php">
          <label class="red-text">Thông tin tài khoản</label>
          <label for="email" class="label">Email</label>
          <input type="text" id="email" name="email" required><br>
          <label for="password" class="label">Password</label>
          <input type="Password" id="password" name="password" required><br>
          <label for="re-password" class="label">Nhập lại Password</label>
          <input type="Password" id="re-password" name="re-password" required><br>

          <label class="red-text">Thông tin cá nhân</label>
          <label for="name" class="label">Họ và tên</label>
          <input type="text" id="name" name="name" required><br>
          <label for="address" class="label">Địa chỉ</label>
          <input type="text" id="address" name="address" required><br>
          <label for="phone" class="label">Điện thoại</label>
          <input type="text" id="phone" name="phone" required><br>  
          <label for="gender" class="label">Giới tính</label>
          <div class="radio-group">
            <label for="gender">Nam</label>
            <input type="radio" name="gender" value="Nam" checked>
            <label for="gender">Nữ</label>
            <input type="radio" name="gender" value="Nữ">
          </div>
          <label for="habit" class="label">Sở thích</label>
          <div class="radio-group">
            <label for="habit">Thảo</label>
            <input type="checkbox" name="habit" value="Thảo">
            <label for="html">Trà Me</label>
            <input type="checkbox" name="habit" value="Trà Me">
            <label for="html">Húp</label>
            <input type="checkbox" name="habit" value="Nam">
          </div> </br>  
          <label class="label"></label>       
          <input type="submit" value="Đăng ký">
          <input type="reset" value="Làm lại">
        </form> 

      </div>
    </div>
  </div>
</body>
</html>