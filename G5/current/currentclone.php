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
        echo $row["current"];
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
  <h1>Here is the effect on a shared form page without a cpm code</h1><br>
  <div><p>This is the whitelisted phone number: <img src="http://bendplatform.com/G5/phone.png" alt="Whitelisted phone number"/></p></div>
  <div><p>This is the flipped phone number: 541-639-8518</p></div>

<div>
  <h2>This is an external link: <a href="https://www.getg5.com">GetG5.com</a></h2>
</div>
<div>
  <h2>This is an iFrame:</h2>
  <iframe src="http://bendplatform.com/G5/example.html" width="400" height="100"></iframe>
</div>
<br>
<div id="ajax">
  <h2>This is an AJAX form</h2>
<form id="ajax-contact" method="post" action="http://bendplatform.com/G5/mailer.php">
    <div class="field">
        <label for="name"><p>Name*:<input type="text" id="name" name="name" required></p></label>
    </div>

    <div class="field">
        <label for="email"><p>Email*: <input type="email" id="email" name="email" required></p></label>
    </div>

    <div class="field">
        <label for="message"><p>Message*: <textarea id="message" name="message" required></textarea></p></label>
    </div>

    <div class="field">
        <button type="submit">Click Me</button>
    </div>
</form>
</div>

<div>
  <h2>This is a standard form</h2>
  <form action="http://bendplatform.com/G5/submit.php" method="post" enctype="multipart/form-data">
    <input type="text" name="textfield">
    <input type="submit" value="Submit">
</form>
</div>
<div>
  <h2>This form generates an error</h2>
  <form action="http://bendplatform.com/G5/xxx.html" method="post" enctype="multipart/form-data">
    <input type="text" name="error">
    <input type="submit" name="Submit">
</form>
</div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="http://bendplatform.com/G5/app.js"></script>
</body>
</html>