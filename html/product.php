<!DOCTYPE html>
<html>
<head>
	<title>Product</title>
	<?php require'header.php' ?>
 <style>
  #dropdown-links{
    font-size: 16px;
    width: 100%;
    right: 0;

  }
      img{
        margin-bottom: 20px;


      }
      .navbar{
        font-size: 10px;
        background-color: #292222;
      }
      .dropdown-menu{
          background-color: #292222;
          padding-left: 1px;
      }
      a{
        left: 0;
        color: white;
      }
      a:hover{
        color:white;
      }

    </style>
</head>
<body>
	<?php require 'navbar.php' ?>

<?php require 'productnav.php' ?>

<div style="position: top right; width: 100% background-color:#f2f2f2;">
<img src="../Images/pehchan.gif" style="height:100px;width:280px; margin-bottom: 0px;">
</div>
<div class="topnav" id="myTopnav">
  <a href="index.html" class="active">Home</a>
  <a href="Product.html">Product</a>
  <a href="contact.html">Contact</a>
  <!-- <a href="about.html">About</a> -->
  <a>Our expert :+91 9820 3101 77</a>
  <a>Email: sales@mypehchan.com</a>

  <div style="float: right;">
   <a href="../pehchan/Catalog/CATALOG.rar">Download Brochure</a>
     <a href="#" class="fa fa-facebook "></a>
  <a href="#" class="fa fa-twitter"></a>
  <a href="#" class="fa fa-instagram"></a>

  </div>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
</div>
<div class="row">
<div class="col-md-offset-5 col-md-6">
   <span style="font-size:32px;font-weight: normal; color:white; font-family: georgia;" >Products</span>
</div>
</div>

<!-- qqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqq -->
<div style=" color: white;">

<div id="navbar">
  <nav class="navbar navbar-default navbar-static-top" role="navigation">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      </button>
    </div>
    <div class="collapse navbar-collapse" id="navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="dropdown" style="margin-left: 170px; align-items: center;">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="color:white ;font-size:16px;">Tshirts<b class="caret"></b></a>
          <ul class="dropdown-menu" >
           <!--  <li class="kopie"><a href="#">Dropdown</a></li> -->
            <li><a href="Products/round.html" id="dropdown-links" style="color:white;padding-right:125px;">Round Neck</a></li>
            <li><a href="Products/polo.html" id="dropdown-links" style="color:white; padding-right:100px;">Polo/Colar Neck</a></li>
            <li><a href="#" id="dropdown-links" style="color:white; padding-right:160px;">Printed</a></li>


          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="color:white; font-size:16px;">Corporate Gifting<b class="caret"></b></a>
          <ul class="dropdown-menu">
            <!-- <li class="kopie"><a href="#">Dropdown2</a></li> -->
            <li><a href="Products/frames.html" id="dropdown-links" style="color:white; padding-right: 100px;">Frames Gifts</a></li>
            <li><a href="Products/crystal.html" id="dropdown-links" style="color:white;padding-right: 100px;">Crystal Gifts</a></li>
            <li><a href="Products/leather.html" id="dropdown-links" style="color:white;padding-right: 95px;">Leather Gifts</a></li>
            <li><a href="#" class="notavailable" id="dropdown-links" style="color:white;padding-right: 125px;">Apparels</a></li>
            <li><a href="Products/bag.html" id="dropdown-links" style="color:white;padding-right: 152px;">Bags</a></li>
            <li><a href="Products/stationary.html" id="dropdown-links" style="color:white;padding-right: 72px;">Office Stationary</a></li>
            <li><a href="Products/goldfoil.html" id="dropdown-links" style="color:white;padding-right: 72px;">Gold Foil Articles</a></li>
            <li><a href="Products/giftsets.html" id="dropdown-links" style="color:white;padding-right: 124px;">Gifts sets</a></li>
            <li><a href="Products/pen.html" id="dropdown-links" style="color:white;padding-right: 154px;">Pens</a></li>
            <li><a href="Products/sipper.html" id="dropdown-links" style="color:white;padding-right: 95px;">Sipper Bottles</a></li>
            <li><a href="Products/keychain.html" id="dropdown-links" style="color:white;padding-right: 120px;">Keychains</a></li>
            <li><a href="Products/desktoparticle.html" id="dropdown-links" style="color:white;padding-right: 75px;">Desktop Articles</a></li>
            <li><a href="Products/cg_misc.html" id="dropdown-links" style="color:white;padding-right: 85px;">Miscellaneous</a></li>
          </ul>
        </li>

        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="color:white ;font-size:16px;">LED Tshirts<b class="caret"></b></a>
          <ul class="dropdown-menu">
            <!-- <li class="kopie"><a href="#">Dropdown2</a></li> -->
            <li><a href="Products/led.html" id="dropdown-links" style="color:white ; padding-right: 100px;">LED Tshirts</a></li>

          </ul>
        </li>

        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="color:white; font-size:16px;">Sweatshirts & Jackets<b class="caret"></b></a>
          <ul class="dropdown-menu">
            <!-- <li class="kopie"><a href="#">Dropdown2</a></li> -->
            <li><a href="Products/sweatshirts.html" id="dropdown-links" style="color:white; padding-right: 120px;">Sweatshirts</a></li>
            <li><a href="Products/jackets.html" id="dropdown-links" style="color:white; padding-right:150px;">Jackets</a></li>
            <li><a href="Products/hoodies.html" id="dropdown-links" style="color:white; padding-right: 148px; ">Hoodies</a></li>
          </ul>
        </li>

        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="color:white ;font-size:16px;" >IT Products<b class="caret"></b></a>
          <ul class="dropdown-menu">
            <!-- <li class="kopie"><a href="#">Dropdown2</a></li> -->
            <li><a href="Products/pendrives.html" id="dropdown-links" style="color:white;padding-right: 150px;">Pendrives</a></li>
            <li><a href="Products/powerbanks.html" id="dropdown-links" style="color:white ; padding-right:140px;">Powerbanks</a></li>

          </ul>
        </li>



        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="color:white; font-size:16px;">Uniforms<b class="caret"></b></a>
          <ul class="dropdown-menu">
            <!-- <li class="kopie"><a href="#">Dropdown2</a></li> -->
            <li><a href="#" class="notavailable" id="dropdown-links" style="color:white; padding-right: 30px;">Schools uniforms</a></li>
            <li><a href="products/hospitality.html" id="dropdown-links" style="color:white; padding-right: 17px;">Hospitality uniforms</a></li>
            <li><a href="Products/formal.html" id="dropdown-links" style="color:white; padding-right: 93px;">Formals</a></li>
            <li><a href="Products/security.html" id="dropdown-links" style="color:white; padding-right: 30px;">Security uniforms</a></li>
            <li><a href="Products/uni_misc.html" id="dropdown-links" style="color:white; padding-right:50px;">Miscallaneous</a></li>
          </ul>
        </li>

      </ul>
    </div>
    <!-- /.navbar-collapse -->
  </nav>

</div>


<!-- qqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqq -->
<div class="row">
  <div class="col-md-offset-1 col-md-10">
     <div class="row">


     <div class="row">
        <div class="col-md-4">
          <div class="title">
            <span class="h3" style="color: white">Tshirts</span>
            <hr style="margin-right: 285px; margin-top: 0px;">
          </div>
        </div>

     </div>
     <div class="row" >
       <div class="col-md-2">
         <a href="Products/round.html">
            <img src="../pehchan/Tshirts/Round_Neck/r_1 (1).jpg" class="img-responsive" style="height: 200px; width: 200px;background-size:contain;">

          <span class="h4" style="padding-left:10px;" style="color: white">Round Neck Tshirts</span>
           </a>
       </div>
       <div class="col-md-2">
         <a href="Products/polo.html">
               <img src="../Images/p_n (72).jpg" class="img-responsive" style="height: 200px; width: 200px; background-size:contain">

            <span class="h4" style="padding-right:10px;" style="color: white">Polo Neck Tshirts</span>
         </a>
       </div>

     </div>
<br>
<br>

    <div class="row">
        <div class="col-md-4">
          <div class="title">
            <span class="h3" style="color: white">Uniforms</span>
            <hr  style="margin-right: 260px; margin-top: 0px;">
          </div>
        </div>
</div>
      <div class="row" >
       <div class="col-md-2">
         <a href="Products/security.html">
            <img src="../pehchan/Uniforms/Security/sec (58).jpg" class="img-responsive" style="height: 200px; width: 200px;background-size:contain;">

          <span class="h4" style="padding-left:10px;" style="color: white">Security</span>
           </a>
       </div>
       <div class="col-md-2">
         <a href="Products/hospitality.html">
            <img src="../pehchan/Uniforms/Hospitality/hosp (59).jpg" class="img-responsive" style="height: 200px; width: 200px;background-size:contain;">

          <span class="h4" style="padding-left:10px;" style="color: white">Hospitality</span>
           </a>
       </div>
       <div class="col-md-2">
         <a href="#" class="notavailable">
            <img src="../pehchan/Uniforms/SchoolS/model-1753032.jpg" class="img-responsive" style="height: 200px; width: 200px;background-size:contain;">

          <span class="h4" style="padding-left:10px;" style="color: white">School</span>
           </a>
       </div>
       <div class="col-md-2">
         <a href="Products/uni_misc.html">
            <img src="../pehchan/Uniforms/Miscellaneous/misc (16).jpg" class="img-responsive" style="height: 200px; width: 200px;background-size:contain;">

          <span class="h4" style="padding-left:10px;" style="color: white">Miscellaneous</span>
           </a>
       </div>
       <div class="col-md-2">
         <a href="Products/polo.html">
               <img src="../pehchan/Uniforms/formals/formal (9).jpg" class="img-responsive" style="height: 200px; width: 200px; background-size:contain">

            <span class="h4" style="padding-right:10px;" style="color: white">Formals</span>
         </a>
       </div>

     </div>
<br>
<br>

       <div class="row">
        <div class="col-md-4">
          <div class="title">
            <span class="h3" style="color: white">Corporate Gifting</span>
          <hr  style="margin-right: 175px; margin-top: 0px;">
          </div>
        </div>
</div>
      <div class="row" >

       <div class="col-md-2">
         <a href="Products/frame.html">
            <img src="../pehchan/Corporate gifting/Frames/frame (49).jpg" class="img-responsive" style="height: 200px; width: 200px;background-size:contain;">

          <span class="h4" style="padding-left:10px;" style="color: white">Frames Gift</span>
           </a>
       </div>
       <div class="col-md-2">
         <a href="Products/crystal.html">
            <img src="../pehchan/Corporate gifting/Crystal/crystal3/crystal (78).jpg" class="img-responsive" style="height: 200px; width: 200px;background-size:contain;">

          <span class="h4" style="padding-left:10px;" style="color: white">Crystal Gifts</span>
           </a>
       </div>
       <div class="col-md-2">
         <a href="Products/bags.html">
            <img src="../pehchan/Corporate gifting/Bag/bag (1).jpg" class="img-responsive" style="height: 200px; width: 200px;background-size:contain;">

          <span class="h4" style="padding-left:10px;" style="color: white">Bags</span>
           </a>
       </div>
       <div class="col-md-2">
         <a href="Products/leather.html">
            <img src="../pehchan/Corporate gifting/Leather/leather (5).jpg" class="img-responsive" style="height: 200px; width: 200px;background-size:contain;">

          <span class="h4" style="padding-left:10px;" style="color: white">Leather</span>
           </a>
       </div>
        <div class="col-md-2">
         <a href="Products/keychain.html">
            <img src="../pehchan/corporate gifting/keychain/key (1).jpg" class="img-responsive" style="height: 200px; width: 200px;background-size:contain;">

          <span class="h4" style="padding-left:10px;" style="color: white">Keychain</span>
           </a>
       </div>
      <div class="col-md-2">
         <a href="Products/stationary.html">
            <img src="../pehchan/Corporate gifting/Stationary/st (39).jpg" class="img-responsive" style="height: 200px; width: 200px;background-size:contain;">

          <span class="h4" style="padding-left:10px;" style="color: white">Office Stationary</span>
           </a>
       </div>
     </div>
     <br>
     <br>
     <br>

       <div class="row" >
      <div class="col-md-2">
         <a href="Products/desktoparticle.html">
               <img src="../pehchan/Corporate gifting/Desktop_Articles/da (78).jpg" class="img-responsive" style="height: 200px; width: 200px; background-size:contain">

            <span class="h4" style="padding-right:10px;" style="color: white">Desktop Articles</span>
         </a>
       </div>
             <div class="col-md-2">
         <a href="Products/pen.html">
            <img src="../pehchan/Corporate gifting/Pen/pen (71).jpg" class="img-responsive" style="height: 200px; width: 200px;background-size:contain;">

          <span class="h4" style="padding-left:10px;" style="color: white">Pens</span>
           </a>
       </div>
       <div class="col-md-2">
         <a href="Products/giftsets.html">
            <img src="../pehchan/Corporate gifting/Gift_Set/gs (34).jpg" class="img-responsive" style="height: 200px; width: 200px;background-size:contain;">

          <span class="h4" style="padding-left:10px;" style="color: white">Gifts Sets</span>
           </a>
       </div>
       <div class="col-md-2">
         <a href="Products/sipper.html">
            <img src="../pehchan/Corporate gifting/Liquid Accessories/l_a (10).jpg" class="img-responsive" style="height: 200px; width: 200px;background-size:contain;">

          <span class="h4" style="padding-left:10px;" style="color: white">Sipper Bottles</span>
           </a>
       </div>

        <div class="col-md-2">
         <a href="Products/cg_misc.html">
            <img src="../pehchan/Corporate gifting/Miscellaneous/misc (59).jpg" class="img-responsive" style="height: 200px; width: 200px;background-size:contain;">

          <span class="h4" style="padding-left:10px;" style="color: white">Miscellaneous</span>
           </a>
       </div>
     </div>


     </div>

     <br>
<br>

    <div class="row">
        <div class="col-md-4">
          <div class="title">
            <span class="h3" style="color: white">Led T-Shirts</span>
            <hr  style="margin-right: 220px;  margin-top: 0px;">
          </div>
        </div>
</div>
      <div class="row" >
       <div class="col-md-2">
         <a href="Products/led.html">
            <img src="../pehchan/Led Tshirts/l_s (5).jpg" class="img-responsive" style="height: 200px; width: 200px;background-size:contain;">

          <span class="h4" style="padding-left:10px; margin-top: 0px;" style="color: white">Led Tshirts</span>
           </a>
       </div>
        </div>

  <br>
<br>

    <div class="row">
        <div class="col-md-4">
          <div class="title">
            <span class="h3" style="color: white">Sweatshirts and Jackets</span>
            <hr style="margin-top: 0px; margin-right: 90px;">
          </div>
        </div>
</div>
          <div class="row" >
       <div class="col-md-2">
         <a href="Products/sweatshirts.html">
            <img src="../pehchan/Sweatshirts & jackets/Hooodies&Sweatshirts/h_s (1).jpg" class="img-responsive" style="height: 200px; width: 200px;background-size:contain;">

          <span class="h4" style="padding-left:10px;" style="color: white">Sweatshirts</span>
           </a>
       </div>
       <div class="col-md-2">
         <a href="Products/jackets.html">
            <img src="../pehchan/Sweatshirts & jackets/Jackets/jack (9).jpg" class="img-responsive" style="height: 200px; width: 200px;background-size:contain;">

          <span class="h4" style="padding-left:10px;" style="color: white">Jackets</span>
           </a>
       </div>
       <div class="col-md-2">
         <a href="Products/hoodies.html">
            <img src="../pehchan/Sweatshirts & jackets/Hooodies&Sweatshirts/h_s (3).jpg" class="img-responsive" style="height: 200px; width: 200px;background-size:contain;">

          <span class="h4" style="padding-left:10px;" style="color: white">Hoodies</span>
           </a>
       </div>
        </div>

<br>
<br>
<br>

 <div class="row">
        <div class="col-md-4">
          <div class="title">
            <span class="h3" style="color: white">IT Products</span>
            <hr  style="margin-right: 230px; margin-top: 0px;">
          </div>
        </div>
</div>
          <div class="row" >
       <div class="col-md-2">
         <a href="Products/pendrives.html">
            <img src="../pehchan/Pendrives & Powerbanks/Pendrives/pd (1).jpg" class="img-responsive" style="height: 200px; width: 200px;background-size:contain;">

          <span class="h4" style="padding-left:10px;" style="color: white">Pendrives</span>
           </a>
       </div>
       <div class="col-md-2">
         <a href="Products/powerbanks.html">
            <img src="../pehchan/Pendrives & Powerbanks/Powerbank/pb (2).jpg" class="img-responsive" style="height: 200px; width: 200px;background-size:contain;">

          <span class="h4" style="padding-left:10px;" style="color: white">Powerbanks</span>
           </a>
       </div>
        </div>



<?php require 'footer.php' ?>
<script type="text/javascript">
  $(document).on("click",".notavailable",function(){
 alert("We will upload that category soon ");
});
</script>
</body>
</html>
