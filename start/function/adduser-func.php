<?php
require '../include/dbh.php';

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$password = md5($_POST['password']);
$role = $_POST['role'];
if(isset($_POST['submit'])) {
      echo "1 clear";
      $sql= "INSERT INTO `Inventory_login`(`Username`, `Password`, `email`, `Role`) VALUES ('$fname','$password','$email','$role')";
      echo "2 clear";
      $result = mysqli_query($con, $sql);
      $count = mysqli_affected_rows($con);
      if($count == 1) {
            echo '3 clear';
            header("Location: ../adduser.php?status=success");
        }
    }
    else {
         header("Location: ../adduser.php?status=fail");
}
