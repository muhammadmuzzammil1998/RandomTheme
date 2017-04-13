<html>
  <head>
    <title>Random Theme Color Generator</title>
    <?php
      $themecode = "#" . substr(uniqid(rand()), -6);
      echo '<meta name="theme-color" content="'. $themecode . '" />';
    ?>
    <style>
      body{
        background-color: <?php echo $themecode; ?>;
        font-family: sans-serif;
        font-size: 200%;
        text-align: center;
        padding-top: 20%;
        color: white;
        text-shadow: 0px 0px 8px rgba(0,0,0,0.5);
      }
      a{
        color: white;
        text-decoration: none;
      }
      a:hover{
        text-decoration: underline;
        cursor: pointer;
      }
      *{margin: 0;}
    </style>
  </head>
  <body>
    <h3>
      Current Theme color code: <?php echo $themecode; ?> <br /> <br />
      Used code:
      <code>
        <?php echo '&lt;meta name="theme-color" content="'.$themecode.'" / &gt;';?>
      </code>
      <br /><br /><br />
      <h5><a href="http://github.com/muhammadmuzzammil1998/RandomTheme">GitHub</a></h5>
    </h3>
  </body>
</html>
