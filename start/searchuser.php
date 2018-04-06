
<!DOCTYPE html>
<html lang="en">

<?php require 'include/headerandfooter/header.php';
    require 'include/session.php';
?>
<title>Inventory Management</title>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
<?php require 'include/sidenav.php'; ?>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Users</a>
        </li>
        <!-- <li class="breadcrumb-item active"></li> -->
      </ol>

      <br /><br />
      <div class="container" style="width:900px;">
       <h3 align="center">User Database</h3>
       <br />
       <div align="right">
        <!-- <button type="button" name="add" id="add" class="btn btn-success">Add</button> -->
       </div>
       <br />
       <div id="user_data">

       </div>
      </div>


      <script>
      $(document).ready(function(){

       fetch_data();

       function fetch_data()
       {
        var action = "fetch";
        $.ajax({
         url:"function/action.php",
         method:"POST",
         data:{action:action},
         success:function(data)
         {
          $('#user_data').html(data);
         }
        })
       }

       $(document).on('click', '.delete', function(){
        var Username = $(this).attr("id");
        var action = "delete";
        if(confirm("Are you sure you want to remove this user from database?"))
        {
         $.ajax({
          url:"function/action.php",
          method:"POST",
          data:{Username:Username, action:action},
          success:function(data)
          {
           alert(data);
           fetch_data();
          }
         })
        }
        else
        {
         return false;
        }
       });
      });
      </script>
  <?php require 'include/headerandfooter/footer.php'; ?>
