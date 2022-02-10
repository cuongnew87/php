<?php
$filename = str_replace(' ', '', $_FILES['image']["name"]);
$bannerpath = "image/" .$filename;
    header('Access-Control-Allow-Origin: *');
    if(move_uploaded_file($_FILES["image"]["tmp_name"], $bannerpath)) {
        echo json_encode(array("path" => $bannerpath));
    } else{
        echo json_encode(array("statusCode" => 200));
    }
?>
