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
						<select name="Type">
							<option value="" disabled selected>Choose Type of Client</option>
							<option value="Vendor">Vendor</option>
							<option value="Customer">Customer</option>
						</select>
					</div>
					<div class="input-field col s12">
						<input id="Name" type="text" name="Name" class="validate">
						<label for="Name">Full Name</label>
					</div>

					<div class="input-field col s12">
						<input id="Address" type="text" name="Address" class="validate">
						<label for="Address">Address</label>
					</div>

					<div class="input-field col s12">
						<input id="Pincode" type="text" name="Pincode" class="validate">
						<label for="Pincode">Pincode</label>
					</div>

						<div class="input-field col s12">
							<input id="City" type="text" name="City" class="validate">
							<label for="City">City</label>
						</div>

						<div class="input-field col s12">
						<input id="GST" type="text" name="GST" class="validate">
						<label for="GST">GST No.</label>
						</div>

					<div class="input-field col s12">
					<input id="Typeofdealer" type="text" name="Typeofdealer" class="validate">
					<label for="Typeofdealer">Type of Dealer</label>
					</div>

					<div class="input-field col s12">
						<input id="PANNumber" type="text" name="PANNumber" class="validate">
						<label for="PANNumber">PAN Number (if not registered under GST)</label>
					</div>

					<div class="input-field col s12">
						<input id="Contactperson" type="text" name="Contactperson" class="validate">
						<label for="Contactperson">Contact Person</label>
					</div>

					<div class="input-field col s12">
						<input id="contact" type="text" name="contact" class="validate">
						<label for="contact">Contact</label>
					</div>

					<div class="input-field col s12">
						<input id="Email" type="email" name="Email" class="validate">
						<label for="Email">Email</label>
					</div>

					<div class="input-field col s12">
					<input id="Bankname" type="text" name="Bankname" class="validate">
					<label for="Bankname">Bank name</label>
					</div>

					<div class="input-field col s12">
					<input id="Accountno" type="text" name="Accountno" class="validate">
					<label for="Accountno">Account number</label>
					</div>

					<div class="input-field col s12">
					<input id="branchaddress" type="text" name="branchaddress" class="validate">
					<label for="branchaddress">Bank address</label>
					</div>

					<div class="input-field col s12">
					<input id="IFSC" type="text" name="IFSC" class="validate">
					<label for="IFSC">IFSC number</label>
					</div>
				</div>
				<input type="submit" name="Submit1" value="Submit" class="waves-effect waves-light btn"style="width:100%;" >

			</form>

		 </div>
		 <!-- <div class="modal-footer">
			 <input type="submit" name="Submit1" value="Submit" class="waves-effect waves-light btn"style="width:100%;" >
			 <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Submit</a>
		 </div> -->
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
