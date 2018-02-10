<?php
 $con = mysqli_connect("localhost","mypenynj_rathil","sundaY101","mypenynj_pehchan");
// $_SESSION['username'] = $usr;

if(!$con) {
    die("Connection Failed :" .mysqli_connect_error());
}


   $name = $_POST['name'];
   $contact = $_POST['contact'];
   $cname = $_POST['cname'];
   $req = $_POST['req'];
   $cdesc = $_POST['cdesc'];
   $email = $_POST['email'];
   $pri = $_POST['priority'];
       $sql = "INSERT INTO `Company_Contact_Data`(`Name`, `Company_Name`, `Contact_no`, `email`, `Requirements`, `Priority`, `Description`)
        VALUES ('$name','$cname','$contact','$email','$req','$pri','$cdesc')";
        $result = mysqli_query($con,$sql);

          header('Location: success.php');




// <!-- "localhost","mypenynj_rathil","sundaY101","mypenynj_pehchan" -->
// echo "string";
