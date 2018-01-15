<?php
include '../Connection/DBH.php';

/*function user_exists($username,$type){

	/*$username= $username;//sanitize($username);
	$type=$type;//sanitize($type);
	if($type == 1){
	return (mysqli_result(mysqli_query("SELECT COUNT(username) FROM `student` where `username`='$username'"),0) == 1) ? true : false;
	}
	elseif ($type == 2) {
			return (mysqli_result(mysqli_query("SELECT COUNT(username) FROM `teacher` where `username`='$username'"),0) == 1) ? true : false;

	}
	elseif($type == 0){

return (mysqli_result(mysqli_query("SELECT COUNT(username) FROM `admin` where `username`='$username'"),0) == 1) ? true : false;

echo 'function is called :';
return true;
	//}
}
*/
/*function user_id_from _username($username,$type){
	$username=sanitize($username);
	$type=sanitize($type);
	if($type == 1){
	return mysql_result(mysqli_query("SELECT `username` FROM `student` where `username`='$username'"),0,'username');
	}
	elseif($type == 2){
			return mysql_result(mysqli_query("SELECT `username` FROM `teacher` where `username`='$username'"),0,'username');
	}
	elseif($type == 0){
			return mysql_result(mysqli_query("SELECT `username` FROM `admin` where `username`='$username'"),0,'username');

	}

}*/

/*function login($username,$password,$type){

 //$username = user_id_from_username($username);

 $username = $username;
 $password = $password;
 $type = $type;

if($type == 1){
		$sql="SELECT COUNT(username) FROM student where username='$username' AND password='$password'";
			return(mysqli_result(mysqli_query($sql),0) == 1) ? $username : false;
	}
	elseif ($type == 2) {
			$sql="SELECT COUNT(username) FROM teacher where username='$username' AND password='$password'";
			return (mysqli_result(mysqli_query($sql),0) == 1) ? $username : false;

	}
	elseif($type == 3){
			$sql="SELECT COUNT(username) FROM admin where username='$username' AND password='$password'";
			$result = mysqli_query($con,$sql);
			return (mysqli_fetch_assoc($result) == 1) ? $username : false;
	}

}
/*/
function login($username,$password,$type){
$con = mysqli_connect("localhost","root","","pehchan");
 //$username = user_id_from_username($username);

 $username = $username;
 $password = $password;
$sql="SELECT COUNT(username) FROM  where username='$username' AND password='$password'";
$num_rows= mysqli_query($con,$sql);
return(mysqli_num_rows($num_rows) == 1) ? $username : false;


//
// if($type == 1){
// 		$sql="SELECT COUNT(username) FROM student where username='$username' AND password='$password'";
// 		$num_rows = mysqli_query($con,$sql);
// 			return(mysqli_num_rows($num_rows) == 1) ? $username : false;
// 	}
// 	elseif ($type == 2) {
// 			$sql="SELECT COUNT(username) FROM teacher where username='$username' AND password='$password'";
// 			$num_rows = mysqli_query($con,$sql);
// 			return (mysqli_num_rows($num_rows) == 1) ? $username : false;
//
// 	}
// 	elseif($type == 3){
// 			$sql="SELECT username FROM admin where username='$username' AND password='$password'";
// 			$num_rows = mysqli_query($con,$sql);
// 			return (mysqli_num_rows($num_rows) == 1) ? $username : false;
// 	}
//
// }
/*
function user($username,$password){

	return (mysql_result(mysqli_query("SELECT COUNT(username) FROM `admin` where `username`='$username' AND `password`='$password"),0) == 1) ? true : false;
}
function register($fname,$lname,$faname,$moname,$address,$pincode,$email,$pno,$gno,$type,$password)
{

	$salt = md5($email);
	mysqli_query("INSERT INTO `student`(`username`, `salt`, `Fname`, `Lname`, `Faname`, `Mname`,`address`,`pincode` ,`email`,`pno`,`gno`, `type`, `password`)
				 			    VALUES ('$fname','$lname','$faname','$moname','$address','$pincode','$email','$pno','$gno','$type','$password')")
}
*/
