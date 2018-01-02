<?php
$connect = mysqli_connect("localhost", "root", "sundaY05@", "Pehchan");
if(isset($_POST["submit"]))
{
$file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
$pcode = $_POST[""];
$pdesc = $_POST[""];
$pname = $_POST[""];
$gsm = $_POST[""];
$mou = $_POST[""];
$price = $_POST[""];
$sampleprice = $_POST[""];
$query = "INSERT INTO products(product_id,product_name,description,image,sample_price,mou,price) VALUES ('$pcode','$pname','$pdesc','$file','$smapleprice','$mou','$price','$gsm')";
if(mysqli_query($connect, $query))
{
   echo '<script>alert("Image Inserted into Database")</script>';
}
}
?>


<div class="col l9">

  <h1>ADDING PRODUCT</h1>
  <div class="">
    <form class=""  method="POST" enctype="multipart/form-data">
      <div class="row">
         <div class="input-field col s6">
           <input id="product_code" type="text" name="Pcode" class="validate">
           <label for="product_code">Product Code</label>
         </div>
         <div class="input-field col s6">
           <input id="product_name" type="text" name="pname" class="validate">
           <label for="product_name">Product Name</label>
         </div>
       </div>
       <div class="row">
          <div class="input-field col s6">
            <input id="email" type="text" name="email" class="validate">
            <label for="email">GSM</label>
          </div>
           <div class="input-field col s6 ">
             <input id="email" type="text" name="email" class="validate">
             <label for="email">MOU</label>
           </div>
         </div>
         <div class="row">
            <div class="input-field col s6">
              <input id="email" type="text" name="email" class="validate">
              <label for="email">Price</label>
            </div>
             <div class="input-field col s6">
               <input id="email" type="text" name="email" class="validate">
               <label for="email">Sample price</label>
             </div>
           </div>

<div class="row">
<div class="input-field col s12">
  <textarea id="textarea1" class="materialize-textarea"></textarea>
  <label for="textarea1">Description</label>
</div>
</div>
       <div class="row">
         <div class="col s12">
           <div class="file-field input-field">
              <div class="btn">
                <span>Choose File</span>
                <input type="file" id="image" name="image">
              </div>
              <div class="file-path-wrapper">
                <input class="file-path validate" type="text">
              </div>
          </div>
         </div>
       </div>


      <input type="submit" name="submit" value="Submit" id="submit" class="waves-effect waves-light btn">

    </form>

  </div>
</div>
