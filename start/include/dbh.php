<?php
error_reporting(1);
$con = mysqli_connect("localhost","root","","Pehchan");

if(!$con) {
    die("Connection Failed :" .mysqli_connect_error());
}
