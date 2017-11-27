
<?php
$to = "rathilvasani@gmail.com ";
$subject = "HTML email";
$too = "russelgaze123@gmail.com";
$message = "
<html>
<head>
<title>HTML email</title>
</head>
<body>
<p>This email contains HTML Tags!</p>
<table>
<tr>
<th>Firstname</th>
<th>Lastname</th>
</tr>
<tr>
<td>raoga </td>
<td>DewSI</td>
</tr>
</table>
</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
//
// // More headers
$headers .= 'From: <sales@mypehchan.com>' . "\r\n";

mail($to,$subject,$message);
mail($too,$subject,$message);
?>
