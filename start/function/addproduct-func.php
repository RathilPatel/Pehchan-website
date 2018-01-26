<?php
require '../include/dbh.php';

        $pcode = $_POST['pcode'];
        $pname = $_POST['pname'];
        $gsm = $_POST['gsm'];
        $moq = $_POST['moq'];
        $oprice = $_POST['oprice'];
        $sprice = $_POST['sprice'];
        $pdesc = $_POST['pdesc'];
    if(isset($_POST['submit'])) {
$file = addslashes(file_get_contents($_FILES['image']['tmp_name']));
        if (is_writable($file)) {
            echo 'The file is writable';
        }
        else {
            echo 'The file is not writable';
        }
        $temp_file = tempnam(sys_get_temp_dir(), 'Tux');

        echo $temp_file;

        move_uploaded_file($file, '/home/shyamal/Pictures/upload');


                $sql = "INSERT INTO `Products`(`product_id`, `product_name`, `description`, `image`, `sampleprice`, `mou`, `price`, `gsm`)
                       VALUES ('$pcode','$pname','$pdesc','$file','$sprice','$moq','$oprice','$gsm')";
        $result = mysqli_query($con, $sql);
        $count = mysqli_affected_rows($con);
        
        if($count == 1){
            header("Location: ../addproduct.php");
        }
        
        
        
    }
else{
    echo 'failed to detect submit buttom';
}
?>
