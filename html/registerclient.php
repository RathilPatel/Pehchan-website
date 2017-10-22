<?php

  require 'dbh.php';

$Type=$_POST[''];
$Name=$_POST[''];
$Address=$_POST[''];
$Pincode=$_POST[''];
$City=$_POST[''];
$Typeofdealer=$_POST[''];
$PANNumber=$_POST[''];
$Contactperson=$_POST[''];
$contact=$_POST[''];
$Email=$_POST[''];
$Bankname=$_POST[''];
$Accountno=$_POST[''];
$branchaddress=$_POST[''];
$IFSC=$_POST[''];
if (empty($fname) ||empty($lname) || empty($email) || empty($message)) {
  echo "values not input";
  exit();
}
else {
  $sql= "INSERT into Client(Type,Name,Address,Pincode,City,Typeofdealer,PANNumber,Contactperson,contact,Email,Bankname,Accountno,branchaddress,IFSC)
  values ($Type,$Name,$Address,$Pincode,$City,$Typeofdealer,$PANNumber,$Contactperson,$contact,$Email,$Bankname,$Accountno,$branchaddress,$IFSC);";
  mysqli_query($conn,$sql);
  echo " successs";
  exit();
}


?>
