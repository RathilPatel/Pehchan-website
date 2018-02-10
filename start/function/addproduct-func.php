<?php
require '../include/dbh.php';
    $c1 = $_POST['c1'];
    $c2 = $_POST['c2'];
    $c3 = $_POST['c3'];
    // $c4 = $_POST['c4'];
    $c5 = $_POST['c5'];

    // $pcode1 = $c1 . $c2 . '-'. $c3 . '-' . $c4 . '-' . $c5;
        //$pcode = $pcode1;
        $pname = $_POST['pname'];
        $gsm = $_POST['gsm'];
        $moq = $_POST['moq'];
        $oprice = $_POST['oprice'];
        $sprice = $_POST['sprice'];
        $pdesc = $_POST['pdesc'];


 $sql= "SELECT `curr_serial` FROM `serial` WHERE product='$c1'";
      $result=mysqli_query($con,$sql);
       while($row = $result->fetch_assoc()) {
         $c4 = $row["curr_serial"];
       }
       $pcode = $c1 . $c2 . '-'. $c3 . '-' . $c4 . '-' . $c5;

                $c4=$c4+1;
        $sql1= "UPDATE `serial` SET `curr_serial`=$c4 WHERE product='$c1'";
mysqli_query($con,$sql1);  

    if(isset($_POST['submit'])) {

            $imagename=$_FILES["myimage"]["name"];
            $imagetmp=addslashes (file_get_contents($_FILES['myimage']['tmp_name']));

            $insert_image="INSERT INTO `Product` ('Product_Image') VALUES('$imagetmp')";

            mysqli_query($con,$insert_image);

$sql2="INSERT INTO `Product`(`Product_id`, `Product_Name`, `Description`, `Product_Image`, `Sample_price`, `MOQ`, `Product_Price`, `Remarks`) VALUES ('$pcode','$pname','$pdesc','$imagetmp','$sprice','$moq','$oprice','$gsm')";
        mysqli_query($con, $sql2);
        $count = mysqli_affected_rows($con);

        if($count == 1){
            header("Location: ../addproduct.php?status=success");
        }
    }
else{
    header("Location: ../addproduct.php?status=fail");
}
?>
