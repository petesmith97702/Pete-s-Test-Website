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
<script src="http://bendplatform.com/G5/script.js"></script>
</head>
<body>

 <div id="page-wrapper">
    <h1>AJAX Contact Form Demo</h1>

    <div id="form-messages"></div>
    
    <form id="ajax-contact" method="post" action="http://bendplatform.com/G5/mailer.php">
      <div class="field">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
      </div>

      <div class="field">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
      </div>

      <div class="field">
        <label for="message">Message:</label>
        <textarea id="message" name="message" required></textarea>
      </div>

      <div class="field">
        <button type="submit">Send</button>
      </div>
    </form>
  </div>


  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
<script src="http://bendplatform.com/G5/app.js"></script>

</body>
</html>