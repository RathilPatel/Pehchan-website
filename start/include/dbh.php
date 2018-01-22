<?php
$con = mysqli_connect("localhost","root","sundaY05@","Pehchan");
$_SESSION['username'] = $usr;

if(!$con) {
    die("Connection Failed :" .mysqli_connect_error());
}
