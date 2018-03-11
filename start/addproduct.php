<!DOCTYPE html>
<html lang="en">
<?php
require "include/headerandfooter/header.php"
?>
    <script type="text/javascript">
        function showSerial(str) {

            if (str == "") {
                document.getElementById("c4").value = "not product selected";
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
                        document.getElementById("c4").value = this.responseText;
                    }
                }
                xmlhttp.open("GET", "getserial.php?q=" + str, true);
                xmlhttp.send();
            }
        }

    </script>
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
                                    <select name="c1" id="c1" onchange="showSerial(this.value)" class="form-control">
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
                                    <select name="c2" class="form-control">
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
                                    <select name="c3" class="form-control">
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
                                    <input type="text" placeholder="serial" class="form-control" name="c4" id="c4" maxlength="3" readonly>
                                    <input type="text" class="form-control" name="c5" maxlength="4">
                                    <!--                                <span id="c4">Current serial</span>-->
                                    <!-- <input class="form-control" name="c5" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" type = "number" maxlength = "4"> -->
                                </div>
                                <!--              <input class="form-control" type="text" name="pcode" value="" placeholder="Eg:AAA-AAA-000-AA">-->
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Product Name</label>
                                <input list="productname" class="form-control" type="text" name="pname" id="pname" value="" placeholder="Product Name">
                                <datalist id="productname">
                                <option value="Indigo"></option>
                                <option value="Coal"></option>
                                <option value="Crimson"></option>
                                <option value="Umber"></option>
                                <option value="Coral"></option>
                                <option value="Cyan"></option>
                                <option value="Yorkshire"></option>
                                <option value="Azurre"></option>
                                <option value="Jade"></option>
                                <option value="Rose"></option>
                                <option value="Team 1"></option>
                                <option value="Emerald"></option>
                                <option value="Coffee"></option>
                                <option value="Lilac"></option>
                                <option value="Marine"></option>
                                <option value="Fuchsia"></option>
                                <option value="Plum"></option>
                                <option value="Magenta"></option>
                                <option value="Ruby"></option>
                                <option value="Bronze"></option>
                                <option value="Tan"></option>
                                <option value="Ocher"></option>
                                <option value="Gold"></option>
                                <option value="Olive"></option>
                                <option value="Sepia"></option>
                                <option value="Junior"></option>
                                <option value="Champange"></option>

                            </datalist>

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
                    $('#c1').change(function() {
                        var serial = $(this).val();
                        $.ajax({
                            type: "GET",
                            dataType: 'json',
                            url: "getserial.php",
                            data: {
                                id: serial
                            },
                            success: function(data) {
                                var res = data[1];
                                // var result = $.json_decode(data);
                                //                            var result = $.parseJSON(data);
                                // var ss=result.serial;
                                document.getElementById('#c4').innerHTML = res;
                            }
                        })
                    })

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
                        } else if (pname == "Indigo" || pname == "indigo") {
                            var remark = "260, Ring-Spun Cotton, 100% Cotton";
                            document.getElementById("remark").value = remark;
                        } else if (pname == "Rose" || pname == "rose") {
                            var remark = "250, Fine-matte, 97% Combed Cotton with 3% Lycra";
                            document.getElementById("remark").value = remark;
                        } else if (pname == "Coal" || pname == "coal") {
                            var remark = "280, Ring-Spun Cotton, 100% Cotton";
                            document.getElementById("remark").value = remark;
                        } else if (pname == "Coffee" || pname == "coffee") {
                            var remark = "220, 100% Cotton Inside, 100% Poly Outside";
                            document.getElementById("remark").value = remark;
                        } else if (pname == "Team 1" || pname == "team 1") {
                            var remark = "160, Organic Pique, 100% Cotton";
                            document.getElementById("remark").value = remark;
                        } else if (pname == "Team 2" || pname == "team 2") {
                            var remark = "170, Organic Ringer Tshirt, 100% Cotton";
                            document.getElementById("remark").value = remark;
                        } else if (pname == "Team 3" || pname == "team 3") {
                            var remark = "170, Organic Raglan, 100% Cotton";
                            document.getElementById("remark").value = remark;
                        } else if (pname == "Junior 1" || pname == "junior 1") {
                            var remark = "200, Organic Pique, 100% Cotton";
                            document.getElementById("remark").value = remark;
                        } else if (pname == "Junior 2" || pname == "junior 2") {
                            var remark = "170, Organic Raglan, 100% Cotton";
                            document.getElementById("remark").value = remark;
                        } else if (pname == "Junior 3" || pname == "junior 3") {
                            var remark = "170, Organic Cotton, 100% Cotton";
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
