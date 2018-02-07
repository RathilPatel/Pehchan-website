<?php>
require '../include/dbh.php';

$serial = $_GET['c1'];
$sql = mysqli_query($con,"select curr_serial from serial where curr_serial = '".$serial."' ");
$row = mysqli_fetch_array($sql);
echo $row['curr_serial'];
?>