<!doctype php>
<html>
<head>
<!-- Google Tag Manager -->
<?php
$servername = "localhost";
$username = "petesmith";
$password = "G5test1996";
$dbname = "rants";
$conn = new mysqli($servername, $username, $password, $dbname);
$query = 1; 
$sql = "SELECT * FROM `jsrx` WHERE `key_id` = $query ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo $row["gtm1"];
    }
} else {
    echo "0 results";
}
$conn->close();
?>
<!-- End Google Tag Manager -->

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Test environment for DA WOW</title>
<link href="http://bendplatform.com/G5/styles.css" rel="stylesheet" type="text/css">
<link rel="fonts" href="https://use.typekit.net/ddo4dpu.css">
<link rel="icon" href="http://bendplatform.com/G5/favicon.ico" type="image/x-icon">
<style>




</style>
<script src="http://bendplatform.com/G5/script.js">
</script>
</head>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5NXSPP"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<div id="myNav" class="overlay">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <div class="overlay-content">
    <nav>
    <a href="http://bendplatform.com/G5/">Index page</a>
    <a href="http://bendplatform.com/G5/adlinks.php">Ad Links</a>
    <a href="http://bendplatform.com/G5/current/">Current Iteration</a>
    <a href="http://bendplatform.com/G5/single/">Single Domain Tests</a>
    <a href="http://bendplatform.com/G5/multi/">Multi Domain Tests</a>
    <a href="http://bendplatform.com/G5/jsrx1.php">Current JSRX Test</a>
    <a href="http://bendplatform.com/G5/jsrx2.php">New JSRX Test</a>
    <a href="http://bendplatform.com/G5/previewlink.php">Add preview link</a>
    </nav>
  </div>
</div>

<div class="topnav" id="myTopnav">
  <span style="font-size:17px;cursor:pointer;color:#aaa;float:left;display:block;text-decoration:none;padding: 14px 16px" onclick="openNav()">&#9776;</span>
</div>

<div class="content" align="center">
	<h1>Here is the current JSRX result:</h1><br>
	<div><p>This is the whitelisted phone number: <img src="phone.png" alt="Whitelisted phone number"/></p></div>
	<div><p>This is the flipped phone number: 
<?php
$servername = "localhost";
$username = "petesmith";
$password = "G5test1996";
$dbname = "rants";
$conn = new mysqli($servername, $username, $password, $dbname);
$query = 1; 
$sql = "SELECT * FROM `jsrx` WHERE `key_id` = $query ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo $row["phone1"];
    }
} else {
    echo "0 results";
}
$conn->close();
?>
</p></div>

<div>
  <h2>Add new phone number html to affect the whitelisted phone number used on this page</h2>
  <form action="http://bendplatform.com/G5/jsrx1arefresh.php" method="post" enctype="multipart/form-data">
    <textarea name="post_phone" id="post_phone" cols="40" rows="10"></textarea><br>
    <input type="submit" name="Submit">
</form>
</div>

<div>
  <h2>Add new container code here and submit to update the container used on this page</h2>
  <form action="http://bendplatform.com/G5/jsrx1brefresh.php" method="post" enctype="multipart/form-data">
    <textarea name="post_gtm" id="post_gtm" cols="40" rows="10"></textarea><br>
    <input type="submit" name="Submit">
</form>
</div>
</div>

</body>
</html>