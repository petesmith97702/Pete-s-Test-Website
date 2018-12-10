<!doctype php>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Test environment for DA WOW</title>
</head>
<style>

    body {
        margin: 20px;
		background-color: white;
		float: center;
    }

</style>
</head>
<body>
<div class="content" align="center">
<?php
$servername = "localhost";
$username = "petesmith";
$password = "G5test1996";
$dbname = "rants";
$conn = new mysqli($servername, $username, $password, $dbname);
$c = mysqli_real_escape_string($conn, $_REQUEST["example_code"]);
$sql = "UPDATE `example` SET placeholder='$c' WHERE key_id=1";
if ($conn->query($sql) === TRUE) {
    echo "The form worked according to plan!";
}
else
{
    echo "ERROR: have Pete examine the database...";
}
?>
</div>
</body>
</html>