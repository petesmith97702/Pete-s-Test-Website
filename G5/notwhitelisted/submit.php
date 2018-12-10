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
$sql = "SELECT * FROM `gtm` WHERE `key_id` = $query ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo $row["single"];
    }
} else {
    echo "0 results";
}
$conn->close();
?>
<!-- End Google Tag Manager -->
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>NOT WHITELISTED FORM PAGE</title>
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
	<h1>Your standard form submission worked</h1><br>

</div>

</body>
</html>
<?php
$errors = '';
$myemail = 'poopfairyinoregon@gmail.com';//<-----Put Your email address here.
if(empty($_POST['textfield']))
{
    $errors .= "\n Error: all fields are required";
}
$name = $_POST['textfield'];
$email_address = 'poopfairyinoregon@gmail.com';
if (!preg_match(
"/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i",
$email_address))
{
    $errors .= "\n Error: Invalid email address";
}

if( empty($errors))
{
$to = $myemail;
$email_subject = "Contact form submission: $name";
$email_body = "You have received a new message. ".
$headers = "From: $myemail\n";
$headers .= "Reply-To: $email_address";
mail($to,$email_subject,$email_body,$headers);
//redirect to the 'thank you' page
header('Location: http://bendplatform.com/G5/notwhitelisted/thankyou.php');
}
?>