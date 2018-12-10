<!doctype php>
<html>
<head>
	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-120820601-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-120820601-1');
  gtag('set', {'user_id': 'USER_ID'}); // Set the user ID using signed-in user_id.

</script>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-NTPLMHJ');</script>
<!-- End Google Tag Manager -->

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Waiting for the poop fairy</title>
<link rel="fonts" href="https://use.typekit.net/ddo4dpu.css">
<link href="/styles.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>

    body {
        margin: 0px;
		background-color: white;
    }

</style>
	<script src="script.js">
	
	</script>
	<link rel="icon" href="images/favicon.jpg" type="image/jpg" sizes="16x16">
</head>

<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NTPLMHJ"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

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
<div class="content" align="center" id="myFeed">
  <form action="/" method="post" enctype="multipart/form-data">
    <input type="submit" value="View by most recent post" name="reload">
  </form>
<?php
$servername = "localhost";
$username = "petesmith";
$password = "G5test1996";
$dbname = "rants";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

$sql = "SELECT * FROM `stories` ORDER BY `key_id` ASC ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<article><date>" . $row["date"] . "</date>";
        echo "<h2>" . "<a href=" . $row["url"] . ">" . $row["headline"] . "</a>" . "</h2>";
        echo "<p>" . $row["story"] . "</p>";
        echo "<img class='blog-images' src=" . $row["pic"] . "alt='Why do people leave dog waste bags by Oregon trails?'/>";
        echo "<hr></article>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
</div>
<footer>
	<div class="bottom">
	<p><em>The poop fairy does not claim a copyright on any of the images on this site. They are displayed and reproduced as fair use to illustrate the public service of this website.</em></p>
		</div>
	<div class="bottom">
		<p><em>View our <a href="privacy.html">Privacy Policy</a></em></p>
		</div>
</footer>
</body>
</html>
