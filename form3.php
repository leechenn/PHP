<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/css/bootstrap.css">
    <script src="/js/jquery-3.3.1.min.js"></script>
    <script src="/js/bootstrap.js"></script>
    <script src="/js/valid.js"></script>

    <title>Form</title>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-6">
    <form action="" method="post" id="userForm">
  <div class="form-group has-feedback">
    <label for="exampleInputEmail1" class="control-label">User:</label>
    <input type="text" class="form-control" name="user" placeholder="Enter User Name">
    <span class="glyphicon form-control-feedback"></span>

  </div>
  <div class="form-group has-feedback">
    <label for="exampleInputPassword1" class="control-label">Password:</label>
    <input type="password" class="form-control"  name="pwd" placeholder="Password">
    <span class="glyphicon form-control-feedback"></span>
  </div>
  <button type="submit" class="btn btn-primary" name="login" id="btn-ok">Submit</button>

</form>
</div>
</div>
</div>
    <?php
         if(!empty($_POST['user'])&&!empty($_POST['pwd'])){
           $userName = $_POST['user'];
           $userPwd = $_POST['pwd'];
           if($userName == 'ChenLi' && $userPwd == 'lc1993124'){
             ?>
             <script>
             console.log("true");
             location.href = "day1.php";

             </script>
             <?php
           }
           else{
             ?>
             <script>
             console.log("false");
             </script>
             <?php
           }
         }


    ?>

  </body>
</html>
