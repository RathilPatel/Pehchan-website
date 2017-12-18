<!DOCTYPE html>
<html>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="../../materialize/js/materialize.min.js"></script>
<link rel="stylesheet" href="../../materialize/css/materialize.min.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<head>
    <meta charset="utf-8">
    <title>Product</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php require '../headerandfooter/header.php'; ?>
</head>

<body>
    <?php require 'navbar.php'; ?>
    <?php require 'productnav.php';?>
    <div class="row">
        <!-- <div class="col l2">
        </div> -->
     

        <div class="col l12">
            <div id="content" style="y-overflow:auto;">

            </div>

        </div>

    </div>
    <?php require '../headerandfooter/footer.php'; ?>
    <script>
        function getDataFromUrl(urlWithContent) {
            // jQuery async request
            $.ajax({
                url: urlWithContent,
                dataType: "html",
                success: function(data) {
                    return $('#content').html(data);
                },
                error: function(e) {
                    alert('Error: ' + e);
                }
            });
        }

    </script>
    <script type="text/javascript">
        $("#content").load("producthome.html");


        function round() {
            $("#content").load("round.php");
        }

        function polo() {
            $("#content").load("polo.php");
        }

        function frame() {
            $("#content").load("frames.php");
        }

        function crystal() {
            $("#content").load("crystal.php");
        }

        function leather() {
            $("#content").load("leather.php");
        }

        function apparels() {
            $("#content").load("");
        }

        function bag() {
            $("#content").load("bag.php");
        }

        function stationary() {
            $("#content").load("stationary.php");
        }

        function gold() {
            $("#content").load("goldfoil.php");
        }

        function gifts() {
            $("#content").load("giftsets.php");
        }

        function pen() {
            $("#content").load("pen.php");
        }

        function sipper() {
            $("#content").load("sipper.php");
        }

        function keychain() {
            $("#content").load("keychain.php");
        }

        function desktop() {
            $("#content").load("desktoparticle.php");
        }

        function cg_misc() {
            $("#content").load("cg_misc.php");
        }

        /*function led() {
            $("#content").load("led.php");
        }
*/
        function sweatshirts() {
            $("#content").load("sweatshirts.php");
        }

        function jackets() {
            $("#content").load("jackets.php");
        }

        function it_misc() {
            $("#content").load("it_misc.php");
        }

        function pendrive() {
            $("#content").load("pendrives.php");
        }

        function powerbank() {
            $("#content").load("powerbanks.php");
        }

        function hoodies() {
            $("#content").load("hoodies.php");
        }

        function school() {
            $("#content").load("school.php");
        }

        function hospital() {
            $("#content").load("hospitality.php");
        }

        function formal() {
            $("#content").load("formal.php");
        }

        function security() {
            $("#content").load("security.php");
        }

        function uni_misc() {
            $("#content").load("uni_misc.php");
        }

    </script>
</body>

</html>
