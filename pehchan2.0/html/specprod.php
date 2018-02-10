<?php
require '../database/connect.php';
$cat = $_GET['category'];

$sql= "SELECT * FROM webprod WEHRE category ='$cat'";
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_array($con);


 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title> <?php echo $cat; ?>- Pehchan </title>
    <?php require '../headerandfooter/header.php'; ?>

  </head>
  <body>
    <?php require 'navbar.php'; ?>
    <?php require 'productnav.php';?>

<div class="container">
  <div class="row">
    <div class="col l2 s13">
          <span> <?php  echo $cat;?></span>
    </div>
    <div class="col l3" >
      <div class="card" style="min-height:190px;">
    <div class="card-image waves-effect waves-block waves-light">
      <img class="activator" src="images/office.jpg">
    </div>
    <div class="card-content">
      <span class="card-title activator grey-text text-darken-4">Title<i class="material-icons right">more_vert</i></span>
    </div>
    <div class="card-reveal">
      <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
      <p>Here is some more information about this product that is only revealed once clicked on.</p>
    </div>
  </div>

    </div>

  </div>
  <div class="row">
    <?php while($row = $result->fetch_assoc()){ ?>
    <div class="card">
  <div class="card-image waves-effect waves-block waves-light">
    <img class="activator" src="images/office.jpg">
  </div>
  <div class="card-content">
    <span class="card-title activator grey-text text-darken-4"><?php echo $row['title'];?><i class="material-icons right">more_vert</i></span>
  </div>
  <div class="card-reveal">
    <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
    <p>Here is some more information about this product that is only revealed once clicked on.</p>
  </div>
</div>
<?php } ?>
    </div>
here will be the images
  </div>

</div>

  </body>
</html>
