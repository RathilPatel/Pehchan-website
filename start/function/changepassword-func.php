<?php 
    require '../include/dbh.php';

    
  
        //   $oldpass = $_POST['oldpassword'];
            $newpass = $_POST['newpassword'];
            $conpass = $_POST['conpassword'];
          // $oldpassmd5 = md5($oldpass);
            $newpassmd5 = md5($newpass);      
           
            
            if($newpass == $conpass){
                session_start();
                $user=$_SESSION['username'];
                $sql = "UPDATE `Inventory_login` SET `Password`='$newpassmd5' WHERE `Username`='$user' ";
                $result = mysqli_query($con,$sql);
                $count = mysqli_affected_rows($con);
                if($count == 1)
                {
                      echo "Password Changed Successfull";
                  
                }

            }
            else{
         
              echo  "Failed to update password";
            }



