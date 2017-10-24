<!DOCTYPE html>
<html>
<head>
	<title>Pehchan</title>
<?php require 'header.php' ?>
<script>
    jQuery(window).load(function(){
        jQuery(".hameid-loader-overlay").fadeIn(500);
    });
</script>
<!-- <noscript>
    <style>.hameid-loader-overlay { display: none; } </style>
	</noscript> -->


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
	<div class="hameid-loader-overlay"></div>

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

  <div class="parallax-container" style="max-height: 250px;">
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
  <div class="parallax-container" style="max-height: 250px;">
    <div class="parallax"><img src="../Images/para2.jpg"></div>
  </div>
<div class="block red lighten-2" style=" width: 100%">
<!--collapsible collapsible collapsible  -->
         <div class="container">
           <div class="row">
             <div class="col l12">
               <ul class="collapsible popout" data-collapsible="accordion">
                 <li>
                   <div class="collapsible-header black-text center ">TSHIRTS</div>
                   <div class="collapsible-body">
										 <span>
											 Ready Stock for Plain T-shirts <br>
											 Ready Stock for Plain shirts <br>
											 Ready stock for Hoodies <br>
											 Ready Stock for Kids T-shirts <br>
											 Customised T-shirts <br>
											 Sports T-shirts & Tracks <br>
											 Pattern T-shirts on order <br>
											 Hospitality Uniforms <br>
											 Compressed T-shirts <br>
											 Customized Caps <br>
											 Corporate Uniforms <br>
											 Blazers/Jackets /Suits <br>
											 Complete Printing & Embroidery Facilities <br>
											 MOQ as low as 25 pcs also accepted <br>
											 LED T-shirts (Ready Stock & Custom Designs)
</span>
									 </div>
                 </li>
                 <li>
                   <div class="collapsible-header black-text">CORPORATE GIFTING</div>
                   <div class="collapsible-body">
										 <span>

											 Frames <br>
											 Crystals gifts <br>
											 Leather gifts <br>
											 Bags <br>
											 Office Stationary <br>
											 Pens <br>
											 Gifts sets <br>
											 Gold Foil Articles <br>
											 Desktop Articles <br>
											 Keychain <br>
											 Sipper Bottles
										 </span>
									 </div>
                 </li>
                 <li>
                   <div class="collapsible-header black-text">ELECTRONICS</div>
                   <div class="collapsible-body">
										 <span>
											 Pendrives <br>
											 Powerbanks <br>
											 Other IT Products

										 </span>
									 </div>
                 </li>
								 <li>
                   <div class="collapsible-header black-text">UNIFORMS</div>
                   <div class="collapsible-body">
										 <span>
											 School Uniform
											 Security Uniform
											 Hospitality Uniform
											 Formals
										 </span>
									 </div>
                 </li>
								 <li>
                   <div class="collapsible-header black-text">BRAND CONSULTANCY</div>
                   <div class="collapsible-body">
										 <span></span>
									 </div>
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
