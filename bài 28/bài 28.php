  <html>
  <head>
    <!-- Jquery  -->
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
  </head>
  <style>
    h2{
      text-transform: uppercase;
      color: #FFF;
      background-color: #339999;
      text-align: center;
    }
    .container{
      margin: 10px auto;
      width: 400px;
      background-color: #bbeedb;

    }
    .red-text{
      color: red;
    }
    .label-width{
      display: inline-block;
      margin: 5px 10px;
      min-width: 130px;
    }
    input[type=submit] {
      cursor: pointer;
      margin: 5px auto;
      border:1px solid black;
    }
    .result{
      background-color: #ffc9cf;
    }
    #info{
      width: 650px;
      margin: 0px auto;
      display: grid;
      justify-content: center;
      grid-gap: 10px;
    }
    select{
      width: 150px;
    }

  </style>
  <body>
    <div class="container">
      <h2>Xem thư mục ảnh</h2>
      <label for="folder" class="label-width">Chọn thư mục hình :</label>
      <select name="folder" id="folder">
        <?php
        foreach (array_filter(glob('image/*'), 'is_dir') as $dir){
          echo "<option value=". substr($dir, strpos($dir, "/") + 1) .">" . substr($dir, strpos($dir, "/") + 1) . "</option>";
        }
        ?>
      </select></br>
      <label for="size" class="label-width">Kích thước :</label>
      <select name="size" id="size">
        <option value="100">100 x 100</option>
        <option value="200">200 x 200</option>
        <option value="300">300 x 300</option>
      </select>
      <div style="width: 100%; display: flex">
        <input type="submit" name="fSubmit" value="Show image" onclick="getInfo()" />
      </div>       
    </div>
        <?php 

        if(isset($_GET['folder'])){
          echo "<div id='info'>";
          switch ($_GET['size']) {
            case 100:
              echo "<style>
                      #info{ grid-template-columns: auto auto auto auto auto auto; }
                      @media only screen and (max-width:850px) {
                        #info{
                          width: 100%;
                          grid-template-columns: auto auto auto auto auto;}}
                      @media only screen and (max-width:550px) {
                        #info{
                          width: 100%;
                          grid-template-columns: auto auto auto auto;}}
                    </style>";
              break;
            case 200:
              echo "<style>
                      #info{ grid-template-columns: auto auto auto; }
                      @media only screen and (max-width:750px) {
                        #info{
                          width: 100%;
                          grid-template-columns: auto auto;}}
                    </style>";
              break;
            case 300:
              echo "<style>
                      #info{ grid-template-columns: auto auto; }
                      @media only screen and (max-width:700px) {
                        #info{
                          width: 100%;
                          grid-template-columns: auto;}}
                    </style>";
              break;
            default:
              echo "<div id='info' style='grid-template-columns: auto auto auto auto auto auto;'>";
          }
          $folder = $_GET['folder'];
          foreach (array_filter(glob('image/'. $folder .'/*'), 'is_file') as $file){
            echo "<img src=". $file ." style='width:". $_GET['size'] ."px; height:". $_GET['size'] ."px; border:1px solid black'>";
          }
          echo "</div>";
        }

        ?>
  <script>
    function getInfo(){
      window.location.href = "bài 28.php?folder=" + document.getElementById('folder').value + "&size=" + document.getElementById('size').value;
    }
  </script>
</body>
</html>
