<?php
require '../include/dbh.php'



if(isset($_POST['name'])|| isset($_POST['designation'])) {
  $tos =$_POST['tos'];
  $name = $_POST['name'];
  $designation=$_POST['designation'];
  $con1 = $_POST['con1'];
  $con2=$_POST['con2'];
  $cname = $_POST['cname'];
  $cdesc = $_POST['cdesc'];
  $email = $_POST['email'];
    
       $sql = "INSERT INTO `Company_Contact_Data`(`Name`, `Company_Name`, `Contact_no`, `email`, `Requirements`, `Priority`, `Description`)
        VALUES ('$name','$cname','$contact','$email','$req','$pri','$cdesc')";
        $result = mysqli_query($con,$sql);
        $count = mysqli_affected_rows($con);
    if(count == 1){
        
        header('Location: ../addclient.php?value=success');
    }
    else{
        echo 'failed inserting';
    }

}
else {
header('Location: ../addclient.php?value=failed');
}


 ?>
