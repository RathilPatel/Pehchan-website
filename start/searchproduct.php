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
        <li class="breadcrumb-item active">Search Product</li>
      </ol>

      <div class="card mb-3">
        <div class="card-header">
          <!-- <i class="fa fa-area-chart"></i> -->
           Enter Product To search
        </div>
        <div class="card-body">
          <form action="function/login.php" method="post">
            <div class="form-group">
              <label for="exampleInputEmail1">Username</label>
              <input class="form-control" type="text" name="username" value="" placeholder="Username">
              <!-- <input  id="exampleInputEmail1" name="exampleInputEmail1" type="email" aria-describedby="emailHelp" placeholder="Enter email"> -->
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input class="form-control" type="password" name="password" value="" placeholder="Password">

              <!-- <input  id="exampleInputPassword1" name="exampleInputPassword1" type="password" placeholder="Password"> -->
            </div>
            <div class="form-group">
              <div class="form-check">
                <label class="form-check-label">
                  <input class="form-check-input" type="checkbox"> Remember Password</label>
              </div>
            </div>
              <input type="submit" class="btn btn-primary btn-block" name="submit" value="Login" class="btn-login">

            </form>
          </div>
        <!-- <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div> -->
      </div>
      <!-- Icon Cards-->
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
          <?php require 'include/headerandfooter/footer.php'?>
          