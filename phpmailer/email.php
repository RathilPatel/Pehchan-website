<?php
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;
	$servername = "localhost";
	$username = "root";
	$password = "sundaY05@";
	$dbname = "Pehchan";

	$conn = new mysqli($servername, $username, $password, $dbname);

	if ($conn->connect_error) {
    	die("Connection failed: " . $conn->connect_error);
	}
	//echo "Connected successfully";
	$category = $_POST['category'];
<<<<<<< HEAD
	$attachment = $_FILES['attachment']['tmp_name'];
	//$attachment = '/home/shyamal/Downloads/linearpredictivecodingoshaughnessy1988.pdf';
	$query = "select Name, email, status from mailer where status='subscribed' and category='$category'";
=======
	//$attachment = '/home/shyamal/Downloads/linearpredictivecodingoshaughnessy1988.pdf';
	$query = "select Name, email, status, category from mailer where status='subscribed' and category='$category'";
>>>>>>> eddf64879547836b3e13caaed8c7064732fc6e95
	$result = $conn->query($query);

	while($row = $result->fetch_assoc()) {
		$name = $row['Name'];
		$email = $row['email'];
		$status = $row['status'];
		$category1 = $row['category'];


		require 'vendor/autoload.php';
		$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
		try {
		    //Server settings
		    //$mail->SMTPDebug = 1;                                 // Enable verbose debug output
		    $mail->isSMTP();                                      // Set mailer to use SMTP
		    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
		    $mail->SMTPAuth = true;                               // Enable SMTP authentication
		    $mail->Username = 'makwanashyamal11596@gmail.com';                 // SMTP username
		    $mail->Password = 'elevenMAY96';                           // SMTP password
		    $mail->SMTPSecure = 'TLS';                            // Enable TLS encryption, `ssl` also accepted
		    $mail->Port = 587;                                    // TCP port to connect to

		    //Recipients
		    $mail->setFrom('makwanashyamal11596@gmail.com', 'Shyamal Makwana');
		    $mail->addAddress($email);
            $file_to_attach = $_FILES['attachment']['tmp_name'];
            $filename=$_FILES['attachment']['name'];
            $mail->AddAttachment($file_to_attach , $filename);
            //$mail->AddAttachment($attachment);

		    /*$body = "<p><strong>Dear Student,</strong><br><br> This notice is regarding regular practicals that will be starting from second week of December i.e <b>11th December 2017</b>All practicals are important. So, its compulsory for all management students to attend the practicals which will be having internal marks that will be added in your semester assessments.<br><br><b>Notice:</b><br>Only those students will be allowed to attend the practicals, those who will be having <b>100%</b> attendance in lectures. So, kindly please attend the lectures.<br><br>Thanks & Regards<br>NMIMS GLOBAL ACCESS SCHOOL FOR CONTINUING EDUCATION<br><br><br><br><b>This is machine generated email. Please do not reply to the message.</b></p>";*/

		    //Content
		    $mail->isHTML(true);                                  // Set email format to HTML
		    $mail->Subject = 'Test';
<<<<<<< HEAD
		    $mail->Body    = 'Test<br><br> <a href = "unsubscribe.html">Unsubscribe</a>';
=======
		    $mail->Body    = 'Test<br><br> <a href = "http://www.testing.mypehchan.com/unsubscribe.html">Unsubscribe</a>';
>>>>>>> eddf64879547836b3e13caaed8c7064732fc6e95
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
