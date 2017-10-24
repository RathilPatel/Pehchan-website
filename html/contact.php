<!DOCTYPE html>
<html>
<head>
	<title>Contact us!</title>


<?php require 'header.php' ?>

    <script type="text/javascript">

      function validateRegEx(regex, input, helpText, helpMessage) {
        // See if the input data validates OK
        if (!regex.test(input)) {
          // The data is invalid, so set the help message and return false
          if (helpText != null)
            helpText.innerHTML = helpMessage;
          return false;
        }
        else {
          // The data is OK, so clear the help message and return true
          if (helpText != null)
            helpText.innerHTML = "";
          return true;
        }
      }

      function validateNonEmpty(inputField, helpText) {
        // See if the input value contains any text
        return validateRegEx(/.+/,
          inputField.value, helpText,
          "Please enter a value.");
      }

      function validateLength(minLength, maxLength, inputField, helpText) {
        // See if the input value contains at least minLength but no more than maxLength characters
        return validateRegEx(new RegExp("^.{" + minLength + "," + maxLength + "}$"),
          inputField.value, helpText,
          "Please enter a value " + minLength + " to " + maxLength +
          " characters in length.");
      }

      function validateZipCode(inputField, helpText) {
        // First see if the input value contains data
        if (!validateNonEmpty(inputField, helpText))
          return false;

        // Then see if the input value is a ZIP code
        return validateRegEx(/^\d{6}$/,
          inputField.value, helpText,
          "Please enter a 6-digit ZIP code.");
      }

      function validateGST(inputField, helpText) {
        // First see if the input value contains data
        if (!validateNonEmpty(inputField, helpText))
          return false;

        // Then see if the input value is a date
        return validateRegEx(/^[0-9]{2}[A-Z]{5}[0-9]{4}[A-Z]{1}[1-9A-Z]{1}Z[0-9A-Z]{1}$/,
          inputField.value, helpText,
          "Please enter a GST Registeration number (for example, 12ABCDE3456F7Z8).");
      }

      function validatePhone(inputField, helpText) {
        // First see if the input value contains data
        if (!validateNonEmpty(inputField, helpText))
          return false;

        // Then see if the input value is a phone number
        return validateRegEx(/^\d{3}\d{3}\d{4}$/,
          inputField.value, helpText,
          "Please enter a phone number (for example, 1234567890).");
      }

      function validateEmail(inputField, helpText) {
        // First see if the input value contains data
        if (!validateNonEmpty(inputField, helpText))
          return false;

        // Then see if the input value is an email address
        return validateRegEx(/^[\w\.\-\_\+]+@[\w-]+(\.\w{2,3})+$/,
          inputField.value, helpText,
          "Please enter an email address (for example, johndoe@acme.com).");
      }

      function validateIFSC(inputField, helpText) {
        // First see if the input value contains data
        if (!validateNonEmpty(inputField, helpText))
          return false;

        // Then see if the input value is a date
        return validateRegEx(/^[A-Za-z]{4}\d{7}$/,
          inputField.value, helpText,
          "Please enter a IFSC Code (for example, SBIN1234567).");
      }

      function validatePAN(inputField, helpText) {
        // First see if the input value contains data
        if (!validateNonEmpty(inputField, helpText))
          return false;

        // Then see if the input value is a date
        return validateRegEx(/^([a-zA-Z]){5}([0-9]){4}([a-zA-Z]){1}?$/,
          inputField.value, helpText,
          "Please enter a PAN Number (for example, ABCDE1234F).");
      }

      function validateAccount(inputField, helpText) {
        // First see if the input value contains data
        if (!validateNonEmpty(inputField, helpText))
          return false;

        // Then see if the input value is a phone number
        return validateRegEx(/^\d{9,18}$/,
          inputField.value, helpText,
          "Please enter a Account number with 9-18 Digits.");
      }

      function placeOrder(form) {
        if (validateLength(1, 50, form["Name"], form["message_help1"]) &&
      		validateLength(1, 50, form["address"], form["message_help2"])&&
            validateZipCode(form["zipcode"], form["zipcode_help"]) &&
            validateGST(form["GST"], form["GST_help"]) &&
            validatePAN(form["PAN"], form["PAN_help"]) &&
            validateIFSC(form["IFSC"], form["IFSC_help"]) &&
            validateLength(1, 20, form["City"], form["message_help3"]) &&
            validateLength(1, 50, form["branch"], form["message_help5"])&&
            validateLength(1, 50, form["Dealer"], form["message_help4"])&&
            validateNonEmpty(form["name"], form["name_help"]) &&
            validatePhone(form["phone"], form["phone_help"]) &&
            validatePhone(form["account"], form["account_help"]) &&
            validateEmail(form["email"], form["email_help"])) {
            window.alert("Successful");
        } else {
          alert("ERROR!!!");
        }
      }
    </script>
</head>
<body  onload="document.getElementById('message').focus()"	>
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
						<input id="Name" type="text" name="Name" class="validate"   onblur="validateLength(1, 50, this, document.getElementById('message_help1'))" >
						<label for="Name">Full Name</label>
						<span id="message_help1" class="help"></span>

					</div>

					<div class="input-field col s12">
						<input id="Address" type="text" name="Address" class="validate"  onblur="validateLength(1, 50, this, document.getElementById('message_help2'))" >
						<label for="Address">Address</label>
						<span id="message_help2" class="help"></span>

					</div>

					<div class="input-field col s12">
						<input id="Pincode" type="text" name="Pincode" class="validate"           onblur="validateZipCode(this, document.getElementById('zipcode_help'))" >
						<label for="Pincode">Pincode</label>
						<span id="zipcode_help" class="help"></span>
					</div>

						<div class="input-field col s12">
							<input id="City" type="text" name="City" class="validate" onblur="validateLength(1, 20, this, document.getElementById('message_help3'))">
							<label for="City">City</label>
							<span id="message_help3" class="help"></span>

						</div>

						<div class="input-field col s12">
						<input id="GST" type="text" name="GST" class="validate"   onblur="validateGST(this, document.getElementById('GST_help'))" >
						<label for="GST">GST No.</label>
						<span id="GST_help" class="help"></span>

						</div>

					<div class="input-field col s12">
					<input id="Typeofdealer" type="text" name="Typeofdealer" class="validate" onblur="validateLength(1, 20, this, document.getElementById('message_help4'))">
					<label for="Typeofdealer">Type of Dealer</label>
					<span id="message_help4" class="help"></span>

					</div>

					<div class="input-field col s12">
						<input id="PANNumber" type="text" name="PANNumber" class="validate"   onblur="validatePAN(this, document.getElementById('PAN_help'))">
						<label for="PANNumber">PAN Number (if not registered under GST)</label>
						    <span id="PAN_help" class="help"></span>
					</div>

					<div class="input-field col s12">
						<input id="Contactperson" type="text" name="Contactperson" class="validate">
						<label for="Contactperson">Contact Person</label>
					</div>

					<div class="input-field col s12">
						<input id="contact" type="text" name="contact" class="validate" onblur="validatePhone(this, document.getElementById('phone_help'))">
						<label for="contact">Contact</label>
						<span id="phone_help" class="help"></span>

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
					<input id="Accountno" type="text" name="Accountno" class="validate"   onblur="validateAccount(this, document.getElementById('account_help'))">
					<label for="Accountno">Account number</label>
					 <span id="account_help" class="help"></span>
					</div>

					<div class="input-field col s12">
					<input id="branchaddress" type="text" name="branchaddress" class="validate">
					<label for="branchaddress">Bank address</label>

					</div>

					<div class="input-field col s12">
					<input id="IFSC" type="text" name="IFSC" class="validate"  onblur="validateIFSC(this, document.getElementById('IFSC_help'))">
					<label for="IFSC">IFSC number</label>
					        <span id="IFSC_help" class="help"></span>
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
