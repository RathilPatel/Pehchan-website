<!DOCTYPE html>
<html>
<head>
  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
  <!-- Compiled and minified JavaScript -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
	<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- 	<link rel="stylesheet" type="text/css" href="../CSS/style.css">
 -->
  <script type="text/javascript">
  function ajax_get_json(folder){
  var hr = new XMLHttpRequest();
  // hr.open("POST","json_gallery_data.php",true);
  // hr.setRequestHeader("Content-type", "application/json");
  hr.onreadystatechange = function() {
    if(hr.readyState == 4 && hr.status == 200) {
      // var data = JSON.parse(hr.responseText);
      var results = document.getElementById("row");
      results.innerHTML= "";
      <?php

        $dir = glob('folder+{*.jpg,*.png,*.gif}',GLOB_BRACE);
      ?>
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


    }
  }
  hr.send(null);
  results.innerHTML = "requesting...";
}
  </script>

</head>
<body>
  <div class="row">
  <div class="col s10 offset-s1">
    <div class="row">

  </div>
  </div>
  </div>

  <div id="res">
<a href="#" onclick="ajax_get_json(gallery1/)">gallery1</a>
<a href="#" onclick="ajax_get_json(gallery2/)">gallery2</a>

  </div>

</body>
</html>
