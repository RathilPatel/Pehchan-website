<?php
require '../include/dbh.php';

        $pcode = $_POST['pcode'];
        $pname = $_POST['pname'];
        $gsm = $_POST['gsm'];
        $mou = $_POST['mou'];
        $oprice = $_POST['oprice'];
        $sprice = $_POST['sprice'];
        $pdesc = $_POST['pdesc'];
    if(isset($_POST['submitproduct'])) {
        $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
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
                       VALUES ("$pcode","$pname","$pdesc","$image","$pdesc","$file","$sprice","$mou","$oprice","$gsm")";
        if(mysqli_query($con, $sql)) {
        }
    }
?>
