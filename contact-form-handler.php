<!doctype html>
<html>
<head>
	<link rel="icon" 
      type="image/jpg" 
      href="images/favicon.jpg">
<meta charset="UTF-8">
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
</head>

<body>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<div class="topnav" id="myTopnav">
  <a href="/" class="active">Home</a>
  <a href="map.html">Map of Oregon landmines</a>
  <a href="submit.html">Submit a photo</a>
  <a href="contact.html">Write the poop fairy</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>

<div class="hero">
	<div class="container">
				<div class="h1"><h1>Waiting for the poop fairy</h1>
			 					<h6>Why do people leave bags of unattended dog waste along Oregon's trails?</h6>
				</div>
				<img src="images/bag1.jpg" alt="Waiting for the poop fairy"/></div>
</div>
<div class="content" align="center">
<h2>The poop fairy wants to hear your stories</h2>
	
<form method="post" name="contact_form"
action="contact-form-handler.php">
    <input type="text" name="name" size="30" placeholder="Your name"><br>
    <input type="text" name="email" size="30" placeholder="Your email address"><br>
    <textarea name="message" rows="8" cols="26"></textarea><br>
    <input type="submit" value="Submit">
	
</form>
</div>	
<div class="content" align="center">
<p>Feel free to submit your story of poor poop bag etiquette to <a href="mailto:poopfairyinoregon@gmail.com">poopfairyinoregon@gmail.com</a>.</p>
</div>
	<script language="JavaScript">
var frmvalidator  = new Validator("contactform");
frmvalidator.addValidation("name","req","Please provide your name");
frmvalidator.addValidation("email","req","Please provide your email");
frmvalidator.addValidation("email","email",
  "Please enter a valid email address");
</script>
</body>
</html>
<?php
$errors = '';
$myemail = 'poopfairyinoregon@gmail.com';//<-----Put Your email address here.
if(empty($_POST['name'])  ||
   empty($_POST['email']) ||
   empty($_POST['message']))
{
    $errors .= "\n Error: all fields are required";
}
$name = $_POST['name'];
$email_address = $_POST['email'];
$message = $_POST['message'];
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
" Here are the details:\n Name: $name \n ".
"Email: $email_address\n Message \n $message";
$headers = "From: $myemail\n";
$headers .= "Reply-To: $email_address";
mail($to,$email_subject,$email_body,$headers);
//redirect to the 'thank you' page
header('Location: contact-form-thank-you.html');
}
?>