<html>
<head>
<?php require '../html/header.php' ?>


</head>
<body>

<?php

  $dir = glob('gallery1/{*.jpg,*.png,*.gif}',GLOB_BRACE);
?>
<div class="container">
  <div class="row">
<?php
  foreach ($dir as $value) {
    ?>
    <div class="materialboxed col s2" >

      <img src="<?php echo $value; ?>" alt="<?php  ?>" style="height:200px; width:153px; padding:5px 5px 5px 5px;" >

    </div>


    <?php
  }
  ?>
</div>
</div>

</body>
</html>
