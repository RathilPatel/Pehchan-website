<?php
//action.php
require '../include/dbh.php';

if(isset($_POST["action"]))
{
 
 if($_POST["action"] == "fetch")
 {
  $query = "SELECT `Product_id`, `Product_Name`, `Description`, `Product_Image` FROM Product";
  $result = mysqli_query($con, $query);
  $output = '
      <table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
                <thead>
    		<tr>
    			<th width= "10%">Handout</th>
     			<th width="15%">ID</th>
  			<th width="10%">Name</th>
 			<th width="20%">Desc</th>
   		<th width="15%">Image</th> 
    			<th width="5%">Update</th>
    		       <th width="10%">Remove</th>
                </tr>
              </thead>
              <tfoot>
               <tr>
    			<th width= "10%">Handout</th>
     			<th width="15%">ID</th>
  			<th width="10%">Name</th>
 			<th width="20%">Desc</th>
   		 <th width="15%">Image</th>  
    			<th width="5%">Update</th>
    		       <th width="10%">Remove</th>
                </tr>
              </tfoot>
  ';
   while($row = mysqli_fetch_array($result))
  {
   $output .= '

    <tr>
    <td><button type="button" name="handout" class="btn btn-info bt-xs handout" id="'.$row["Product_id"].'">Handout</button></td>
     <td>'.$row["Product_id"].'</td>
      <td>'.$row["Product_Name"].'</td>
       <td>'.$row["Description"].'</td>
       <td>'.$row['Product_id'].'</td>
       
       
       <td><button type="button" name="edit" class="btn btn-primary bt-xs edit" id="'.$row["Product_id"].'">Edit</button></td>
     <td><button type="button" name="delete" class="btn btn-danger bt-xs delete" id="'.$row["Product_id"].'">Remove</button></td>
    </tr>
   ';
  }
  $output .= '</table>';
  echo $output;
 }



 if($_POST["action"] == "delete")
 {
 
  $query = "DELETE FROM `Product` WHERE Product_id = '".$_POST["Product_id"]."'";
  if(mysqli_query($con, $query))
  {
   echo 'Product Deleted';
  }
 }
 
 
}
//<img class=" img-fluid d-block mx-auto" style="height:200px; width:200px;" src="data:image/jpeg;base64,'.echo base64_encode($row['Product_Image']).' " alt=" //'.php echo $row['Product_id'].'">
?>




