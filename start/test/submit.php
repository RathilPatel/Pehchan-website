<?php
// $con = mysqli_connect("localhost","root","sundaY05@","Pehchan");
// $_SESSION['username'] = $usr;
//
// if(!$con) {
//     die("Connection Failed :" .mysqli_connect_error());
// }



      //
      // $sql = "INSERT INTO `Company_Contact_Data`(`Name`, `Company_Name`, `Contact_no`, `email`, `Requirements`, `Priority`, `Description`)
      //  VALUES ('$name','$cname','$contact','$email','$req','$pri','$cdesc')";
      //  $result = mysqli_query($con,$sql);

        //  header('Location: success.php');
echo "string";
if(isset($_POST['name'])|| isset($_POST['designation'])) {
  $tos =$_POST['tos'];
  $name = $_POST['name'];
  $designation=$_POST['designation'];
  $con1 = $_POST['con1'];
  $con2=$_POST['con2'];
  $cname = $_POST['cname'];
  $cdesc = $_POST['cdesc'];
  $email = $_POST['email'];
  echo $tos $name $designation $con1 $con2 $cname $cdesc $email;

}
else {
    echo "not setting the value";
}


 ?>
