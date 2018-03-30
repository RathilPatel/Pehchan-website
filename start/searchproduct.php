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

       


    <div class="container" >

      <div class="row">
       <?php
   
       $sql= "SELECT * from Product";
       $result = mysqli_query($con,$sql);
       while($row = mysqli_fetch_array($result)){
?>
           <div class="col-lg-4 col-sm-6 text-center mb-4">
          <img class=" img-fluid d-block mx-auto" style="height:200px; width:200px;" src="data:image/jpeg;base64,<?php echo base64_encode($row['Product_Image']) ?>" alt=" <?php echo $row['Product_id']?>">
           <h5><?php echo $row['Product_id']; ?></h5>
          <p> <?php echo $row['Description']; ?></p>
        </div>
        <?php
      }
     mysqli_close($con);
     ?>

    </div>
<div>
	         <?php require 'include/headerandfooter/footer.php'?>

  </body>
</html>

      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
       