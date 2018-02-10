<?php
require 'include/dbh.php';
// header('Content-Type: application/json');
$q = $_GET['q'];
$sql = "Select * from `serial` where product='$q'";
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_array($con);
$row = $result->fetch_assoc();
  $res1 =  $row['curr_serial'];
  echo $res1 + 1;
// echo $row;

console.log($row);
