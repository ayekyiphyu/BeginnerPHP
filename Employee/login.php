

<!DOCTYPE html >
<?php 
session_start();

?>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Login</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/reset.css">
<link rel="stylesheet" href="css/style.css">
</head>
<body class="bg-light">
   
<div class="container p-5 mt-5">
   <div class="d-flex justify-content-end">
  <a href="login.php" class="pl-4 text-info font-weight-bold">Admin</a>
  <a href="employee-view-assign.php" class="pl-2 text-dark font-weight-bold">| Employee View</a>
</div>
  <form id="login-form" method="post" action="authen_login.php" >
    <div class="col-md-6 mx-auto border bg-white rounded mt-5">
    <h3 class="text-center text-white mt-4 title text-dark"> ログイン</h3>
    <!--dropdown-->
    <div class="form-group mt-3 p-3">
      <div class="form-group">
        <label for="admin_name" class="pb-2">User Name</label>
        <input type="text" name="admin_name" id="admin_name" class="form-control">
      </div>
      <div class="form-group">
        <label for="admin_pass">Password</label>
        <input type="password" name="admin_pass" id="admin_pass" class="form-control">
        </input>
      </div>
      <div class="col-md-7 mx-auto">
        <div class="row">
          <div class="col-md-6 ">
           
        <button type="submit" class="btn btn-primary" value="Submit"><i class="fa fa-sign-in" aria-hidden="true"></i> Login</button>  
        </div>
          <div class="col-md-6">
           <button type="reset" class="btn btn-danger" value="Reset"><i class="fa fa-undo" aria-hidden="true"></i> Reset</button>  
          </div>
        </div>
      </div>
    </div>
    
    <?php
          if(isset($_SESSION["error"])){
          $error = $_SESSION["error"];
                        echo "<span>$error</span>";
                    }
                ?>
  </form>
</div>
</div>
  <?php
    unset($_SESSION["error"]);
?>
</body>
</html>