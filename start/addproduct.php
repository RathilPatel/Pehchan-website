<!DOCTYPE html>
<html lang="en">

<?php require 'include/headerandfooter/header.php' ?>

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
        <li class="breadcrumb-item active">Add Product</li>
      </ol>

      <div class="card mb-3">
        <div class="card-header">
          <!-- <i class="fa fa-area-chart"></i> -->
          Fill Product Information
        </div>
        <div class="card-body">
          <form action="function/addproduct-func.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
              <label for="exampleInputEmail1">Product Code</label>
              <input class="form-control" type="text" name="pcode" value="" placeholder="Eg:AAA-AAA-000-AA">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Product Name</label>
              <input class="form-control" type="text" name="pname" value="" placeholder="Product Name">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">GSM</label>
              <input class="form-control" type="text" name="gsm" value="" placeholder="GSM">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">MOQ(Minimum Order Quantity)</label>
              <input class="form-control" type="text" name="moq" value="" placeholder="MOQ">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Price(Rs.)</label>
              <input class="form-control" type="text" name="oprice" value="" placeholder="Cost Price">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Sample Price(Rs.)</label>
              <input class="form-control" type="text" name="sprice" value="" placeholder="sample product price">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Description</label>
              <textarea class="form-control" type="text" name="pdesc" value="" placeholder="Describe the product "></textarea>
            </div>
            <div class="form-group">
    <label>Upload Image</label>
    <div class="input-group">
        <span class="input-group-btn">
            <span class="btn btn-default btn-file">
                Browse… <input type="file" name="myimage" id="imgInp">
            </span>
        </span>
        <!-- <input type="text" class="form-control" readonly> -->
    </div>
    <img id='img-upload'/>
</div>

              <input type="submit" class="btn btn-primary btn-block" name="submit" value="Submit" class="btn-login">
              
            </form>
          </div>
        </div>
      
        
            <?php require 'include/headerandfooter/footer.php' ?>

