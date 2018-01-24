<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <!-- Bootstrap core CSS-->
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="../vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="../css/sb-admin.css" rel="stylesheet">
</head>
<title>Inventory Management</title>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->



  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Clients</a>
        </li>
        <li class="breadcrumb-item active">Add Client</li>
      </ol>

      <div class="card mb-3">
        <div class="card-header"> <i class="fa fa-area-chart"></i>Add Client Information</div>
        <div class="card-body">
          <form action="function/addclientfunc.php" method="post">
              <!-- <div class="form-group">
              <label for="sel1">Type of Client:</label>
              <select class="form-control" id="sel1" name="tos">
                <option value="customer">Customer</option>
                <option value="distributor">Distributor</option>
                <option value="reseller">Reseller</option>
                <option></option>
              </select>
            </div> -->

          <div class="form-group">
              <label for="exampleInputEmail1">Name*</label>
              <input class="form-control" type="text" name="name" value="" placeholder="Name" required>
              <!-- <input  id="exampleInputEmail1" name="exampleInputEmail1" type="email" aria-describedby="emailHelp" placeholder="Enter email"> -->
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Designation*</label>
              <input class="form-control" type="text" name="designation" value="" placeholder="if not know put NA">
              <!-- <input  id="exampleInputEmail1" name="exampleInputEmail1" type="email" aria-describedby="emailHelp" placeholder="Enter email"> -->
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Contact Number*</label>
              <input class="form-control" type="text" name="con1" value="" placeholder="eg:0123456789">
              <!-- <input  id="exampleInputEmail1" name="exampleInputEmail1" type="email" aria-describedby="emailHelp" placeholder="Enter email"> -->
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Alternate Contact*</label>
              <input class="form-control" type="text" name="con2" value="" placeholder="if not available put 0000000000">
              <!-- <input  id="exampleInputEmail1" name="exampleInputEmail1" type="email" aria-describedby="emailHelp" placeholder="Enter email"> -->
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Email*</label>
              <input class="form-control" type="text" name="email" value="" placeholder="IF not available put NA@NA.NA">
              <!-- <input  id="exampleInputEmail1" name="exampleInputEmail1" type="email" aria-describedby="emailHelp" placeholder="Enter email"> -->
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Company Name*</label>
              <input class="form-control" type="text" name="cname" value="" placeholder="company name">
              <!-- <input  id="exampleInputEmail1" name="exampleInputEmail1" type="email" aria-describedby="emailHelp" placeholder="Enter email"> -->
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Company Description*</label>
              <textarea class="form-control" type="text" name="cdesc" value="" placeholder="company description"></textarea>
              <!-- <input  id="exampleInputEmail1" name="exampleInputEmail1" type="email" aria-describedby="emailHelp" placeholder="Enter email"> -->
            </div>
            <input type="submit" class="btn btn-primary btn-block" name="addclientformsubmit" value="Submit" class="btn-login">
            <!-- <a class="btn btn-primary btn-block" href="#">Login</a> -->
          </form>
            <div id="add_err"></div>
          <!-- <canvas id="myAreaChart" width="100%<footer class="sticky-footer">
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
        <a class="btn btn-primary" href="function/logout.php">Logout</a>
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
" height="30"></canvas> -->
        </div>
        <!-- <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div> -->
      </div>
      <!-- Icon Cards-->
    <!-- /.container-fluid-->
    <!-- /.content-wrapper--><footer class="sticky-footer">
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
            <a class="btn btn-primary" href="function/logout.php">Logout</a>
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
