<!doctype php>
<html>
<head>
<title>Test environment for DA WOW</title>
<link href="http://bendplatform.com/G5/styles.css" rel="stylesheet" type="text/css">
<link rel="fonts" href="https://use.typekit.net/ddo4dpu.css">
<link rel="icon" href="http://bendplatform.com/G5/favicon.ico" type="image/x-icon">
</head>
<body>
<div style="background-color:#000000">
<textarea cols="70" rows="30">
<?php
$servername = "localhost";
$username = "petesmith";
$password = "G5test1996";
$dbname = "rants";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

$sql = "SELECT * FROM `gtm` ORDER BY `key_id` DESC ";
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
</textarea>

</div>
</body>
</html>