    <?php
  session_start();
  ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Pehchan Inventory Management</title>
    <link rel="stylesheet" href="master.css">
    <link rel="stylesheet" href="font-awesome.css">
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
  <body>
      <?php
          define("someUnguessableVariable", "anotherUnguessableVariable");

          if(isset($_SESSION['username']) && $_SESSION['username'] != ''){
            header ("Location: vendor_detail_form.php");
            exit;
           }
  else {
  ?>
    <div class="container">
      <img src="images/man.png" alt="man login icon">
      <form class="" name="login-form" onsubmit="required()" action="connection/login.php" method="post">
    <div class="form-input">
          <input type="text" name="username" value="" placeholder="Username">
    </div>
    <div class="form-input">
      <input type="password" name="password" value="" placeholder="password">
    </div>
    <span id="error_message_on_login"></span>
    <br>
    <input type="submit" name="submit" value="Login" class="btn-login"><br><br>
    <a href="#">Forget Password?</a>
      </form>
    </div>
  </body>
</html>
<?php } ?>
