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
  hr.open("POST","json_gallery_data.php",true);
  hr.setRequestHeader("Content-type", "application/json");
  hr.onreadystatechange = function() {
    if(hr.readyState == 4 && hr.status == 200) {
      var data = JSON.parse(hr.responseText);
      var results = document.getElementById("results");
      results.innerHTML= "";
      for (var obj in data){
        if(d[o].src){
                  results.innerHTML += '<div class="materialboxed"><img src="'+d[o].src+'" ></div>'
        }
      }
    }
  }
  hr.send(null);
  results.innerHTML = "requesting...";
}
  </script>

</head>
<body>
  <div id="res">
    <div class="col s2" id="results">
      <?php
      $src=
        foreach () {
        '<div class="materialboxed"><img src="'. $src .'"></div>'
        }


         ?>
    </div>
    <h1>hello</h1>
    <script type="text/javascript">
      ajax_get_json(gallery1);
    </script>
  </div>
</body>
</html>
