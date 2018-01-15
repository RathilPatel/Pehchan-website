<?php

function adding_user(){
  require '../connection/init.php';

  $name = $_POST['fname'] . ' ' . $_POST['lname'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $passwordmd5=md5($password);
  $role = $_POST['group1'];


  $sql1="INSERT INTO `Inventory_login` (`Username`,`Password`,`email`,`role`) VALUES ('$name','$passwordmd5','$email','$role')";
  $result= mysqli_query($con,$sql1);
  $count = mysqli_num_rows($result);

  if ( $count == 1){
    header(Location: ../add_user.php);
  }


}

 ?>
