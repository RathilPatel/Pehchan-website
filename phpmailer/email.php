<?php
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "Pehchan";

	$conn = new mysqli($servername, $username, $password, $dbname);

	if ($conn->connect_error) {
    	die("Connection failed: " . $conn->connect_error);
	}
	//echo "Connected successfully";
	//$category = $_POST['category'];

	//$attachment = $_FILES['attachment']['tmp_name'];
	$attachment = '/home/shyamal/Downloads/Pehchan_catalog.pdf';
    $attachment1 = '/home/shyamal/Downloads/ThankYou.jpg';

	$query = "select email from Company_Contact_Data WHERE Company_Name = 'Pehchan'";
	$result = $conn->query($query);

	while($row = $result->fetch_assoc()) {
		//$name = $row['Name'];
		$email = $row['email'];
		//$status = $row['status'];
		//$category1 = $row['category'];


		require 'vendor/autoload.php';
		$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
		try {
		    //Server settings
		    $mail->SMTPDebug = 1;                                 // Enable verbose debug output
		    $mail->isSMTP();                                      // Set mailer to use SMTP
		    $mail->Host = 'smtp.gmail.com';                       // Specify main and backup SMTP servers
		    $mail->SMTPAuth = true;                               // Enable SMTP authentication
		    $mail->Username = 'sales@mypehchan.com';                 // SMTP username
		    $mail->Password = 'pehchan06';                           // SMTP password
		    $mail->SMTPSecure = 'TLS';                            // Enable TLS encryption, `ssl` also accepted
		    $mail->Port = 587;                                    // TCP port to connect to

		    //Recipients
		    $mail->setFrom('sales@mypehchan.com', 'Deep Sett');
		    $mail->addAddress($email);
            //$file_to_attach = $_FILES['attachment']['tmp_name'];
            /*$filename=$_FILES['attachment']['name'];
            $mail->AddAttachment($file_to_attach , $filename);*/
            $mail->AddAttachment($attachment);
            $mail->AddAttachment($attachment1);


            $body = "<p><strong>Dear Sir,<br><br>

      They Say some Days of a Professional Journey are Meaningful, but you have made our Journey Memorable & Fulfilling every day, with your Support and Patronage. For those that have been associated with us for years, to those that interacted with us for the first time, All we can say with Great Gratitude is THANK YOU!!!</strong>
      <br><br>
      Please find attached our Apparel Catalog. Also soon we would be sending you our Compressed Product Catalog, as well us our regular Gifting Offerings. <br><br><br>
Regards,<br>
<strong>Deep Sett
<br><br>
PEHCHAN
</strong><br>
Room No. 4, Ground Floor,<br>
Behind Dr. Farooqui's (Same Compound)<br>
St. Martin Road, Off Turner Road,<br>
Near Royal China and Union Bank, Bandra West<br>
Mumbai - 400 050<br>
<strong>
Mobile: +91 98203 10177<br>
GSTIN: 27AGQPJ6274M1ZL
</strong>
<br><br>
<p style='color:red'>Email us at :</p> deep@mypehchan.com <br><br> Visit us on www.mypehchan.com <br>OR connect with us via<br>
Facebook : https://www.facebook.com/MYPEHCHAN
<br><br><a href = 'http://www.testing.mypehchan.com/mailer/unsubscribe.html'>Unsubscribe</a>
";

		    //Content
		    $mail->isHTML(true);                                  // Set email format to HTML
		    $mail->Subject = 'Thank you For Visiting Pehchan at Corporate Gifts Exhibition 2018';

		    $mail->Body = $body;
            //$mail->AltBody = '<a href = "http://www.testing.mypehchan.com/unsubscribe.html">Unsubscribe</a>';

		    //$mail->Body    = 'Test<br><br> <a href = "http://www.testing.mypehchan.com/unsubscribe.html">Unsubscribe</a>';
//ftp://mypenynj@ftp.mypehchan.com/199.188.200.59/mailer/unsubscribe.html
		    // <a href = "http://www.testing.mypehchan.com/unsubscribe.html" >Unsubscribe</a>
		    //$mail->AltBody = strip_tags($body);

		    if($mail->send()) {
				echo "Message Sent";
			}
			else {
				echo "Message not sent";
			}

		}
		catch (Exception $e) {
		    echo 'Mailer Error: ' . $mail->ErrorInfo;
		}
	}
?>
