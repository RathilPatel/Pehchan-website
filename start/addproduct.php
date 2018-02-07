<!DOCTYPE html>
<html lang="en">
<?php 
require "include/headerandfooter/header.php"
?>

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
                                <select name="c1" onchange="showUser(this.value)">
                                     <option value="">Select a type:</option>
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
                        <option value="KG">KG</option>
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

                                <input type="text" class="form-control" name="c4" maxlength="3">
                                <input type="text" class="form-control" name="c5" maxlength="4">
                                <!-- <input class="form-control" name="c5" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" type = "number" maxlength = "4"> -->
                            </div>
                            <!--              <input class="form-control" type="text" name="pcode" value="" placeholder="Eg:AAA-AAA-000-AA">-->
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Product Name</label>
                            <input class="form-control" type="text" name="pname" id="pname" value="" placeholder="Product Name">
                            <!--
                            <datalist id="productname">
                                <option value="Indigo (Red)"></option>
                                <option value="Coal (Red)"></option>
                                <option value="Crimson (Yellow)"></option>
                                <option value="Aqua"></option>
                            </datalist>
-->
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Remarks</label>
                            <input class="form-control" type="text" name="gsm" id="remark" placeholder="GSM, Knit, Yarn">
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
                            <img id='img-upload' />
                        </div>
                        <input type="submit" class="btn btn-primary btn-block" name="submit" value="Submit" class="btn-login">
                    </form>
                </div>
            </div>
            <script>
                function showUser(str) {
                    if (str == "") {
                        document.getElementById("c4").value;
                        return;
                    } else {
                        if (window.XMLHttpRequest) {
                            // code for IE7+, Firefox, Chrome, Opera, Safari
                            xmlhttp = new XMLHttpRequest();
                        } else {
                            // code for IE6, IE5
                            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                        }
                        xmlhttp.onreadystatechange = function() {
                            if (this.readyState == 4 && this.status == 200) {
                                document.getElementById("c4").innerHTML = this.responseText;
                            }
                        };
                        xmlhttp.open("GET", "getserial.php?serial=" + str, true);
                        xmlhttp.send();
                    }
                }

                function changeInput() {
                    var pname = document.getElementById("pname").value;
                    var remark = "";
                    if (pname == "Olive" || pname == "olive") {
                        remark = "150, Sinker-Single Jersey, Micro Polyester-Dry Fit";
                        document.getElementById("remark").value = remark;
                    } else if (pname == "Umber" || pname == "umber") {
                        remark = "180, Matte - Mesh, Micro Polyester-Dry Fit";
                        document.getElementById("remark").value = remark;
                    } else if (pname == "Gold" || pname == "gold") {
                        var remark = "180, Single Jersey, Micro Polyester-Dry Fit";;
                        document.getElementById("remark").value = remark;
                    } else if (pname == "Orcher" || pname == "orcher") {
                        var remark = "160, Single Jersey, Micro Polyester-Dry Fit";
                        document.getElementById("remark").value = remark;
                    } else if (pname == "Olive- " || pname == "olive-") {
                        var remark = "150, Sinker-Single Jersey, Micro Polyester-Dry Fit";
                        document.getElementById("remark").value = remark;
                    } else if (pname == "Umber-" || pname == "umber-") {
                        var remark = "150, Sinker-Single Jersey, Micro Polyester-Dry Fit";
                        document.getElementById("remark").value = remark;
                    } else if (pname == "Tan" || pname == "tan") {
                        var remark = "180, Nirmal Knit, Micro Polyester-Dry Fit";
                        document.getElementById("remark").value = remark;
                    } else if (pname == "Bronze" || pname == "bronze") {
                        var remark = "180, Sinker, 100% Cotton";
                        document.getElementById("remark").value = remark;
                    } else if (pname == "Sepia" || pname == "sepia") {
                        var remark = "200, Sinker, 100% Cotton";
                        document.getElementById("remark").value = remark;
                    } else if (pname == "Champange" || pname == "champange") {
                        var remark = "180, Sinker, 100% Cotton";
                        document.getElementById("remark").value = remark;
                    } else if (pname == "Copper" || pname == "copper") {
                        var remark = "220, Honeycombed, 100% Cotton";
                        document.getElementById("remark").value = remark;
                    } else if (pname == "Ruby" || pname == "ruby") {
                        var remark = "210, Thick Pick, 100% Polo";
                        document.getElementById("remark").value = remark;
                    } else if (pname == "Crimson" || pname == "crimson") {
                        var remark = "235, Honeycomb, 100% Cotton";
                        document.getElementById("remark").value = remark;
                    } else if (pname == "Magenta" || pname == "magenta") {
                        var remark = "240, Airtex Polo, 100% Cotton";
                        document.getElementById("remark").value = remark;
                    } else if (pname == "Plum" || pname == "plum") {
                        var remark = "240, Honeycomb, 100% Cotton";
                        document.getElementById("remark").value = remark;
                    } else if (pname == "Fuchsia" || pname == "fuchsia") {
                        var remark = "260, Honeycomb, 100% Cotton";
                    } else if (pname == "Marine" || pname == "marine") {
                        var remark = "240, Double Merserised, 100% Cotton";
                        document.getElementById("remark").value = remark;
                    } else if (pname == "Lilac" || pname == "lilac") {
                        var remark = "190, Matte-Honeycomb, Polyester Cotton";
                        document.getElementById("remark").value = remark;
                    } else if (pname == "Coral" || pname == "coral") {
                        var remark = "210, Matte-Honeycomb, Polyester Cotton";
                        document.getElementById("remark").value = remark;
                    } else if (pname == "Cyan" || pname == "cyan") {
                        var remark = "250, Matte-Honeycomb, Cotton Polyester";
                        document.getElementById("remark").value = remark;
                    } else if (pname == "Yorkshire" || pname == "yorkshire") {
                        var remark = "240, Matte-Pique, Polyester Cotton";
                        document.getElementById("remark").value = remark;
                    } else if (pname == "Azurre" || pname == "azurre") {
                        var remark = "330, Brushed Fleece Inside, Cotton Fleece";
                        document.getElementById("remark").value = remark;
                    } else if (pname == "Aqua" || pname == "aqua") {
                        var remark = "330, Brushed Fleece Inside, Cotton Fleece";
                        document.getElementById("remark").value = remark;
                    } else if (pname == "Emerald" || pname == "emerald") {
                        var remark = "360, Brushed Fleece Inside, 100% Cotton";
                        document.getElementById("remark").value = remark;
                    } else if (pname == "Jade" || pname == "jade") {
                        var remark = "360, Brushed Fleece Inside, 100% Cotton";
                        document.getElementById("remark").value = remark;
                    } else if (pname == "Mauve-126" || pname == "mauve-126") {
                        var remark = "330, Brushed Fleece Inside, 100% Cotton";
                        document.getElementById("remark").value = remark;
                    } else if (pname == "Silver-124" || pname == "silver-124") {
                        var remark = "360, Brushed Fleece Inside, Super Poly";
                        document.getElementById("remark").value = remark;
                    } else {
                        var remark = "invalid";
                    }
                    //console.log("remark:"+remark);
                }
                var pname = document.getElementById("pname");
                pname.onkeyup = function() {
                    changeInput();
                }

            </script>
            <?php require 'include/headerandfooter/footer.php' ?>
