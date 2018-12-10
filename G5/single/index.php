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
<title>Test environment for DA WOW</title>
<link href="http://bendplatform.com/G5/styles.css" rel="stylesheet" type="text/css">
<link rel="fonts" href="https://use.typekit.net/ddo4dpu.css">
<link rel="icon" href="http://bendplatform.com/G5/favicon.ico" type="image/x-icon">
<style>




</style>
<script src="http://bendplatform.com/G5/script.js"></script>
<!-- Facebook Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '2294801334134287');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=2294801334134287&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->

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
	<h1>Here is the effect of the new GTM container for a single domain client</h1><br>
  <div class="square-align">
  <div class="square" align="center"><div><h3>This outbound link is NOT whitelisted</h3><p><a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" target="_blank">Click me!</a></p></div></div><br>
  <div class="square" align="center"><div><h3>This iframe is NOT whitelisted</h3><iframe src="http://bendplatform.com/G5/notwhitelisted/example.php" width="180" height="180"></iframe></div></div><br>
  <div class="square" align="center"><div><h3>This standard form is NOT whitelisted (and neither is its "thank you page")</h3><form action="http://bendplatform.com/G5/notwhitelisted/submit.php" method="post" enctype="multipart/form-data">
    <input type="text" name="textfield">
    <input type="submit" value="NOT WHITELISTED FORM">
</form></div></div>
</div>
  <div><p><a href=
<?php
$servername = "localhost";
$username = "petesmith";
$password = "G5test1996";
$dbname = "rants";
$conn = new mysqli($servername, $username, $password, $dbname);
$query = 1; 
$sql = "SELECT * FROM `preview` WHERE `key_id` = $query ";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo '"' . $row["linkurl"] . '"';
    }
} else {
    echo "0 results";
}
$conn->close();
?> 
  target="_blank">Here is a link</a> that will load the latest GTM preview link.<br>
  </p></div>
	<div><p>This is the whitelisted phone number: <img src="http://bendplatform.com/G5/phone.png" alt="Whitelisted phone number"/></p></div>
	<div><p>This is the flipped phone number: 541-639-8518</p></div>
  <div><p>This is an internal link to confirm that flipped phone number remains: <a href="http://bendplatform.com/G5/single/singleclone.php">Clone page</a></p></div>
  <div><p>This is an internal link to a shared form below this directory: <a href="http://bendplatform.com/G5/sharedform/form.php">Shared form page</a></p></div>
<br>
<div>
	<h2>This is an external link: <a href="https://www.getg5.com" target="_blank">GetG5.com</a></h2>
</div>
<br>
<div>
	<h2>This is an iFrame:</h2>
	<iframe src="http://bendplatform.com/G5/example.html" width="400" height="100"></iframe>
</div>
<br>

    <h2>This is an AJAX form</h2>

    <div id="form-messages"></div>
    
    <form id="ajax-contact" method="post" action="http://bendplatform.com/G5/mailer.php">
      <div class="field">
        <label for="name"><p>Name:</label>
        <input type="text" id="name" name="name" required></p>
      </div>

      <div class="field">
        <label for="email"><p>Email:</label>
        <input type="email" id="email" name="email" required></p>
      </div>

      <div class="field">
        <label for="message"><p>Message:</label>
        <textarea id="message" name="message" required></textarea></p>
      </div>

      <div class="field">
        <button type="submit">Click Me!</button>
      </div>
    </form>
  </div>

<div class="content" align="center">
<div>
	<h2>This is a standard form</h2>
	<form action="http://bendplatform.com/G5/submit.php" method="post" enctype="multipart/form-data">
    <input type="text" name="textfield">
    <input type="submit" value="Submit">
</form>
</div>
<br>
<div>
	<h2>This form generates an error</h2>
	<form action="http://bendplatform.com/G5/xxx.html" method="post" enctype="multipart/form-data">
    <input type="text" name="error">
    <input type="submit" name="Submit">
</form>
</div>


<div>
  <h2>Add new container code here and submit<br>
  to update the container used on this page</h2>
  <form action="http://bendplatform.com/G5/single/singlerefresh.php" method="post" enctype="multipart/form-data">
    <textarea name="post_code" id="post_code" cols="40" rows="10"></textarea><br>
    <input type="submit" name="Submit">
</form>
</div>
<div>
<br>
<br>
<h2>This is the current container code:</h2>
<iframe src="http://bendplatform.com/G5/single/singleiframe.php" width="456" height="200"></iframe>
<br>
<br>
</div>



</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
<script src="http://bendplatform.com/G5/app.js"></script>
</body>
</html>