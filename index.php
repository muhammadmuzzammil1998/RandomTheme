<html>
  <head>
    <title>RandomTheme</title>
    <?php
      $themecode = "#" . substr(uniqid(rand()), -6); //main code.
      echo '<meta name="theme-color" content="'. $themecode . '" />';
    ?>
  </head>
  <body>
    Your Body...
  </body>
</html>
