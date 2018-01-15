<?php
$con = mysqli_connect("localhost","root","sundaY05@","Pehchan");
$_SESSION['username'] = $usr;

if(!$con) {
    die("Connection Failed :" .mysqli_connect_error());
}

?>
<!-- "localhost","mypenynj_rathil","sundaY101","mypenynj_pehchan" -->
