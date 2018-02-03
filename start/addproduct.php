<!DOCTYPE html>
<html lang="en">
<?php require 'include/headerandfooter/header.php' ?>

<!--
<script>
    $(document).ready(function() {
        $(document).on('keydown','#pname', function() {
            $("#pname").autocomplete( {
                source: function(request, response) {
                    $.ajax( {
                        url: "getdetails.php",
                        type: 'post',
                        dataType: 'json',
                        data: {
                            search: request.term, request:1
                        },
                        success: function(data) {
                            response(data);
                        }
                    });
                },

                select: function(event, ui) {
                    $(this).val(ui.item.Product_Name);
                    var pname = ui.item.value;
                    $.ajax({
                        url: 'getdetails.php',
                        type: 'post',
                        data: {pname:pname,request:2},
                        dataType: 'json',
                        success: function(response){
                            var len = response.length;
                            if(len > 0) {
                                var
                            }
                        }
                    })
                }
            })
        })
    })
</script>
-->

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
              <input class="form-control" type="text" name="gsm" value="" placeholder="GSM">
            </div>
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
        $(document).ready(function(){
                $(function(){
var games = ["Baseball","Tennis","Golf","Cricket","Football","Hockey","Badminton","Volleyball","Boxing","Kabaddi","Chess","Long Jump","High Jump","Racing","Handball","Swimming","Wrestling"];

$("#pname").autocomplete({
source: games
});

});

    
});
        </script>
<?php require 'include/headerandfooter/footer.php' ?>
