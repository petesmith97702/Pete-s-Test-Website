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
$sql = "SELECT * FROM `phonegtm` WHERE `key_id` = $query ";
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
<!-- Global site tag (gtag.js) - Google Ads: 788219647 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-788219647"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-788219647');
</script>

<script>
  gtag('config', 'AW-788219647/JQtYCNPy5YwBEP-N7fcC', {
    'phone_conversion_number': '541-223-4567'
  });
</script>

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
    <a href="http://bendplatform.com/G5/current.php">Current Iteration</a>
    <a href="http://bendplatform.com/G5/single.php">Single Domain Tests</a>
    <a href="http://bendplatform.com/G5/multi.php">Multi Domain Tests</a>
    <a href="http://bendplatform.com/G5/jsrx1.php">Current JSRX Test</a>
    <a href="http://bendplatform.com/G5/jsrx2.php">New JSRX Test</a>
    </nav>
  </div>
</div>

<div class="topnav" id="myTopnav">
  <span style="font-size:17px;cursor:pointer;color:#aaa;float:left;display:block;text-decoration:none;padding: 14px 16px" onclick="openNav()">&#9776;
</div>

<div class="content" align="center">
    <div class="testing-area">
  <h1>Phone Number Swap Demo</h1>
  <p>Get Phone Number From G5 Phone Service <span id="phone-from-g5" class="tel">Nothing Yet</span></p>
  <p>Dynamic Content Change <span id="dynamic-content-change" class="tel">541-223-4567</span></p>
  <p>Dash Format with preceding text in a span <span id="preceding-text" class="tel"><span>Tel: </span>541-223-4567</span></p>
  <p>Dash Format with bold tag around phone # <span id="dash-with-bold" class="tel"><span>Tel:</span><b>541-223-4567</b></span></p>
  <p>Dash Format with no additional html tags <span id="dash-no-html-tags" class="tel">Tel: 541-223-4567</span></p>
  <p>Dash format with spans<span id="dash-with-spans" class="tel">54<span>1</span>-2<span>2</span>3-4567</span></p>
  <p>Dash Format with no additional text <span id="dash-no-text" class="tel">541-223-4567</span></p>
  <p>Dash Format with no additional text and spans<span id="area-prefix-postfix" class="tel"><span>541</span><span>223</span><span>4567</span></span></p>
  <p>Phone Number on its own line:
    <span id="own-line" class="tel">
      541-223-4567
    </span>
  </p>
  <p>
    Break After closing tag:
    <span id="break-after-closing-tag" class="tel">541-223-4567
    </span>
  </p>
  <p>This shouldn't change <span id="tel1">(541)223-3333</span></p>
  <p>Dash Format with starting parens id target <span id="dash-starting-parens">(555)223-4567</span></p>
  <p>Dash Format and href switching <a id="dash-href" href="tel:541-223-4567">541-223-4567</a></p>
  <p>Near Neighbors - Same Text Node. Fax should not change.
    <span id="change-only-matching-numbers" class="tel">Phone: (541) 223-4567<br>Fax: (541) 223-1234</span>
  </p>
  <p>Dash Format and href switching <a id="partial-of-number-in-text" href="">I’ll have you know I graduated top of my class in the Navy Seals, and I’ve been involved in numerous secret raids on Al-Quaeda, and I have over 234 confirmed kills. I am trained in gorilla warfare and I’m the top sniper in the entire US armed forces. You are nothing to me but just another target</a></p>
  <p><a id="parens-with-space">(541) 223-4567</a></p>
  <p><a id="parens-surrounded-with-text">This is a test:  (541) 223-4567 and this is the end</a></p>
  <p><span id="non-breaking-hyphen">(541) 223‑4567</span></p>
</div>

<div>
  <h2>Add new container code here and submit to update the container used on this page</h2>
  <form action="http://bendplatform.com/G5/phonerefresh.php" method="post" enctype="multipart/form-data">
    <textarea name="post_gtm" id="post_gtm" cols="40" rows="10"></textarea><br>
    <input type="submit" name="Submit">
</form>
</div>
</div>

</body>
</html>