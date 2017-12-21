<?php
  $dir = glob('../pehchan/Corporate gifting/Frames/{*.jpg,*.png,*.gif,*.jpeg}',GLOB_BRACE);
?>
    <link type="text/css" href="../css/darkbox.css" rel="stylesheet">
    <script src="../js/darkbox.min.js"></script>
    <div class="row">
        <div class="col s10 offset-s1">
            <div class="row">
                <?php
  foreach ($dir as $value) {
    ?>
                    <div class="col s6 l3">
                        <div class="z-depth-4">
                        <div class="card" >
                            <div class="card-image" >
                                <a href="<?php echo $value;?>">
                                <a class="fancybox" href="<?php echo $value;?>" data-type="image" data-caption="This is a caption" data-fancybox="group2" data-width="500" data-height="500">
                                    <img src="<?php echo $value; ?>" alt="<?php echo $value; ?>">
                                </a>

                                </a>

                                <div class="card-content">
                                    <p> </p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>


                    <?php
  }
  ?>
