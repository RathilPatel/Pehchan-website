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
          <form action="function/addproduct-func.php" method="post">
            <div class="form-group">
              <label for="exampleInputEmail1">Product Code</label>
              <input class="form-control" type="text" name="username" value="" placeholder="Eg:AAA-AAA-000-AA">
              <!-- <input  id="exampleInputEmail1" name="exampleInputEmail1" type="email" aria-describedby="emailHelp" placeholder="Enter email"> -->
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Product Name</label>
              <input class="form-control" type="text" name="username" value="" placeholder="Product Name">
              <!-- <input  id="exampleInputEmail1" name="exampleInputEmail1" type="email" aria-describedby="emailHelp" placeholder="Enter email"> -->
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">GSM</label>
              <input class="form-control" type="text" name="username" value="" placeholder="GSM">
              <!-- <input  id="exampleInputEmail1" name="exampleInputEmail1" type="email" aria-describedby="emailHelp" placeholder="Enter email"> -->
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">MOQ(Minimum Order Quantity)</label>
              <input class="form-control" type="text" name="username" value="" placeholder="MOQ">
              <!-- <input  id="exampleInputEmail1" name="exampleInputEmail1" type="email" aria-describedby="emailHelp" placeholder="Enter email"> -->
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Price(Rs.)</label>
              <input class="form-control" type="text" name="username" value="" placeholder="Cost Price">
              <!-- <input  id="exampleInputEmail1" name="exampleInputEmail1" type="email" aria-describedby="emailHelp" placeholder="Enter email"> -->
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Sample Price</label>
              <input class="form-control" type="text" name="username" value="" placeholder="sample product price">
              <!-- <input  id="exampleInputEmail1" name="exampleInputEmail1" type="email" aria-describedby="emailHelp" placeholder="Enter email"> -->
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Description</label>
              <textarea class="form-control" type="password" name="password" value="" placeholder="Describe the product "></textarea>

              <!-- <input  id="exampleInputPassword1" name="exampleInputPassword1" type="password" placeholder="Password"> -->
            </div>
            <div class="form-group">
    <label>Upload Image</label>
    <div class="input-group">
        <span class="input-group-btn">
            <span class="btn btn-default btn-file">
                Browse… <input type="file" id="imgInp">
            </span>
        </span>
        <!-- <input type="text" class="form-control" readonly> -->
    </div>
    <img id='img-upload'/>
</div>
            <div class="form-group">
              <div class="form-check">
                <label class="form-check-label">
                  <input class="form-check-input" type="checkbox"> Remember Password</label>
              </div>
            </div>
              <input type="submit" class="btn btn-primary btn-block" name="submit" value="Submit" class="btn-login">
            <!-- <a class="btn btn-primary btn-block" href="#">Login</a> -->
            <div id="add_err"></div>
          <!-- <canvas id="myAreaChart" width="100%" height="30"></canvas> -->
        </div>
        <!-- <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div> -->
      </div>
      <!-- Icon Cards-->
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © Your Website 2017</small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="logout.php">Logout</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="js/sb-admin-datatables.min.js"></script>
    <script src="js/sb-admin-charts.min.js"></script>
  </div>
</body>

</html>
