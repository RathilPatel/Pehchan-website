

<?php

  $dir = glob('../pehchan/Corporate gifting/Bag/{*.jpg,*.png,*.gif}',GLOB_BRACE);
?>
<div class="row">
<div class="col s10 offset-s1">
  <div class="row">
<?php
  foreach ($dir as $value) {
    ?>
    <div class="col s2" >
      <a href="<?php echo $value;?>">
        <img src="<?php echo $value; ?>" alt="<?php echo $value; ?>" style="height:200px; width:153px; padding:5px 5px 5px 5px;" >
      </a>

    </div>


    <?php
  }
  ?>
