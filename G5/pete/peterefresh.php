<!doctype php>
<html>
<head>

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

<div id="myNav" class="overlay">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <div class="overlay-content">
    <nav>
    <a href="http://bendplatform.com/G5/">Index page</a>
    <a href="http://bendplatform.com/G5/current.php">Current Iteration</a>
    <a href="http://bendplatform.com/G5/single.php">Single Domain Tests</a>
    <a href="http://bendplatform.com/G5/multi.php">Multi Domain Tests</a>
    </nav>
  </div>
</div>

<div class="topnav" id="myTopnav">
  <span style="font-size:17px;cursor:pointer;color:#aaa;float:left;display:block;text-decoration:none;padding: 14px 16px" onclick="openNav()">&#9776;</span>
</div>

<div class="content" align="center">
	<h1>The container updated according to plan</h1><br>
<?php
$servername = "localhost";
$username = "petesmith";
$password = "G5test1996";
$dbname = "rants";
$conn = new mysqli($servername, $username, $password, $dbname);
$c = mysqli_real_escape_string($conn, $_REQUEST["post_code"]);
$sql = "UPDATE `gtm` SET pete='$c' WHERE key_id=1";
if ($conn->query($sql) === TRUE) {
    echo "Your code has updated!";
}
else
{
    echo "ERROR: have Pete examine the database...";
}
//redirect to the 'submission' page
header('Location: http://bendplatform.com/G5/pete/');
?>

</div>

</body>
</html>