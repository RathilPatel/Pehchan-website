<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Pehchan- Inventory management</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
  <script type="text/javascript">
  function required()
  {
  var empt1 = document.forms["login-form"]["username"].value;
  var empt2 = document.forms["login-form"]["password"].value;
  if (empt1 == "" || empt2 == "")
  {
document.getElementById("error_message_on_login").innerHTML = "username/password cannot be in correct";
  return false;
  }
  else
  {
    // document.getElementById("login-form").action = "connection/login.php";
  return true;
  }
  }
  </script>
</head>

<body class="bg-dark">
<?php session_start(); 
          define("someUnguessableVariable", "anotherUnguessableVariable");

          if(isset($_SESSION['username']) && $_SESSION['username'] != ''){
            header ("Location: Dashboard.php");
            exit;
            }
else{
    ?>

  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Login</div>
      <div class="card-body">
        <form action="function/login.php" method="post">
          <div class="form-group">
            <label for="exampleInputEmail1">Username</label>
            <input class="form-control" type="text" name="username" value="" placeholder="Username" required>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input class="form-control" type="password" name="password" value="" placeholder="Password" required>

          </div>
            <input type="submit" class="btn btn-primary btn-block" name="submit" value="Login" class="btn-login">
          <div id="add_err"></div>
        </form>
        <div class="text-center">
          <a class="d-block small" href="forgot-password.html">Forgot Password?</a>
        </div>
      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="js/script.js"></script>
   <script type="text/javascript">
<?php } ?>
</body>
</html>