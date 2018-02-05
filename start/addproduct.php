<!DOCTYPE html>
<html lang="en">
<?php require 'include/headerandfooter/header.php' ?>
<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
<?php require 'include/sidenav.php'; ?>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Products</a>
        </li>
        <li class="breadcrumb-item active">Add Product</li>
      </ol>

      <div class="card mb-3">
        <div class="card-header">
          <!-- <i class="fa fa-area-chart"></i> -->
          Fill Product Information
        </div>
        <div class="card-body">
          <form action="function/addproduct-func.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
              <label for="exampleInputEmail1">Product Code</label>
                <div class="input-group">
                    <select name="c1">
                        <option value="JC">JC - Jackets</option>
                        <option value="PN">PN - Polo Neck</option>
                        <option value="RN">RN - Round Neck</option>
                        <option value="SS">SS - Sweat Shirts</option>
                        <option value="HO">HO - Hoodie</option>
                        <option value="CC">CC - Chinese Collar</option>
                        <option value="SH">SH - Shirts</option>
                        <option value="UN">UN - Uniform</option>
                        <option value="OT">OT - Other</option>
                    </select>
                    <select name="c2">
                        <option value="RR">RR</option>
                        <option value="BC">BC</option>
                        <option value="TS">TS</option>
                        <option value="YV">YV</option>
                        <option value="EM">EM</option>
                        <option value="RT">RT</option>
                        <option value="IR">IR</option>
                        <option value="OT">OT-Other</option>
                    </select>
                    <select name="c3">
                        <option value="PC">PC - Poly Cotton</option>
                        <option value="CN">CN - 100% Cotton</option>
                        <option value="DF">DF - Dry Fit</option>
                        <option value="SP">SP - Super Poly</option>
                        <option value="IM">IM - Imported</option>
                        <option value="CL">CL - Cotton Lycra</option>
                        <option value="MP">MP - Micro Poly</option>
                        <option value="PP">PP - Pure Polyster</option>
                        <option value="CG">CG - Cotton Gabardine </option>
                        <option value="FJ">FJ - Fleece Jackets</option>
                        <option value="EX">EX - Exclusive</option>
                        <option value="OT">OT - Other</option>
                    </select>
                    <!-- <input type="text" class="form-control" name="c4" maxlength="3"> -->
                    <input type="text" class="form-control" name="c5" maxlength="4">

                    <!-- <input class="form-control" name="c5" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" type = "number" maxlength = "4"> -->
                </div>
                    <!--              <input class="form-control" type="text" name="pcode" value="" placeholder="Eg:AAA-AAA-000-AA">-->
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Product Name</label>
              <input class="form-control" type="text" name="pname" id="pname" value="" placeholder="Product Name">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Remarks</label>
              <input class="form-control" type="text" name="gsm" id="remark" value="" placeholder="GSM, Knit, Yarn">
                <!--<input list="remarks" class="form-control" type="text" name="gsm" placeholder="GSM, Knit, Yarn">
                <datalist id="remarks">
                    <option value="150, Sinker-Single Jersey, Micro Polyester-Dry Fit"></option>
                    <option value="180, Matte - Mesh, Micro Polyester-Dry Fit"></option>
                    <option value="180, Single Jersey, Micro Polyester-Dry Fit"></option>
                    <option value="160, Single Jersey, Micro Polyester-Dry Fit"></option>
                    <option value="180, Nirmal Knit, Micro Polyester-Dry Fit"></option>
                    <option value="180, Sinker, 100% Cotton"></option>
                    <option value="220, Honeycombed, 100% Cotton"></option>
                    <option value="210, Thick Pick, 100% Polo"></option>
                    <option value="235, Honeycomb, 100% Cotton"></option>
                    <option value="240, Airtex Polo, 100% Cotton"></option>
                    <option value="240, Honeycomb, 100% Cotton"></option>
                    <option value="260, Honeycomb, 100% Cotton"></option>
                    <option value="240, Double Merserised, 100% Cotton"></option>
                    <option value="190, Matte-Honeycomb, Polyester Cotton"></option>
                    <option value="210, Matte-Honeycomb, Polyester Cotton"></option>
                    <option value="250, Matte-Honeycomb, Cotton Polyester"></option>
                    <option value="240, Matte-Pique, Polyester Cotton"></option>
                    <option value="330, Brushed Fleece Inside, Cotton Fleece"></option>
                    <option value="360, Brushed Fleece Inside, 100% Cotton"></option>
                    <option value="330, Brushed Fleece Inside, 100% Cotton"></option>
                    <option value="360, Brushed Fleece Inside, Super Poly"></option>
                </datalist>
-->            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">MOQ(Minimum Order Quantity)</label>
              <input class="form-control" type="text" name="moq" value="" placeholder="MOQ">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Price(Rs.)</label>
              <input class="form-control" type="text" name="oprice" value="" placeholder="Cost Price">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Sample Price(Rs.)</label>
              <input class="form-control" type="text" name="sprice" value="" placeholder="sample product price">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Description</label>
              <textarea class="form-control" type="text" name="pdesc" value="" placeholder="Describe the product "></textarea>
            </div>
            <div class="form-group">
    <label>Upload Image</label>
    <div class="input-group">
        <span class="input-group-btn">
            <span class="btn btn-default btn-file">
                Browse… <input type="file" name="myimage" id="imgInp">
            </span>
        </span>
        <!-- <input type="text" class="form-control" readonly> -->
    </div>
    <img id='img-upload'/>
</div>
              <input type="submit" class="btn btn-primary btn-block" name="submit" value="Submit" class="btn-login">
            </form>
          </div>
        </div>
        <script>
            function changeInput() {
                var pname = document.getElementById("pname").value;
                if(pname == "Olive" || "olive") {
                    var remark = "150, Sinker-Single Jersey, Micro Polyester-Dry Fit";
                    //document.getElementById("remark").value = remark;
                }
                else if(pname == "Umber" || "umber") {
                    var remark = "180, Matte - Mesh, Micro Polyester-Dry Fit";
                }
                else if(pname == "Gold" || "gold") {
                    var remark = "180, Single Jersey, Micro Polyester-Dry Fit";
                }
                else if(pname == "Orcher" || "orcher") {
                    var remark = "160, Single Jersey, Micro Polyester-Dry Fit";
                }
                else if(pname == "Olive- " || "olive-") {
                    var remark = "150, Sinker-Single Jersey, Micro Polyester-Dry Fit";
                }
                else if(pname == "Umber-" || "umber-") {
                    var remark = "150, Sinker-Single Jersey, Micro Polyester-Dry Fit";
                }
                else if(pname == "Tan" || "tan") {
                    var remark = "180, Nirmal Knit, Micro Polyester-Dry Fit";
                }
                else if(pname == "Bronze" || "bronze") {
                    var remark = "180, Sinker, 100% Cotton";
                }
                else if(pname == "Sepia" || "sepia") {
                    var remark = "200, Sinker, 100% Cotton";
                }
                else if(pname == "Champange" || "champange") {
                    var remark = "180, Sinker, 100% Cotton";
                }
                else if(pname == "Copper" || "copper") {
                    var remark = "220, Honeycombed, 100% Cotton";
                }
                else if(pname == "Ruby" || "ruby") {
                    var remark = "210, Thick Pick, 100% Polo";
                }
                else if(pname == "Crimson" || "crimson") {
                    var remark = "235, Honeycomb, 100% Cotton";
                }
                else if(pname == "Magenta" || "magenta") {
                    var remark = "240, Airtex Polo, 100% Cotton";
                }
                else if(pname == "Plum" || "plum") {
                    var remark = "240, Honeycomb, 100% Cotton";
                }
                else if(pname == "Fuchsia" || "fuchsia") {
                    var remark = "260, Honeycomb, 100% Cotton";
                }
                else if(pname == "Marine" || "marine") {
                    var remark = "240, Double Merserised, 100% Cotton";
                }
                else if(pname == "Lilac" || "lilac") {
                    var remark = "190, Matte-Honeycomb, Polyester Cotton";
                }
                else if(pname == "Coral" || "coral") {
                    var remark = "210, Matte-Honeycomb, Polyester Cotton";
                }
                else if(pname == "Cyan" || "cyan") {
                    var remark = "250, Matte-Honeycomb, Cotton Polyester";
                }
                else if(pname == "Yorkshire" || "yorkshire") {
                    var remark = "240, Matte-Pique, Polyester Cotton";
                }
                else if(pname == "Azurre" || "azurre") {
                    var remark = "330, Brushed Fleece Inside, Cotton Fleece";
                }
                else if(pname == "Aqua" || "aqua") {
                    var remark = "330, Brushed Fleece Inside, Cotton Fleece";
                }
                else if(pname == "Emerald" || "emerald") {
                    var remark = "360, Brushed Fleece Inside, 100% Cotton";
                }
                else if(pname == "Jade" || "jade") {
                    var remark = "360, Brushed Fleece Inside, 100% Cotton";
                }
                else if(pname == "Mauve-126" || "mauve-126") {
                    var remark = "330, Brushed Fleece Inside, 100% Cotton";
                }
                else if(pname == "Silver-124" || "silver-124") {
                    var remark = "360, Brushed Fleece Inside, Super Poly";
                }
                else {
                    var remark = "invalid";
                }
                document.getElementById("remark").value = remark;
            }
            var pname = document.getElementById("pname");
            pname.onchange = function() {
                changeInput();
            }
            pname.onkeyup = function() {
                changeInput();
            }
        </script>
<?php require 'include/headerandfooter/footer.php' ?>
