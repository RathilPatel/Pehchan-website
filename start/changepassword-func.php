<?php
    require '../include/dbh.php';



            $oldpass = $_POST['oldpassword'];
            $newpass = $_POST['newpassword'];
            $conpass = $_POST['conpassword'];
            $oldpassmd5 = md5($oldpass);
            $newpassmd5 = md5($newpass);

            if($newpass == $conpass){
                session_start();
                $user=$_SESSION['username'];
                $sql = "UPDATE `Inventory_login` SET `Password`=$newpassmd5 WHERE `Username=$user";
                $result = mysqli_query($con,$sql);
                $count = mysqli_affected_rows($con);
                if($count == 1){
                    $data = "succes changing password";
                    echo json_encode(data);
                // header("Location: ../changpassword.php?status= success");
                }

            }
            else{
              $data = "failed in updating password";
              echo json_encode(data);
                // header("Location: ../changepassword.php?status= new password doesnot match");
            }
