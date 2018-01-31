<?php
require '../include/dbh.php';
    $c1 = $_POST['c1'];
    $c2 = $_POST['c2'];
    $c3 = $_POST['c3'];
    $c4 = $_POST['c4'];
    $c5 = $_POST['c5'];
    
    $pcode1 = $c1 . $c2 . '-'. $c3 . '-' . $c4 . '-' . $c5;
        $pcode = $pcode1;
        $pname = $_POST['pname'];
        $gsm = $_POST['gsm'];
        $moq = $_POST['moq'];
        $oprice = $_POST['oprice'];
        $sprice = $_POST['sprice'];
        $pdesc = $_POST['pdesc'];
    if(isset($_POST['submit'])) {
$imagename=$_FILES["myimage"]["name"]; 

//Get the content of the image and then add slashes to it 
$imagetmp=addslashes (file_get_contents($_FILES['myimage']['tmp_name']));

//Insert the image name and image content in image_table
/*$insert_image="INSERT INTO `Products` ('Product_Image') VALUES('$imagetmp')";

mysqli_query($con,$insert_image);*/

$sql="INSERT INTO `Product`(`Product_id`, `Product_Name`, `Description`, `Product_Image`, `Sample_price`, `MOQ`, `Product_Price`, `GSM`) VALUES ('$pcode','$pname','$pdesc','$imagetmp','$sprice','$moq','$oprice','$gsm')";
//                $sql = "INSERT INTO `Products`(`product_id`, `product_name`, `description`, `image`, `sampleprice`, `mou`, `price`, `gsm`)              
        $result = mysqli_query($con, $sql);
        $count = mysqli_affected_rows($con);
        
        if($count == 1){
            header("Location: ../addproduct.php?status=success");
        } 
    }
else{
    header("Location: ../addproduct.php?status=fail");
}
?>
