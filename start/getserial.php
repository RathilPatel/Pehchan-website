<?php
require 'include/dbh.php';
header('Content-Type: application/json');
$serial = $_REQUEST['c1'];
$sql = "Select `curr_serial` from serial where product='$serial'";
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_array($result);
echo json_encode($row);

console.log($row);
?>
