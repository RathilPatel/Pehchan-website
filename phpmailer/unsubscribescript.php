<?php
$con = mysqli_connect("localhost","root","","Pehchan");
if(!$con) {
    die("Connection Failed :" .mysqli_connect_error());
}

//mysql_select_db("dbname", $con);

//$sno = (integer)$_GET['id'];
if (isset($_POST['Unsubscribe'])) {
	$email = $_POST['email'];

	$query = "update Company_Contact_Data set status = 'unsubscribed' where email = '$email'";
	mysqli_query($con, $query);
	echo "You have Successfully unsubscribed.";
}
	
?>
