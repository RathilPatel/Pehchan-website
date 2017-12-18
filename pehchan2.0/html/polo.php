<?php

  $dir = glob('../pehchan/Corporate gifting/Frames/{*.jpg,*.png,*.gif,*.jpeg}',GLOB_BRACE);
?>
    <div class="row">
        <div class="col s10 offset-s1">
            <div class="row">
                <?php
  foreach ($dir as $value) {
    ?>
                    <div class="col s3">
                        <div class="card">
                            <div class="card-image">
                                <a href="<?php echo $value;?>" class="lightBox">
                                    
                                    <img class="fancybox" src="<?php echo $value; ?>" alt="<?php echo $value; ?>" style="height:200px; width:250px; padding-left:40px;">
                                
                                </a>
                                
                                <div class="card-content">
                                    <p> </p>
                                </div>

                            </div>
                        </div>
                    </div>

    <?php
  }
  ?>
