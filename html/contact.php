<!DOCTYPE html>
<html>
<head>
	<title>Contact us!</title>


<?php require 'header.php' ?>
</head>
<body>
<?php require 'navbar.php' ?>
<br>
  <div onloadedmetadata="" class="row">


		<div class="col s6">
			<!-- Modal Trigger -->
	 <a class="waves-effect waves-light btn modal-trigger" href="#modal1">Register</a>

	 <!-- Modal Structure -->
	 <div id="modal1" class="modal modal-fixed-footer">
		 <div class="modal-content">
			 <h4>Register to connect with us!</h4>
			 <form class="col s12" action="registerclient.php" method="post">

				<div class="row">
					<div class="input-field col s12">
						<select>
							<option value="" disabled selected>Choose Type of Client</option>
							<option value="1">Vendor</option>
							<option value="2">Customer</option>
						</select>
					</div>
					<div class="input-field col s12">
						<input id="first_name" type="text" class="validate">
						<label for="first_name">First Name</label>
					</div>
					<div class="input-field col s12">
						<input id="last_name" type="text" class="validate">
						<label for="last_name">Last Name</label>
					</div>

					<div class="input-field col s12">
						<input id="email" type="email" class="validate">
						<label for="email">Email</label>
					</div>

					<div class="input-field col s12">
						<input id="last_name" type="text" class="validate">
						<label for="last_name">Address</label>
					</div>

					<div class="input-field col s12">
						<input id="last_name" type="text" class="validate">
						<label for="last_name">Pincode</label>
					</div>

						<div class="input-field col s12">
							<input id="last_name" type="text" class="validate">
							<label for="last_name">City</label>
						</div>

						<div class="input-field col s12">
						<input id="last_name" type="text" class="validate">
						<label for="last_name">GST No.</label>
						</div>

					<div class="input-field col s12">
					<input id="last_name" type="text" class="validate">
					<label for="last_name">Type of Dealer</label>
					</div>

					<div class="input-field col s12">
					<input id="last_name" type="text" class="validate">
					<label for="last_name">Bank name</label>
					</div>

					<div class="input-field col s12">
					<input id="last_name" type="text" class="validate">
					<label for="last_name">Account number</label>
					</div>

					<div class="input-field col s12">
					<input id="last_name" type="text" class="validate">
					<label for="last_name">Bank address</label>
					</div>

					<div class="input-field col s12">
					<input id="last_name" type="text" class="validate">
					<label for="last_name">IFSC number</label>
					</div>
				</div>



				<div class="input-field col s12">
					<textarea id="Message" class="materialize-textarea validate"></textarea>
					 <label for="Message">Message</label>
				</div>
			</form>

		 </div>
		 <div class="modal-footer">
			 <input type="submit" name="Submit1" value="Submit" class="waves-effect waves-light btn"style="width:100%;" >
			 <!-- <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Submit</a> -->
		 </div>
	 </div>

		</div>

    <form class="col s6 offset-s6" action="feedback.php" method="POST">
      <div class="row">

				<h3 class="center">FEEDBACK!</h3>
        <div class="input-field col s6">
          <input id="first_name" type="text" class="validate" name="first_name" required>
          <label for="first_name">First Name</label>
        </div>
        <div class="input-field col s6">
          <input id="last_name" type="text" class="validate" name="last_name" required>
          <label for="last_name">Last Name</label>
        </div>
      </div>

      <div class="row">
        <div class="input-field col s12">
          <input id="email" type="email" class="validate"name="email" required>
          <label for="email">Email</label>
        </div>
      </div>

			<div class="input-field col s12">
				<textarea id="Message" class="materialize-textarea" name="message" required></textarea>
				 <label for="Message">Message</label>
			</div>
			<input type="submit" name="Submit" value="Submit" class="waves-effect waves-light btn"style="width:100%;" >

    </form>
  </div>
<?php require 'footer.php' ?>

</body>
</html>
