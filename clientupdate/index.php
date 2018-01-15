<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Client Form</title>
    <?php require '/headerandfooter/header.php' ?>
  </head>
  <body>
    <div class="col l9">

      <div class="">
        <form class="" action="" method="post">
          <div class="row">
             <div class="input-field col s6">
               <input id="first_name" type="text" name="fname" class="validate">
               <label for="first_name">First Name</label>
             </div>
             <div class="input-field col s6">
               <input id="last_name" type="text" name="lname" class="validate">
               <label for="last_name">Last Name</label>
             </div>
           </div>
           <div class="row">
              <div class="input-field col s12">
                <input id="email" type="email" name="email" class="validate">
                <label for="email">Email</label>
              </div>
            </div>
            <div class="row">
            <div class="input-field col s12">
              <input id="password" type="password" name="password" class="validate">
              <label for="password">Password</label>
            </div>
          </div>
          <p>
            <input class="with-gap" name="group1" type="radio" id="test1"  />
            <label for="test1">Admin</label>
          </p>
          <p>
            <input class="with-gap" name="group1" type="radio" id="test3"  />
            <label for="test3">Employee</label>
          </p>
          <input type="submit" name="submit" value="Submit" class="waves-effect waves-light btn">

        </form>

      </div>
    </div>

  </body>
</html>
