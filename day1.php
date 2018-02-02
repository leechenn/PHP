<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>The first php programming</title>
    <script type="text/javascript">
    window.onload = function(){
      var oBtn = document.getElementById("btn");
      var oTxt = document.getElementById("txt");
      oBtn.onclick = function(){
        oTxt.value = "content has been changed";
      }
    }
    </script>
  </head>
  <body>
    <p><?php echo "hello world" ?></p>
    <input type="text" id="txt" value="<?php echo "have not changed"?>"></br>
    <input type="button" value="modify" id="btn">
    <?php
    $str = "This is a String"." ADD something";
    //. qual +

     var_dump($str);
     //The var_dump() function is used to display structured information (type and value) about one or more variables.
    echo $str;
    //heredoc
    $str1 = <<< HTML
     <h3>php is not difficult</h3>
     <h3>php is not difficult</h3>
     <h3>php is not difficult</h3>
HTML;
     $str2 = "<h1>php is not easy</h1>";

      echo $str2
     ?>

  </body>
</html>
