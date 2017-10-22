<!DOCTYPE html>
<html>
<head>
  <title>Bag</title>
<?php require 'header.php' ?>
</head>
<body>
<?php require 'navbar.php' ?>

<?php require 'productnav.php' ?>



<?php

  $dir = glob('../../pehchan/Corporate gifting/Bag/{*.jpg,*.png,*.gif}',GLOB_BRACE);
?>
<div class="row">
<div class="col s10 offset-s1">
  <div class="row">
<?php
  foreach ($dir as $value) {
    ?>
    <div class="col s2" >
      <a href="<?php echo $value;?>" class="lightBox">
        <img src="<?php echo $value; ?>" alt="<?php echo $value; ?>" style="height:200px; width:153px; padding:5px 5px 5px 5px;" >
      </a>

    </div>


    <?php
  }
  ?>
  <!-- ----------------------------------------------------------------------------------- -->


</div>
<div class="row">
  <div class="col-md-offset-1 col-md-10">
    <div class="gallery" style="margin-bottom: 20px;">
      <div class="row">
      <div class="col-md-2">
        <a href="../../pehchan/Corporate gifting/Bag/bag (1).jpg">
           <img src="../../pehchan/Corporate gifting/Bag/bag (1).jpg" class="img-responsive img-thumbnail" style="height: 200px; width: 200px; background-size:contain">
        </a>

        </div>
        <div class="col-md-2">
         <a href="../../pehchan/Corporate gifting/Bag/bag (2).jpg">
           <img src="../../pehchan/Corporate gifting/Bag/bag (2).jpg" class="img-responsive img-thumbnail" style="height: 200px; width: 200px; background-size:contain">
        </a>

        </div>
        <div class="col-md-2">
          <a href="../../pehchan/Corporate gifting/Bag/bag (3).jpg">
           <img src="../../pehchan/Corporate gifting/Bag/bag (3).jpg" class="img-responsive img-thumbnail" style="height: 200px; width: 200px; background-size:contain">
        </a>

        </div>

        <div class="col-md-2">
            <a href="../../pehchan/Corporate gifting/Bag/bag (4).jpg">
           <img src="../../pehchan/Corporate gifting/Bag/bag (4).jpg" class="img-responsive img-thumbnail" style="height: 200px; width: 200px; background-size:contain">
        </a>
        </div>
          <div class="col-md-2">
            <a href="../../pehchan/Corporate gifting/Bag/bag (5).jpg">
           <img src="../../pehchan/Corporate gifting/Bag/bag (5).jpg" class="img-responsive img-thumbnail" style="height: 200px; width: 200px; background-size:contain">
        </a>
        </div>
        <div class="col-md-2">
         <a href="../../pehchan/Corporate gifting/Bag/bag (6).jpg">
           <img src="../../pehchan/Corporate gifting/Bag/bag (6).jpg" class="img-responsive img-thumbnail" style="height: 200px; width: 200px; background-size:contain">
        </a>

        </div>
      </div>
      <div class="row">
      <div class="col-md-2">
        <a href="../../pehchan/Corporate gifting/Bag/bag (7).jpg">
           <img src="../../pehchan/Corporate gifting/Bag/bag (7).jpg" class="img-responsive img-thumbnail" style="height: 200px; width: 200px; background-size:contain">
        </a>

        </div>
       <div class="col-md-2">
        <a href="../../pehchan/Corporate gifting/Bag/bag (8).jpg">
           <img src="../../pehchan/Corporate gifting/Bag/bag (8).jpg" class="img-responsive img-thumbnail" style="height: 200px; width: 200px; background-size:contain">
        </a>

        </div>

    </div>
  </div>
</div>
</div>
<script type="text/javascript">
  $(document).on("click",".notavailable",function(){
 alert("We will upload that category soon ");
});
</script>
</body>
</html>
