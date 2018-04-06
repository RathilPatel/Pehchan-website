<!DOCTYPE html>
<html lang="en">

<?php require 'include/headerandfooter/header.php'; require 'include/dbh.php'; require 'include/session.php'; ?>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
<?php require 'include/sidenav.php'; ?>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Products</a>
        </li>
        <li class="breadcrumb-item active">Search Product</li>
      </ol>

             <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Data Table Example</div>
        <div class="card-body">
          <div class="table-responsive">
          
                           <div id="user_data">

      			 </div>
            
            </table>
          </div>
        </div>
  
      </div>

  
      </div>


      <script>
      $(document).ready(function(){

       fetch_data();

       function fetch_data()
       {
        var action = "fetch";
        $.ajax({
         url:"function/searchproduct-func.php",
         method:"POST",
         data:{action:action},
         success:function(data)
         {
          $('#user_data').html(data);
         }
        })
       }

       $(document).on('click', '.delete', function(){
        var Product_id = $(this).attr("id");
        var action = "delete";
        if(confirm("Are you sure you want to Delete this Product?"))
        {
         $.ajax({
          url:"function/searchproduct-func.php",
          method:"POST",
          data:{Product_id:Product_id, action:action},
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
       
       $(document).on('click','.edit',function(){
       	var Product_id = $(this).attr("id");
       	var action = "edit";
       	
       	window.location.href = "addproduct.php?Product_id="+Product_id+"&action="+action;
  
       });
      });
      </script>
	         <?php require 'include/headerandfooter/footer.php'?>



      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
       