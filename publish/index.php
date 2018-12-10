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
<div class="content" align="center">
<h2>Time to smear something!</h2>
<p>Step 1: Let's upload a photo</p>	
<form action="blogpost.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <br>
    <input type="submit" value="Upload Image" name="submit">
</form>
<br>
<br>
<p><a href="blogpost.php">Proceed without image upload --></a></p>
</div>	
</body>
</html>
