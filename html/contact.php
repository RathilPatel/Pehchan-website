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
			 <form class="col s12">



				<div class="row">
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
			 <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Submit</a>
		 </div>
	 </div>

		</div>

    <form class="col s6 offset-s6">
      <div class="row">
				<h3>FEEDBACK!</h3>
        <div class="input-field col s6">
          <input id="first_name" type="text" class="validate">
          <label for="first_name">First Name</label>
        </div>
        <div class="input-field col s6">
          <input id="last_name" type="text" class="validate">
          <label for="last_name">Last Name</label>
        </div>
      </div>

      <div class="row">
        <div class="input-field col s12">
          <input id="email" type="email" class="validate">
          <label for="email">Email</label>
        </div>
      </div>
			<div class="input-field col s12">
				<textarea id="Message" class="materialize-textarea"></textarea>
				 <label for="Message">Message</label>
			</div>
			<a class="waves-effect waves-light btn"style="width:100%;" >Submit</a>
    </form>
  </div>
<?php require 'footer.php' ?>

</body>
</html>
