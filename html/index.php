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
        <img height="45px" src="data:image/svg+xml;base64,PHN2ZyBpZD0iYjg0MWFkOGYtNjg3Yy00NTBkLWJkZWYtYTMyMmFkOTAzZjYzIiBkYXRhLW5hbWU9IkxheWVyIDIiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHZpZXdCb3g9IjAgMCAzMzEgMTk2Ij48ZGVmcz48c3R5bGU+LmViMTllYTgyLThhODQtNDA3Ni04ZWRiLWQ3M2JiODg2MWY1N3tmaWxsOnVybCgjYjIwNzk2M2UtZDQ2My00MDZlLTkxZTktZWQ1NDVjNWVlZGQ3KTt9PC9zdHlsZT48bGluZWFyR3JhZGllbnQgaWQ9ImIyMDc5NjNlLWQ0NjMtNDA2ZS05MWU5LWVkNTQ1YzVlZWRkNyIgeDE9IjE5My4wOCIgeTE9IjEwMC4yNSIgeDI9IjM0NS45MiIgeTI9IjM2NC45OCIgZ3JhZGllbnRVbml0cz0idXNlclNwYWNlT25Vc2UiPjxzdG9wIG9mZnNldD0iMCIgc3RvcC1jb2xvcj0iI2E2MjA2YSIvPjxzdG9wIG9mZnNldD0iMC4yNSIgc3RvcC1jb2xvcj0iI2VjMWM0YiIvPjxzdG9wIG9mZnNldD0iMC41IiBzdG9wLWNvbG9yPSIjZjE2YTQzIi8+PHN0b3Agb2Zmc2V0PSIwLjc1IiBzdG9wLWNvbG9yPSIjZjdkOTQ5Ii8+PHN0b3Agb2Zmc2V0PSIxIiBzdG9wLWNvbG9yPSIjMmY5Mzk1Ii8+PC9saW5lYXJHcmFkaWVudD48L2RlZnM+PHBhdGggY2xhc3M9ImViMTllYTgyLThhODQtNDA3Ni04ZWRiLWQ3M2JiODg2MWY1NyIgZD0iTTE3NSwxNjVIOTRhMy41LDMuNSwwLDAsMSwwLTdoODFhMy41LDMuNSwwLDAsMSwwLDdabTMwLjUsMTg1LjVBMy41LDMuNSwwLDAsMCwyMDIsMzQ3SDE0OGEzLjUsMy41LDAsMCwwLDAsN2g1NEEzLjUsMy41LDAsMCwwLDIwNS41LDM1MC41Wm04MS0xMzVBMy41LDMuNSwwLDAsMCwyODMsMjEySDIyOWEzLjUsMy41LDAsMCwwLDAsN2g1NEEzLjUsMy41LDAsMCwwLDI4Ni41LDIxNS41Wm04MSwxMzVBMy41LDMuNSwwLDAsMCwzNjQsMzQ3SDMxMGEzLjUsMy41LDAsMCwwLDAsN2g1NEEzLjUsMy41LDAsMCwwLDM2Ny41LDM1MC41Wm01NC0xODlBMy41LDMuNSwwLDAsMCw0MTgsMTU4SDMzN2EzLjUsMy41LDAsMCwwLDAsN2g4MUEzLjUsMy41LDAsMCwwLDQyMS41LDE2MS41Wk0xODIuNzYsMTc0LjI4YTMuNSwzLjUsMCwwLDAtMy41LTMuNUg5Ny42NWEzLjUsMy41LDAsMCwwLDAsN2g4MS42MUEzLjUsMy41LDAsMCwwLDE4Mi43NiwxNzQuMjhaTTE4Ny4zNCwxODhhMy41LDMuNSwwLDAsMC0zLjUtMy41SDEwMS41OGEzLjUsMy41LDAsMCwwLDAsN2g4Mi4yNkEzLjUsMy41LDAsMCwwLDE4Ny4zNCwxODhabTQuNzcsMTQuMjlhMy41LDMuNSwwLDAsMC0zLjUtMy41aC04M2EzLjUsMy41LDAsMCwwLDAsN2g4M0EzLjUsMy41LDAsMCwwLDE5Mi4xMSwyMDIuMzJabTQuMzMsMTNhMy41LDMuNSwwLDAsMC0zLjUtMy41SDEwOS4zOGEzLjUsMy41LDAsMCwwLDAsN2g4My41NkEzLjQ5LDMuNDksMCwwLDAsMTk2LjQ0LDIxNS4zM1ptNC42MywxMy44N2EzLjUsMy41LDAsMCwwLTMuNS0zLjVIMTEzLjM0YTMuNSwzLjUsMCwxLDAsMCw3aDg0LjIzQTMuNSwzLjUsMCwwLDAsMjAxLjA3LDIyOS4yWm0xOTcuMjksMTMuM2EzLjUsMy41LDAsMCwwLTMuNS0zLjVIMTE3LjE0YTMuNSwzLjUsMCwxLDAsMCw3SDM5NC44NkEzLjUsMy41LDAsMCwwLDM5OC4zNiwyNDIuNVpNMzAwLjIsMjI5LjJhMy41LDMuNSwwLDAsMC0zLjUtMy41SDIxNS4zYTMuNSwzLjUsMCwwLDAsMCw3aDgxLjRBMy40OSwzLjQ5LDAsMCwwLDMwMC4yLDIyOS4yWk0zOTQuNSwyNTZhMy41LDMuNSwwLDAsMC0zLjUtMy41SDEyMWEzLjUsMy41LDAsMCwwLDAsN0gzOTFBMy41LDMuNSwwLDAsMCwzOTQuNSwyNTZabS0zLjgzLDEzLjQyYTMuNSwzLjUsMCwwLDAtMy41LTMuNWwtMjYyLjM2LS4wN2gwYTMuNSwzLjUsMCwwLDAsMCw3bDI2Mi4zNS4wN2gwQTMuNSwzLjUsMCwwLDAsMzkwLjY3LDI2OS40MlptLTcuMzMsMTYuODlhMy41LDMuNSwwLDAsMCwwLTdsLTI1NC42NywwYTMuNSwzLjUsMCwxLDAsMCw3Wm0tMy44MywxMy4zOWEzLjUsMy41LDAsMCwwLDAtN2wtMjQ3LDBhMy41LDMuNSwwLDAsMCwwLDdabS0xMzMsOS43OUEzLjUsMy41LDAsMCwwLDI0MywzMDZIMTM2LjI4YTMuNSwzLjUsMCwxLDAsMCw3SDI0M0EzLjUsMy41LDAsMCwwLDI0Ni41MSwzMDkuNDlabS0xNCwxNEEzLjUsMy41LDAsMCwwLDIyOSwzMjBIMTQwLjI3YTMuNSwzLjUsMCwwLDAsMCw3SDIyOUEzLjUsMy41LDAsMCwwLDIzMi41NCwzMjMuNDZaTTIxOS4yLDMzNi44YTMuNSwzLjUsMCwwLDAtMy41LTMuNUgxNDQuMDlhMy41LDMuNSwwLDEsMCwwLDdIMjE1LjdBMy41LDMuNSwwLDAsMCwyMTkuMiwzMzYuOFpNNDE3Ljg1LDE3NC4yOGEzLjUsMy41LDAsMCwwLTMuNS0zLjVIMzMyLjc0YTMuNSwzLjUsMCwwLDAsMCw3aDgxLjYxQTMuNSwzLjUsMCwwLDAsNDE3Ljg1LDE3NC4yOFpNNDEzLjkyLDE4OGEzLjUsMy41LDAsMCwwLTMuNS0zLjVIMzI4LjE2YTMuNSwzLjUsMCwwLDAsMCw3aDgyLjI2QTMuNSwzLjUsMCwwLDAsNDEzLjkyLDE4OFptLTQuMDgsMTQuMjlhMy41LDMuNSwwLDAsMC0zLjUtMy41SDMyMy4zOWEzLjUsMy41LDAsMCwwLDAsN2g4Mi45NUEzLjUsMy41LDAsMCwwLDQwOS44NCwyMDIuMzJabS0zLjcyLDEzYTMuNSwzLjUsMCwwLDAtMy41LTMuNUgzMTkuMDZhMy41LDMuNSwwLDAsMCwwLDdoODMuNTZBMy41LDMuNSwwLDAsMCw0MDYuMTIsMjE1LjMzWm0tNCwxMy44N2EzLjUsMy41LDAsMCwwLTMuNS0zLjVIMzE0LjQzYTMuNSwzLjUsMCwwLDAsMCw3aDg0LjIzQTMuNSwzLjUsMCwwLDAsNDAyLjE2LDIyOS4yWm0tMjEuOSw4MC41MWEzLjUsMy41LDAsMCwwLTMuNS0zLjVIMjcwYTMuNSwzLjUsMCwwLDAsMCw3SDM3Ni43NkEzLjUsMy41LDAsMCwwLDM4MC4yNiwzMDkuNzFabS00LDE0YTMuNSwzLjUsMCwwLDAtMy41LTMuNUgyODRhMy41LDMuNSwwLDAsMCwwLDdoODguNzdBMy41LDMuNSwwLDAsMCwzNzYuMjcsMzIzLjY4Wk0zNzIuNDUsMzM3YTMuNSwzLjUsMCwwLDAtMy41LTMuNUgyOTcuMzRhMy41LDMuNSwwLDEsMCwwLDdIMzY5QTMuNSwzLjUsMCwwLDAsMzcyLjQ1LDMzN1oiIHRyYW5zZm9ybT0idHJhbnNsYXRlKC05MC41IC0xNTgpIi8+PC9zdmc+">
        <h4>Congratulations!</h4>
        <p>You have successfully deployed a <strong>docker</strong> container running our <strong>NGINX</strong> with <strong>PHP-FPM 7.x</strong> image</p>
        <p><strong>NGINX: </strong>v<?php echo $_ENV['NGINX_VERSION'] ?><br><strong>PHP-FPM: </strong>v<?php echo phpversion(); ?><br><strong>HOSTNAME: </strong><?php echo gethostname(); ?><br><strong>WEB ROOT: </strong><?php echo $_ENV['DOCUMENT_ROOT'] ?></p>
          <em>Thank you for using <a style="text-decoration:none" href="https://wyveo.com" target="_blank">wyveo.com</a></em>
      </div>
    </div>
  </div>

<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
</body>
</html>
