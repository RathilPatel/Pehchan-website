<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Contact</title>
    <?php require '../headerandfooter/header.php'; ?>

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
  <body  onload="document.getElementById('message').focus()">
    <div class="parallax-container " style="max-height:20%;">
      <div class="parallax-text">
        <p>Pehchan</p>
        <p>Reflect Your identity</p>
      </div>
      <div class="parallax " style="max-height:20%;">
        <img src="../images/10722.jpg" >
      </div>
    </div>
    <?php require 'navbar.php'; ?>
    <div class="row">
      <div class="col l6 s12">

      </div>
      <div class="col l6 s12">

      </div>
    </div>
    <?php require '../headerandfooter/footer.php'; ?>
  </body>
</html>
