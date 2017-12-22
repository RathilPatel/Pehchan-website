<?php
$con = mysqli_connect("server242.web-hosting.com","mypenynj_rathil","123456789","mypenynj_pehchan");
$_SESSION['username'] = $usr;

if(!$con){


    die("Connection Failed :" .mysqli_connect_error());
}

?>
