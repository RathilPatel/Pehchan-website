<?php
include "../include/headerandfooter/dbh.php";

$request = $_POST['request'];   // request

// Get username list
if($request == 1){
    $search = $_POST['search'];

    $query = "SELECT * FROM Product WHERE Product_Name like'%".$search."%'";
    $result = mysqli_query($con,$query);
    
    while($row = mysqli_fetch_array($result) ){
        $response[] = array("Product_Name" => $row['Product_Name']);
    }

    // encoding array to json format
    echo json_encode($response);
    exit;
}

// Get details
if($request == 2){
    $Product_Name = $_POST['Product_Name'];
    $sql = "SELECT * FROM Product WHERE Product_Name=".$Product_Name;

    $result = mysqli_query($con,$sql);

    $users_arr = array();

    while( $row = mysqli_fetch_array($result) ){
        $gsm = $row['GSM'];
        $moq = $row['MOQ'];
        
        $users_arr[] = array("gsm" => $gsm, "moq" => $$moq);
    }

    // encoding array to json format
    echo json_encode($users_arr);
    exit;
}
