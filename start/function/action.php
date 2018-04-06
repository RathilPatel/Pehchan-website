<?php
//action.php
require '../include/dbh.php';

if(isset($_POST["action"]))
{

 if($_POST["action"] == "fetch")
 {
  $query = "SELECT `Username`, `email`, `Role` FROM Inventory_login";
  $result = mysqli_query($con, $query);
  $output = '
   <table class="table table-bordered table-striped">
    <tr>
     <th width="15%">Username</th>
     <th width="50%">Email</th>
     <th width="15%">Role</th>
     <th width="10%">Remove</th>
    </tr>
  ';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '

    <tr>
     <td>'.$row["Username"].'</td>
      <td>'.$row["email"].'</td>
       <td>'.$row["Role"].'</td>
     <td><button type="button" name="delete" class="btn btn-danger bt-xs delete" id="'.$row["Username"].'">Remove</button></td>
    </tr>
   ';
  }
  $output .= '</table>';
  echo $output;
 }



 if($_POST["action"] == "delete")
 {
 
  $query = "DELETE FROM `Inventory_login` WHERE Username = '".$_POST["Username"]."'";
  if(mysqli_query($con, $query))
  {
   echo 'User Deleted from Database';
  }
 }
}
?>
