<!DOCTYPE html>
<html>
<head>
	<title>Pehchan</title>
<?php require 'header.php' ?>

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

  <div class="slider">
    <ul class="slides">
      <li>
        <img src="../Images/pehchan.gif" style="width:1280px; height:380px; padding-top:20px;"> <!-- random image -->
        <div class="caption center-align">
					<!-- <img src="../Images/pehchan.gif" style="height:100px; width:280px;"> -->
          <h3>This is our big Tagline!</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
      <li>
        <img src="https://lorempixel.com/580/250/nature/2"> <!-- random image -->
        <div class="caption left-align">
          <h3>Left Aligned Caption</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
      <li>
        <img src="https://lorempixel.com/580/250/nature/3"> <!-- random image -->
        <div class="caption right-align">
          <h3>Right Aligned Caption</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
      <li>
        <img src="https://lorempixel.com/580/250/nature/4"> <!-- random image -->
        <div class="caption center-align">
          <h3>This is our big Tagline!</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
    </ul>
  </div>
<!-- <div class="carousel carousel-slider" style="max-height:400px;">
	<a class="carousel-item" href="#one!"><img src="https://lorempixel.com/800/400/food/1"></a>
	<a class="carousel-item" href="#two!"><img src="https://lorempixel.com/800/400/food/2"></a>
	<a class="carousel-item" href="#three!"><img src="https://lorempixel.com/800/400/food/3"></a>
	<a class="carousel-item" href="#four!"><img src="https://lorempixel.com/800/400/food/4"></a>
</div> -->

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
<!--collapsible collapsible collapsible  -->
         <div class="container">
           <div class="row">
             <div class="col l12">
               <ul class="collapsible" data-collapsible="accordion">
                 <li>
                   <div class="collapsible-header black-text ">First</div>
                   <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
                 </li>
                 <li>
                   <div class="collapsible-header black-text">Second</div>
                   <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
                 </li>
                 <li>
                   <div class="collapsible-header black-text">Third</div>
                   <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
                 </li>
               </ul>
             </div>
           </div>
				 </div>
<!-- collapsible collapsible collapsible -->
	<?php require 'footer.php' ?>
	<?php require 'chat.php' ?>
</body>
</html>
