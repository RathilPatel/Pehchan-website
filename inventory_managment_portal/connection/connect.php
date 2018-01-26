<?php
$con = mysqli_connect("localhost","root","","Pehchan");
$_SESSION['username'] = $usr;

if(!$con) {
    die("Connection Failed :" .mysqli_connect_error());
}

?>
