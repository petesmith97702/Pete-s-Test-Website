<!doctype html>
<html>
<head>
    <link rel="icon" 
      type="image/jpg" 
      href="images/favicon.jpg">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Waiting for the poop fairy</title>
<link rel="fonts" href="https://use.typekit.net/ddo4dpu.css">
<link href="/styles.css" rel="stylesheet" type="text/css">
    <style>

    body {
        margin: 0px;
        background-color: 000;
    }

</style>
    <script src="script.js">
    
    </script>
	<link rel="icon" href="images/favicon.jpg" type="image/jpg" sizes="16x16">
</head>

<body>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<div id="myNav" class="overlay">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <div class="overlay-content">
    <nav>
    <a href="/">Blog</a>
    <a href="map.html">Map of Oregon landmines</a>
    <a href="submit.html">Submit a photo</a>
    <a href="contact.html">Write the poop fairy</a>
    </nav>
  </div>
</div>

<div class="topnav" id="myTopnav">
  <span style="font-size:17px;cursor:pointer;color:#aaa;float:left;display:block;text-decoration:none;padding: 14px 16px" onclick="openNav()">&#9776;</span>
  <div class="search-container">
    <form method="GET" action="search.php" id="searchform">
      <input type="text" placeholder="Search..." name="query">
      <button type="submit" value="Search"><i class="fa fa-search"></i></button></form></div>
</div>

<div class="hero">
    <div class="container">
                <div class="h1"><h1><a href="/">Waiting for the poop fairy</a></h1>
                                <h6>Why do people leave bags of<br>unattended dog waste along<br>Oregon's trails?</h6>
                </div>
                <img src="images/bag1.jpg" alt="Waiting for the poop fairy"/></div>
</div>
<div class="content" align="center">
<h2>Document this behavior in your city</h2>
    
<form action="upload.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
</form>
</div>  
<div class="content" align="center">
<p>Feel free to submit a photo of poor poop bag etiquette to <a href="mailto:poopfairyinoregon@gmail.com">poopfairyinoregon@gmail.com</a>.</p>
</div>
</body>
</html>
<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>