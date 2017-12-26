<?php
    require 'connect.php';
    
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['Submit1'])) {
        $type_of_client = $_POST['Type'];
        $First_Name = $_POST['Name'];
        $Address = $_POST['Address'];
        $Pincode = $_POST['Pincode'];
        $City = $_POST['City'];
        $gst = $_POST['GST'];
        $Typeofdealer = $_POST['Typeofdealer'];
        $pannumber = $_POST['PANNumber'];
        $contactperson = $_POST['Contactperson'];
        $ContactNo = $_POST['contact'];
        $Email = $_POST['Email'];
        $Bankname = $_POST['Bankname'];
        $BankAccNo = $_POST['Bankname'];
        $BankAddr = $_POST['branchaddress'];
        $ifsc_code = $_POST['IFSC'];
        
        
        $sql1 = "INSERT INTO Register (`Type_of_client`,`Full_Name`, `Address`, `Pincode`, `City`, `GST_No`, `Dealer_Type`, `Pan_No`, `Contact_Person`,`Contact_No`, `email`, `Bank_Name`, `Bank_Account_No`, `Bank_Address`, `IFSC_No`) VALUES ('$type_of_client','$First_Name','$Address','$Pincode','$City','$gst','$Typeofdealer','$pannumber','$contactperson','$ContactNo','$Email','$Bankname','$BankAccNo','$BankAddr','$ifsc_code')";
        
        mysqli_query($con, $sql1); 
    }
}
