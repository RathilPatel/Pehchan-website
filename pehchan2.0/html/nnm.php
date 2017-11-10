<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>NNM</title>
    <?php require '../headerandfooter/header.php'; ?>
    <style media="screen">
      body{
        background: url("../images/shoes.jpg");
        position: cover;


      }
      .coming{
        position: absolute;
        left:35%;
        top:30%;

      }
      .text1{
        border-width: thin;
        border-color: white;

      }
    </style>
  </head>
  <body>
<?php require 'navbar.php'; ?>
<div class="animated slideInDown coming white-text">
   <h1>
     <span>Coming Soon</span>
     <form class="" action="notify.php" method="post">
       <input id="text1" type="text" name="email" placeholder="we'll notify you when its ready">
       <input type="submit" class="btn black white-text" style="width:100%;" >
    </form>
   </h1>
  </div>
  </body>
</html>
