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
	<h2>Add the most recent GTM preview link here:</h2><br>
	<form action="http://bendplatform.com/G5/previewlinkrefresh.php" method="post" enctype="multipart/form-data">
    <textarea name="post_preview" id="post_preview" cols="40" rows="10"></textarea><br>
    <input type="submit" name="Submit">
</form>
</div>


</body>
</html>