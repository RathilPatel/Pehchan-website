<?php
include 'init.php';

   $username=$_POST["username"];
   $password=$_POST["password"];
   $type= $_POST["type"];
   if(empty($username) == true || empty($password) == true)
    {
        $errors[] = 'You need to Enter Username and password';
    }
    if(empty($type) == true || $type == 100)
    {
        $errors[] = 'Select a Valid user type';
    }
 /*  elseif(user_exists($username,$type) == false )
    {

        $errors[] = 'User not Found';
    }*/
    else{
        $login = login($username,$password,$type);
        if($login == false){
            $errors[] =' The username/password combination is incorrect';
        }
        else{
         $_SESSION['username'] = $login;
                       header('Location: ../teachers_page.php');
     }
   }

      pri
