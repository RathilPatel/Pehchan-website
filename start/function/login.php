<?php
require '../include/dbh.php';
if (isset($_POST['username']) and isset($_POST['password'])) {
    $username = $_POST['username'];
    $pass = $_POST['password'];
    $password = md5($pass);
    if(empty($username) == true || empty($password) == true) {
        $errors[] = 'You need to Enter Username and password';
    }
    else {
        $query = "SELECT * FROM `Inventory_login` WHERE Username='$username' and Password='$password'";
        $result = mysqli_query($con, $query);
        $count = mysqli_num_rows($result);



        if ($count == 1) {
              session_start();
            $_SESSION['username'] = $username;
             while($row = $result->fetch_assoc()) {
             $_SESSION['role'] = $row['Role'];
        }

            if(isset($_SESSION['username'])) {
                //$sDate = date("Y-m-d H:i:s");
                $sql = "insert into Session_details (`Username`) VALUES ('$username')";
                mysqli_query($con, $sql);
                header('Location: ../Dashboard.php?user=$username');
            }
        }
        else {
            header('Location: ../index.php?Login Failed');
            $Credentials = false;
            $errors[] = "Invalid Login Credentials.";
        }
    }
}

?>
