<?php
include 'init.php';

/*   $username=$_POST["username"];
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
            $_SESSION['']
                       header('Location: ../succes.php');
     }
   }*/

if (isset($_POST['username']) and isset($_POST['password'])) {
    $username = $_POST['username'];
    $pass = $_POST['password'];
    $password = md5($pass);
    if(empty($username) == true || empty($password) == true) {
        $errors[] = 'You need to Enter Username and password';
    }
    else {
        $query = "SELECT * FROM `Inventory_login` WHERE Username='$username' and Password='$password'";
        $result = mysqli_query($con, $query) or die(mysqli_error($con));
        $count = mysqli_num_rows($result);

        if ($count == 1) {
            $_SESSION['username'] = $username;
            header('Location: ../succes.php');
        }
        else {
            header('Location: ../fail.php');
            $errors[] = "Invalid Login Credentials.";
        }
    }
}

?>
