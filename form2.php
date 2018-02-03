<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>form</title>
    <style>
     #info .success{
       color:green;
     }
     #info .fail{
       color:red;
     }
    </style>
  </head>

  <body>
    <div id="info"></div>
    <form action="form2.php" method="post">
      <!--
      more safer
      more data
      refresh current page
    -->
      <p>
        UserName:<br>
        <input type = "text" name = "user">
      </p>
      <p>
        PassWord:<br>
        <input type="password" name="pwd">
      </p>
      <input type="submit" value="login" name="login">

    </form>
    <?php
    print_r($_POST);
    var_dump(isset($_POST['user']));
        if( isset( $_POST['user']) && isset( $_POST['pwd']) ){
          $userName = $_POST['user'];
          $userPwd=$_POST['pwd'];
          echo $userName.'----'.$userPwd."</br>";
          if($userName == "Chen" && $userPwd == "lc1993124"){

        ?>



            <script>
            document.getElementById('info').innerHTML="<span class='success'>success</span>";
            </script>

            <?php
          }else{
            ?>
            <script>
            document.getElementById('info').innerHTML="<span class='fail'>fail</span>";
            </script>
            <?php
          }
        }
     ?>
  </body>
</html>
