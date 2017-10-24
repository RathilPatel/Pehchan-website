<!DOCTYPE html>
<html>
<head>
	<title>Product</title>
	<?php require'header.php' ?>

	<script type="text/javascript">

	function press(src) {
	  var xmlhttp = new XMLHttpRequest();
	  xmlhttp.onreadystatechange = function() {
	    if (this.readyState == 4 && this.status == 200) {
					document.getElementById("content").innerHTML = load("src")
	    }
	  };

	}

	</script>


</head>
<body>
	<?php require 'navbar.php' ?>




<div id="content">

</div>


<?php require 'productnav.php' ?>

<?php require 'footer.php' ?>
<script type="text/javascript">
  $(document).on("click",".notavailable",function(){
 alert("We will upload that category soon ");
});


$("#content").load("producthome.php");
</script>
</body>
</html>
