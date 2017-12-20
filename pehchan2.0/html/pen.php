<?php

  $dir = glob('../pehchan/Corporate gifting/Pen/{*.jpg,*.png,*.gif}',GLOB_BRACE);
?>
    <div class="row">
        <div class="col s10 offset-s1">
            <div class="row">
                <?php
  foreach ($dir as $value) {
    ?>
                    <div class="col s6 l3">
                        <div class="card">
                            <div class="card-image">
                                <a href="<?php echo $value;?>">
                                <a class="fancybox" href="<?php echo $value;?>" data-caption="This is a caption" data-fancybox="group2">
                                    <img src="<?php echo $value; ?>" alt="<?php echo $value; ?>" style="max-width: 100%; height: auto;">
                                </a>

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
