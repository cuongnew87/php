  <html>
  <head>
    <!-- Jquery  -->
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
  </head>
  <style>
    h2{
      text-transform: uppercase;
      color: #FFF;
      background-color: #ff5f55;
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
      margin: 5px 10px;
    }
    input[type=submit] {
      cursor: pointer;
      margin: 5px auto;
      border:1px solid black;
    }
    .result{
      background-color: #ffc9cf;
    }
    input[type="file"] {
      display: none;
    }
    .custom-file-upload {
      border: 1px solid #ccc;
      display: inline-block;
      padding: 0px 12px;
      cursor: pointer;
    }
    #info{
      margin-left: 10px;
      display: flex;
    }
    select{
      width: 150px;
    }
    img{
      width: 200px;
      margin: 0px auto;
    }

  </style>
  <body>
    <div class="container">
      <h2>Thuộc tính của tập tin</h2>
      <label for="path" class="label-width">Tập tin :</label>
      <select name="fileName" id="fileName">
        <?php
        foreach (array_filter(glob('image/*'), 'is_file') as $file){
          echo "<option value=". substr($file, strpos($file, "/") + 1) .">" . substr($file, strpos($file, "/") + 1) . "</option>";
        }
        ?>
      </select>
      <label for="file-upload" class="custom-file-upload">Browse</label>
      <input id="file-upload" type="file" onchange="changeFile(this)" accept="image/*" multiple />
      <div style="width: 100%; display: flex;">
        <input type="submit" name="fSubmit" value="Show image" onclick="getInfo()" />
      </div>       
      <div id="info">
        <?php 
        if(isset($_GET['name'])){
          $result = $_GET['name'];
          echo '<img src="image/'.$result.'">'; 
        }
        ?>
      </div>
    </div>

    <script>
      function changeFile(e){
        //Post image to server
        for(var i = 0; i < e.files.length; i++){
          var form = new FormData();
          form.append("image", e.files[i]);

        //Post image to server
        $.ajax({
          type: "POST",
          url: "upload.php",
          processData: false,
          mimeType: "multipart/form-data",
          contentType: false,
          data: form,
          success: function(response) {
            let result = JSON.parse(response);
          }
        })
        select = document.getElementById('fileName');
        var opt = document.createElement('option');
        opt.value = e.files[i].name;
        opt.innerHTML = e.files[i].name;
        select.appendChild(opt);
        console.log(e.files[i].name);
      }
    }

    function getInfo(){
      window.location.href = "bài 27.php?name=" + document.getElementById('fileName').value;
      console.log(document.getElementById('fileName').innerHTML);
    }
  </script>
</body>
</html>
