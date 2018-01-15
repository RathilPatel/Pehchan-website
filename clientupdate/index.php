
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>title</title>
    <?php require 'connection/init.php'; ?>
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script src=" ../materialize/js/materialize.min.js"></script>
    <link rel="stylesheet" href="../materialize/css/materialize.min.css">

  </head>
  <body>
    <div class="row">
      <div class="col s8 offset-s3">
  <h1>FILL THE CLIENT DETAILS</h1>
      </div>
    </div>
<form class="" action="postdata.php" method="POST">

      <div class="row">
         <div class="input-field col s6 offset-s3">
           <input id="first_name" type="text" name="name" class="validate" required>
           <label for="first_name">Name</label>
         </div>

       </div>

       <div class="row">
         <div class="input-field col s6 offset-s3">
           <input id="contact" type="text" name="contact" class="validate" required>
           <label for="contact">Contact Number</label>
         </div>
       </div>
       <div class="row">
         <div class="input-field col s6 offset-s3">
           <input id="cname" type="text" name="cname" class="validate" required>
           <label for="cname">Company name</label>
         </div>
       </div>
       <div class="row">
         <div class="input-field col s6 offset-s3">
           <input id="req" type="text" name="req" class="validate" required>
           <label for="req">Requirments</label>
         </div>
       </div>
       <div class="row">
         <div class="input-field col s6 offset-s3">
           <input id="cdesc" type="text" name="cdesc" class="validate" required>
           <label for="cdesc">Companies Description</label>
         </div>
       </div>
       <div class="row">
          <div class="input-field col s6 offset-s3">
            <input id="email" type="email" name="email" class="validate" required>
            <label for="email">Email</label>
          </div>
        </div>
        <div class="row">
        <div class="input-field col s6 offset-s3">
          <select name="priority" >
            <!-- <option value="" disabled>Choose urgency </option> -->
            <option value="URGENT">Urgent</option>
            <option value="ENQUIRY">Enquiry</option>
          </select>

        </div>
      </div>
      <div class="row">
        <div class="col s6 offset-s3">
          <input type="submit" name="submit" value="Submit" class="waves-effect waves-light btn col s12 ">

        </div>
      </div>

</form>


<script type="text/javascript">
$(document).ready(function() {
$('select').material_select();
});
</script>
  </body>
</html>
