<?php
    require 'connect.php';
    
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['Submit'])) {
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $email = $_POST['email'];
        $message = $_POST['message']; 
    
    
        $sql = "INSERT INTO Contact (`First_Name`, `Last_Name`, `email`, `Message`) VALUES ('$first_name','$last_name','$email','$message')";
        mysqli_query($con, $sql);   
        
    }
}
    

    
?>
