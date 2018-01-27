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
        <li class="breadcrumb-item active">Change Password</li>
      </ol>

      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-area-chart"></i> Change Password</div>
        <div class="card-body">
          <form action="function/changepassword-func.php" method="post">
            <div class="form-group">
              <label for="exampleInputPassword1">Current Password</label>
              <input class="form-control" type="password" name="oldpassword" value="" placeholder="Password">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">New Password</label>
              <input class="form-control" type="password" name="newpassword" value="" placeholder="Password">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Confirm New Password</label>
              <input class="form-control" type="password" name="conpassword" value="" placeholder="Password">
            </div>
              <input type="submit" class="btn btn-primary btn-block" name="submit" value="Change Password" class="btn-login">
            <!-- <a class="btn btn-primary btn-block" href="#">Login</a> -->
            <div id="add_err"></div>
            </form>
          <!-- <canvas id="myAreaChart" width="100%" height="30"></canvas> -->
        </div>
        <!-- <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div> -->
      </div>
        <?php require 'include/headerandfooter/footer.php';?>
