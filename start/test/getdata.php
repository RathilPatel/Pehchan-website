<?php

$con = mysqli_connect("localhost","root","","Pehchan");

if(!$con) {
    die("Connection Failed :" .mysqli_connect_error());
}


$imagename=$_FILES["myimage"]["name"]; 

//Get the content of the image and then add slashes to it 
$imagetmp=addslashes (file_get_contents($_FILES['myimage']['tmp_name']));

//Insert the image name and image content in image_table
$insert_image="INSERT INTO image_table VALUES('$imagetmp','$imagename')";

mysqli_query($con,$insert_image);

?>