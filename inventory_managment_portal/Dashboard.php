


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
            <li><a href="#!" class="waves-effect" onclick="addproduct()">Add Product</a></li>
            <li><a class="waves-effect" href="#!" onclick="addvendor()">Add Vendor</a></li>
            <li><a class="waves-effect" href="#!" onclick="searchvendor()">Search Vendor</a></li>
            <li><a class="waves-effect" href="../inventory_managment_portal/connection/logout.php">Logout</a></li>
          </ul>
      </div>

      <div id="content">


      </div>
    </div>

    <script>
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
