<!DOCTYPE html>
<html lang="en">

<?php require 'include/headerandfooter/header.php'; ?>
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
        <li class="breadcrumb-item active">Add User</li>
      </ol>

      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-area-chart"></i> Area User Details</div>
        <div class="card-body">
          <form action="function/adduser-func.php" method="post">
            <div class="form-group">
              <label for="exampleInputEmail1">First Name</label>
              <input class="form-control" type="text" name="fname" placeholder="First name" >
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Last Name</label>
              <input class="form-control" type="text" name="lname" placeholder="Last name" >
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Email</label>
              <input class="form-control" type="text" name="email" placeholder="E-mail" >
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input class="form-control" type="password" name="password" value="" placeholder="Password">
            </div>
            <div class="form-group">
              <p>
                <input class="with-gap" name="role" type="radio" id="test1"  value="admin"/>
                <label for="test1">Admin</label>
              </p>
              <p>
                <input class="with-gap" name="role" type="radio" id="test3"  value="employee"/>
                <label for="test3">Employee</label>
              </p>
            </div>
              <input type="submit" class="btn btn-primary btn-block" name="submit" value="submit" class="btn-login">
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
