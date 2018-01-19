<?php
    include 'init.php';
    if(isset($_POST['submit'])) {
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
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Vendor details</title>
    <?php require 'headerandfooter/header.php'; ?>
  </head>
  <body>


    <div class="row">
      <div class="col l3">
          <ul id="slide-out" class="side-nav fixed">
            <li><div class="user-view">
              <div class="background">
                <img src="images/bg.jpg">
              </div>
              <a href="#!user"><img class="circle" src="images/male.png"></a>
              <a href="#!name"><span class="white-text name">John Doe</span></a>
              <a href="#!email"><span class="white-text email">jdandturk@gmail.com</span></a>
            </div></li>
            <li><a href="#" onclick="changepassword()"> Change Password </a></li>
            <li>
              <ul class="collapsible collapsible-accordion">
                  <li>
                      <a class="collapsible-header waves-effect waves-blue" style="margin-left:15px" >User Profiles</a>
                      <div class="collapsible-body">
                          <ul >
                            <li><a href="#" onclick="adduser()"  style="margin-left:15px"> Add User</a></li>
                            <li><a href="#" onclick="deluser()" style="margin-left:15px">Delete User</a></li>
                            <li><a href="#" onclick="viewuser()"style="margin-left:15px"> View User</a></li>
                            <li><a href="#" onclick="modi_user()"style="margin-left:15px"> Modify User</a></li>
                          </ul>
                      </div>
                  </li>
              </ul>
            </li>
            <li><a href="#" onclick="add_web_image">WEB IMAGES</a></li>
            <li><a href="#!" class="waves-effect" onclick="addproduct()">Add Product</a></li>
            <li><a class="waves-effect" href="#!" onclick="addvendor()">Add Vendor</a></li>
            <li><a class="waves-effect" href="#!" onclick="searchvendor()">Search Vendor</a></li>
            <li><a class="waves-effect" href="../inventory_managment_portal/connection/logout.php">Logout</a></li>
          </ul>
      </div>

      <div id="content">



          <div class="col l9">

                          <!-- <h1>ADDING PRODUCT</h1> -->
                          <div class="">
                            <form class="" action="connection/addproduct.php" method="POST" enctype="multipart/form-data">
                              <div class="row">
                                 <div class="input-field col s6">
                                   <input id="product_code" type="text" name="pcode" class="validate" required>
                                   <label for="product_code">Product Code</label>
                                 </div>
                                 <div class="input-field col s6">
                                   <input id="product_name" type="text" name="pname" class="validate" required>
                                   <label for="product_name">Product Name</label>
                                 </div>
                               </div>
                               <div class="row">
                                  <div class="input-field col s6">
                                    <input id="email" type="text" name="gsm" class="validate" required>
                                    <label for="email">GSM</label>
                                  </div>
                                   <div class="input-field col s6 ">
                                     <input id="email" type="text" name="mou" class="validate" required>
                                     <label for="email">MOU</label>
                                   </div>
                                 </div>
                                 <div class="row">
                                    <div class="input-field col s6">
                                      <input id="email" type="text" name="oprice" class="validate" required>
                                      <label for="email">Price</label>
                                    </div>
                                     <div class="input-field col s6">
                                       <input id="email" type="text" name="sprice" class="validate" required>
                                       <label for="email">Sample price</label>
                                     </div>
                                </div>

                                <div class="row">
                                  <div class="input-field col s12">
                                    <textarea id="textarea1" class="materialize-textarea validate" name="pdesc" required></textarea>
                                    <label for="textarea1">Description</label>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col s12">
                                    <div class="file-field input-field">
                                      <div class="btn">
                                        <span>Choose File</span>
                                        <input type="file" id="image" name="image">
                                      </div>
                                      <div class="file-path-wrapper">
                                        <input class="file-path validate" type="text">

                                      </div>
                                  </div>
                                 </div>
                               </div>
                <div class="alert alert-error"><?= $_SESSION['message'] ?></div>
                              <input type="submit" name="submitproduct" value="submit" id="submit" class="waves-effect waves-light btn">


                            </form>

                          </div>
                        </div>
                      </div>

    </div>

    <script type="text/javascript">
    $(document).ready(function(){
         $('#submit').click(function(){
              var image_name = $('#image').val();
              if(image_name == '')
              {
                   alert("Please Select Image");
                   return false;
              }
              else
              {
                   var extension = $('#image').val().split('.').pop().toLowerCase();
                   if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)
                   {
                        alert('Invalid Image File');
                        $('#image').val('');
                        return false;
                   }
              }
         });
    });
    </script>
    <script>
    function addproduct(){
      $("#content").load("add_product.php");
    }
      function  changepassword(){
        $("#content").load("password_change.php");
      }
      function adduser(){
$("#content").load("add_user.php");
      }
      function addvendor(){
$("#content").load("vendor_form.php");
      }
      function searchvendor() {
$("#content").load("vendor_search.php");

      }
      function deluser(){

      }
      function viewuser(){

      }
      function addproduct(){
        $('#content').load("add_product.php");

      }
    </script>
  </body>
</html>
