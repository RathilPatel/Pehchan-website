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
  <!-- <div class="content-wrapper"> -->
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Events</a>
        </li>
        <li class="breadcrumb-item active">Add Hotels</li>
      </ol>

      <div class="card mb-3">
        <div class="card-header"> <i class="fa fa-area-chart"></i>Add Hotel Information</div>
        <div class="card-body">
          <form action="submit.php" method="post">
          <div class="form-group">
              <label for="exampleInputEmail1"> Hotel Name*</label>
              <input class="form-control" type="text" name="name" value="" placeholder="Name" required>
              <!-- <input  id="exampleInputEmail1" name="exampleInputEmail1" type="email" aria-describedby="emailHelp" placeholder="Enter email"> -->
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Comercial Forum</label>
              <input class="form-control" type="text" name="confom" value="" placeholder="if not know put NA">
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
              <label for="exampleInputEmail1">Address*</label>
              <input class="form-control" type="text" name="address" value="" placeholder="company name">
              <!-- <input  id="exampleInputEmail1" name="exampleInputEmail1" type="email" aria-describedby="emailHelp" placeholder="Enter email"> -->
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1"> Quotation*</label>
                <input class="form-control" type="text" name="quot" value="" placeholder="Name" required>
                <!-- <input  id="exampleInputEmail1" name="exampleInputEmail1" type="email" aria-describedby="emailHelp" placeholder="Enter email"> -->
              </div>
<div class="form-group">
    <label for="exampleInputEmail1">Capacity*</label>
    <input class="form-control" type="text" name="cap" value="" placeholder="capacity  " required>
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

</div>
</body>

</html>
