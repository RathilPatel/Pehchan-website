<!DOCTYPE html>
<html>
<head>
	<title>Pehchan</title>
<?php require 'header.php' ?>
<!-- jQuery library -->
<!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
  <!-- Compiled and minified JavaScript -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
	<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- 	<link rel="stylesheet" type="text/css" href="../CSS/style.css">
 -->
  <script src="js/script.js"></script>

 	<style type="text/css">
		#subscribe{
				background-color: grey;
				color: white;
				margin-top: 5px;
		}
		#subscribe:hover{
				background-color: white;
				color: black;
		}
		.slide--content{
			max-height:450px;

		}
		.block1{
			overflow-y:auto;
			color: white;
			overflow-x: hidden;
		}

	</style>
</head>
<body >



</div>
<?php require 'navbar.php' ?>
   <div class="carousel carousel-slider center" data-indicators="true">
    <div class="carousel-fixed-item center">
      <a class="btn waves-effect white grey-text darken-text-2">button</a>
    </div>
    <div class="carousel-item red white-text" href="#one!">
      <h2>First Panel</h2>
      <p class="white-text">This is your first panel</p>
    </div>
    <div class="carousel-item amber white-text" href="#two!">
      <h2>Second Panel</h2>
      <p class="white-text">This is your second panel</p>
    </div>
    <div class="carousel-item green white-text" href="#three!">
      <h2>Third Panel</h2>
      <p class="white-text">This is your third panel</p>
    </div>
    <div class="carousel-item blue white-text" href="#four!">
      <h2>Fourth Panel</h2>
      <p class="white-text">This is your fourth panel</p>
    </div>
  </div>

<!-- parallax -->

  <div class="parallax-container" style="max-height: 180px;">
    <div class="parallax"><img src="../Images/para1.jpg"></div>
  </div>
  <div style="padding: 0px 10px 0px 10px;">
  	<div class="section black" style="min-height: 400px;">
    <div class="row container">
      <h2 class="header white-text">Parallax</h2>
      <p class="grey-text text-darken-3 lighten-3">Parallax is an effect where the background content or image in this case, is moved at a different speed than the foreground content while scrolling.</p>
    </div>
  </div>
  
  </div>
  <div class="parallax-container" style="max-height: 180px;">
    <div class="parallax"><img src="../Images/para2.jpg"></div>
  </div>
<div class="block" style=" width: 100%">

	<?php require 'footer.php' ?>
	<?php require 'chat.php' ?>
</body>
</html>
