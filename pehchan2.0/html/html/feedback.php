<?php

  require 'dbh.php';

$fname=mysqli_real_escape_string($conn,$_POST['first_name']);
$lname=mysqli_real_escape_string($conn,$_POST['last_name']);
$email=mysqli_real_escape_string($conn,$_POST['email']);
$message=mysqli_real_escape_string($conn,$_POST['message']);
if (empty($fname) ||empty($lname) || empty($email) || empty($message)) {
  echo "values not input";
}
else {
  $sql= "INSERT into feedback(Firstname,Lastname,Email,Message) values ('$fname','$lname','$email','$message');";
  mysqli_query($conn,$sql);
  echo " successs";
  exit();
}

// phpmail($email,"feedback Successfull",THANK YOU FOR YOU FEEDbACK WE WILL GET WITH YOU","rathilvasani@gmail.com");

?>
