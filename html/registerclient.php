<?php

  require 'dbh.php';

$Type=$_POST['Type'];
$Name=$_POST['Name'];
$Address=$_POST['Address'];
$Pincode=$_POST['Pincode'];
$City=$_POST['City'];
$Typeofdealer=$_POST['Typeofdealer'];
$PANNumber=$_POST['PANNumber'];
$Contactperson=$_POST['Contactperson'];
$contact=$_POST['contact'];
$Email=$_POST['Email'];
$Bankname=$_POST['Bankname'];
$Accountno=$_POST['Accountno'];
$branchaddress=$_POST['branchaddress'];
$IFSC=$_POST['IFSC'];

// $Type='Type';
// $Name='Name';
// $Address='Address';
// $Pincode=546;
// $City='City';
// $Typeofdealer='Typeofdealer';
// $PANNumber='PANNumber';
// $Contactperson='Contactperson';
// $contact='contact';
// $Email='Email';
// $Bankname='Bankname';
// $Accountno=5161651;
// $branchaddress='branchaddress';
// $IFSC='IFSC';


  $sql= "INSERT into Client(Type,Name,Address,Pincode,City,Typeofdealer,PANNumber,Contactperson,contact,Email,Bankname,Accountno,branchaddress,IFSC)
  values ('$Type','$Name','$Address','$Pincode','$City','$Typeofdealer','$PANNumber','$Contactperson','$contact','$Email','$Bankname','$Accountno','$branchaddress','$IFSC');";
  mysqli_query($conn,$sql);
  if(mysqli_query($conn,$sql)>1){
        echo " Fail";
  }
  else {
    echo "success";
  }
mysql_close($conn);
  exit();


?>
