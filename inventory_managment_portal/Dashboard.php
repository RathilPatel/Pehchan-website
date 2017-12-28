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
            <li><a href="#!" onclick="changepassword()">Change Password</a></li>
            <li><a href="#!" onclick="adduser()">Add User</a></li>
            <li><a class="waves-effect" href="#!" onclick="addvendor()">Add Vendor</a></li>
            <li><a class="waves-effect" href="#!" onclick="searchvendor()">Search Vendor</a></li>
            <li><a class="waves-effect" href="../inventory_managment_portal/connection/logout.php">Logout</a></li>
          </ul>
      </div>
      <div id="content" style="background-image:url(images/background.jpg)">
      </div>
    </div>
    <script type="text/javascript">
      function changepassword(){
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
    </script>
  </body>
</html>
