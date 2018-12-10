<!doctype php>
<html>
<head>
<link rel="icon" 
      type="image/jpg" 
      href="http://bendplatform.com/images/favicon.jpg">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Waiting for the poop fairy</title>
<link rel="fonts" href="https://use.typekit.net/ddo4dpu.css">
<link href="http://bendplatform.com/styles.css" rel="stylesheet" type="text/css">
	<style>

    body {
        margin: 0px;
		background-color: white;
    }

</style>
	<script src="http://bendplatform.com/script.js">
	
	</script>
	<link rel="icon" href="http://bendplatform.com/images/favicon.jpg" type="image/jpg" sizes="16x16">
</head>

<body>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<div id="myNav" class="overlay">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <div class="overlay-content">
    <nav>
    <a href="http://bendplatform.com/">Blog</a>
    <a href="http://bendplatform.com/map.html">Map of Oregon landmines</a>
    <a href="http://bendplatform.com/submit.html">Submit a photo</a>
    <a href="http://bendplatform.com/contact.html">Write the poop fairy</a>
    </nav>
  </div>
</div>

<div class="topnav" id="myTopnav">
  <span style="font-size:17px;cursor:pointer;color:#aaa;float:left;display:block;text-decoration:none;padding: 14px 16px" onclick="openNav()">&#9776;</span>
  <div class="search-container">
    <form method="GET" action="http://bendplatform.com/search.php" id="searchform">
      <input type="text" placeholder="Search..." name="query">
      <button type="submit" value="Search"><i class="fa fa-search"></i></button></form></div>
</div>

<div class="hero">
  <div class="container">
        <div class="h1"><h1><a href="http://bendplatform.com/">Waiting for the poop fairy</a></h1>
                <h6>Why do people leave bags of<br>unattended dog waste along<br>Oregon's trails?</h6>
        </div>
				<img src="images/bag1.jpg" alt="Waiting for the poop fairy"/></div>
</div>
<div class="content" align="left">
<keyred> 
<?php
$target_dir = "http://bendplatform.com/uploads/";
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
</keyred> 
<br>
<section float="left">
<h2>Time to smear something!</h2>
<p>Step 2: Publish a story with a date, headline, story, image and unique url</p>	
<form action="finished.php" method="post" id="submission" enctype="multipart/form-data">
    Select publish date:<br>
    <input type="text" name="post_date" id="post_date"><br><br>
    Headline:<br>
    <input type="text" name="post_headline" id="post_headline" size="40"><br><br>
    Story:<br>
    <textarea name="post_story" id="post_story" cols="40" rows="10"></textarea><br><br>
    Image link: (make sure add new image file name to this example url: "http://bendplatform.com/uploads/example.jpg" )<br>
    <input type="text" name="post_pic" id="post_pic" size="40"><br><br>
    Story url: (make sure to increase this key_id by one: 
<keyred>    
<?php
$servername = "localhost";
$username = "petesmith";
$password = "G5test1996";
$dbname = "rants";
$conn = new mysqli($servername, $username, $password, $dbname);
$sql = "SELECT * FROM `stories` ORDER BY `key_id` DESC ";
$result = $conn->query($sql);
echo "$result->num_rows";
$conn->close();
?>
</keyred>
<br>
And change it in this example url: "http://bendplatform.com/story.php?key_id=4" )<br>
    <input type="text" name="post_url" id="post_url" size="60"><br><br>
    <input type="submit" value="Submit">
</form>
</section>
</div>	

</body>
</html>
