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
      display: none;
    }

  </style>
  <body>
    <div class="container">
      <h2>Thuộc tính của tập tin</h2>
        <label for="path" class="label-width">Tập tin :</label>
        <input type="text" id="path" name="path">
        <label for="file-upload" class="custom-file-upload">Browse</label>
        <input id="file-upload" type="file" onchange="changeFile(this)" accept="image/*" />
        <div style="width: 100%; display: flex;">
          <input type="submit" name="fSubmit" value="Thuộc tính của tập tin" onclick="getInfo()" />
        </div>
        <div id="info">
          <p id="name">Tên file: </p>
          <p id="type">Loại file: </p>
          <p id="size">Kích cỡ: </p>
        </div>
    </div>

    <script>
      let file = {};
      function changeFile(e){
        file = {name: e.files[0].name,
                type: e.files[0].type, 
                size: e.files[0].size
              };
        // var name = e.files[0].name;
        // file.type = e.files[0].type;
        // file.size = e.files[0].size;

        //Post image to server
        var form = new FormData();
        form.append("image", e.files[0]);

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
            console.log(result);
            var loc = window.location.pathname;
            var dir = loc.substring(0, loc.lastIndexOf('/'));
            document.getElementById("path").value = dir + "/" + result.path;
          }
        })
      }

      function getInfo(){
        document.getElementById("info").style.display = "block";
        document.getElementById("name").innerHTML = "Tên file: " + file.name;
        document.getElementById("type").innerHTML = "Kiểu file: " + file.type;
        document.getElementById("size").innerHTML = "Kích thước: " + file.size + "Kb";
      }
    </script>
  </body>
</html>
