



function productupload(){
<?php
  $con = mysqli_connect("localhost", "root", "sundaY05@", "Pehchan");
       $photo = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
       $pcode = $_POST["pcode"];
       $pname = $_POST["pname"];
       $pdesc = $_POST["pdesc"];
       $sampleprice = $_POST["sprice"];
       $mou = $_POST["mou"];
       $price = $_POST["oprice"];
       $gsm = $_POST["gsm"];
       $sql = "INSERT INTO Products(product_id,product_name,description,image,sampleprice,mou,price,gsm) VALUES ('$pcode','$pname','$pdesc','$photo',$sampleprice,$mou,$price,$gsm)";
      if (mysqli_query($con,$sql)) {
        $_SESSION['message'] = "UPLOAD SUCCESSFUL";
      }
       else {
         $_SESSION['message'] = "FAILED";
       }
  else {
    $_SESSION['message'] = "NOT UPLOADED";
  }
}

  ?>
