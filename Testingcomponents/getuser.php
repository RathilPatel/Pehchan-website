
<!DOCTYPE html>
<html>
<head>
<style>
table {
    width: 100%;
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
    padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>

<?php
$q = intval($_GET['q']);

$con = mysqli_connect('localhost','root','sundaY05@','pehchan');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"pehchan");
$sql="SELECT * FROM `serial`;
$result = mysqli_query($con,$sql);


while($row = mysqli_fetch_array($result)) {
    echo  $row['product'];
    echo $row['curr_serial'];
}
echo "</table>";
mysqli_close($con);
?>
</body>
</html>
