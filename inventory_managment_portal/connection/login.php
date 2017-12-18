<?php
include 'init.php';

   $username=$_POST["username"];
   $pass=$_POST["password"];
   $password=md5($pass);
   if(empty($username) == true || empty($password) == true)
    {
        $errors[] = 'You need to Enter Username and password';
    }
    else{
        	$sql="SELECT COUNT(username) FROM Inventory_login where username='$username' AND password='$password'";
		$num_rows = mysqli_query($con,$sql);
        if(mysqli_num_rows($num_rows) == 1){
            $errors[] =' The username/password combination is incorrect';
        }
        else{
         $_SESSION['username'] = $login;
                       header('Location: ../succes.php');
     }
   }