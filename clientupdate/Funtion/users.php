<?php
function adding_products(){

  include 'init.php';
  if(isset($_POST['Submit'])) {
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

      $sql = "INSERT INTO Product (`Product_Image`) VALUES ($file)";
      if(mysqli_query($con, $sql)) {
         echo '<script>alert("Image Inserted into Database")</script>';
      }
  }

}

?>
