<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>NNM</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php require '../headerandfooter/header.php'; ?>
    <style media="screen">
      body{
        background: url("../images/fashion.jpg");
        background-repeat:no-repeat;
  background-size:cover;


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
<div class=" col s12 animated slideInDown coming ">
    <img src="" alt="">
   <h1><span>Coming Soon</span> </h1>
     <form class="" action="notify.php" method="post">
       <input id="text1" type="text" name="email" placeholder="we'll notify you when its ready" class="black-text">
       <input type="submit" class="btn black white-text disabled" style="width:100%;" id="button">
    </form>
   </h1>
  </div>
  </body>
</html>
