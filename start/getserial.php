<?php
require 'include/dbh.php';
header('Content-Type: application/json');
$q = intval($_GET['q']);
$sql = "Select `curr_serial` from serial where product='JC'";
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_array($result);
while($row=result->fetch_assoc()){
  $res1= $row['curr_serial'];
  $res1= $res1 + 1;
  echo $res1;
}
// echo $row;
mysqli_close($con);

console.log($row);
?>
