<!--
MIT License

Copyright (c) 2017 Muhammad Muzzammil (http://98.hol.es/)

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.
-->
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
