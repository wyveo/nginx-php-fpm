<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta charset="utf-8">
  <title>Docker | wyveo/nginx-php-fpm</title>
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
  <link rel="stylesheet" href="css/normalize.min.css">
  <link rel="stylesheet" href="css/skeleton.min.css">

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
        <img height="45px" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIGRhdGEtbmFtZT0iTGF5ZXIgMSIgdmlld0JveD0iMCAwIDYyOS4yMiA2OTkuNSI+PHBhdGggZmlsbD0iI2ZmZiIgZD0iTTM0OS4yNSAxOS43NWMtMTkuMDUtMTEtNTAuMjMtMTEtNjkuMjggMGwtMjMzLjgzIDEzNWMtMTkgMTEtMzQuNjQgMzgtMzQuNjQgNjB2MjcwYzAgMjIgMTUuNTkgNDkgMzQuNjQgNjBsMjMzLjg2IDEzNWMxOSAxMSA1MC4yMyAxMSA2OS4yOCAwbDIzMy44My0xMzVjMTktMTEgMzQuNjQtMzggMzQuNjQtNjB2LTI3MGMwLTIyLTE1LjU5LTQ5LTM0LjY0LTYweiIvPjxwYXRoIGZpbGw9Im5vbmUiIHN0cm9rZT0iIzFmMWYxZiIgc3Ryb2tlLW1pdGVybGltaXQ9IjEwIiBzdHJva2Utd2lkdGg9IjIzIiBkPSJNMzQ5LjI1IDE5Ljc1Yy0xOS4wNS0xMS01MC4yMy0xMS02OS4yOCAwbC0yMzMuODMgMTM1Yy0xOSAxMS0zNC42NCAzOC0zNC42NCA2MHYyNzBjMCAyMiAxNS41OSA0OSAzNC42NCA2MGwyMzMuODYgMTM1YzE5IDExIDUwLjIzIDExIDY5LjI4IDBsMjMzLjgzLTEzNWMxOS0xMSAzNC42NC0zOCAzNC42NC02MHYtMjcwYzAtMjItMTUuNTktNDktMzQuNjQtNjB6Ii8+PHBhdGggZD0iTTE1Ni40MSAyNzIuNzJjLTIuOTQtMTYuMzItNy41MS0zNCAxNi0zNGgyMi41M2MyMi44NCAwIDI1Ljc4IDE3LjYzIDI2Ljc2IDI1Ljc5bDI0LjE1IDE0NC42aDJjMy45Mi0zNS4yNiAxOS4yNi0xMzMuNSAyMS4yMi0xNDQgMi4yOC0xNS42NyAzLjkyLTI2LjQ0IDI0LjgxLTI2LjQ0SDMzNWMyMC41NyAwIDIzLjUgMTggMjQuNDggMjYuNDQgMy4yNyAyNS40NiAxOCAxMjAuMTIgMjIuNTIgMTQ0LjI3aDJjMy41OS0zNC42IDE4LjI4LTEzNC40OCAxOS45MS0xNDQuNiAyLjYxLTE2IDMuOTItMjYuMTEgMjQuODEtMjYuMTFoMzJjMTYuMzIgMCAxNiAxNy42MyAxMy4wNSAzMi04LjE2IDM5LjE3LTMxLjY2IDEzOC43Mi0zNC45MiAxNTIuNDMtMy4yNiAxNi01Ljg4IDM3LjU0LTMzLjYyIDM3LjU0aC00MC41OGMtMTQuMzYgMC0yNi40My01Ljg4LTI4LjA2LTI0LjE2LTItMTctMTcuMzEtMTE1Ljg3LTIxLjg3LTE0MWgtMmMtNC4yNSAzNS45LTE3Ljk1IDEyMC4xMS0yMC44OSAxNDEuNjYtMi4yOSAxOC4yNy0xMy4wNiAyMy41LTI4LjA3IDIzLjVoLTQyLjA3Yy0yNC40OCAwLTI4LjcyLTE5LjU5LTMyLjMxLTMzLTMuOTItMTYuODUtMjguMzgtMTMxLjA5LTMyLjk3LTE1NC45MnoiLz48L3N2Zz4=">
        <h4>Congratulations!</h4>
        <p>You have successfully deployed a <strong>docker</strong> container running our <strong>NGINX</strong> with <strong>PHP-FPM 7.x</strong> image</p>
        <p><strong>NGINX: </strong>v<?php echo $_ENV['NGINX_VERSION'] ?><br><strong>PHP-FPM: </strong>v<?php echo phpversion(); ?><br><strong>LOADED CONFIG: </strong><?php echo php_ini_loaded_file(); ?><br><strong>WEB ROOT: </strong><?php echo $_ENV['DOCUMENT_ROOT'] ?><strong>HOSTNAME: </strong><?php echo gethostname(); ?><br></p>
          <em>Thank you for using <a style="text-decoration:none" href="https://wyveo.com" target="_blank">wyveo.com</a></em>
      </div>
    </div>
  </div>

<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
</body>
</html>
