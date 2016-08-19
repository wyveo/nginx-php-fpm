<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta charset="utf-8">
  <title>Docker | NGINX + PHP-FPM 7</title>
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Mobile Specific Metas
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- FONT
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

  <!-- CSS
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/skeleton.css">

  <!-- Favicon
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="icon" type="image/png" href="images/favicon.png">

</head>
<body>

  <!-- Primary Page Layout
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <div class="container">
    <div class="row">
      <div class="one-half column" style="margin-top: 25%">
        <img src="data:image/png;base64,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">
        <h4>Congratulations!</h4>
        <p>This page is being served from a <strong>docker</strong> container running Nginx and PHP-FPM 7.x</p>
        <p><strong>NGINX: </strong>v<?php echo $_ENV['NGINX_VERSION'] ?><br><strong>PHP: </strong>v<?php echo phpversion(); ?></p>
          <em>Thank you for using <a style="text-decoration:none" href="https://wyveo.com" target="_blank">wyveo.com</a></em>
      </div>
    </div>
  </div>

<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
</body>
</html>
