<?php
$connect=mysql_connect('mysql.neq3.com','u734759174_sk123','SK12345','u734759174_12345')
or die('Error connection_aborted');
$db=mysql_select_db('u734759174_12345', $connect)
or die("count");
$email=$_GET['email'];
$desc2=$_GET['coolfeedback'];
$query="INSERT INTO feedback (feedback,email)".
"VALUES ('$desc2','$email')";
$result2=mysql_query($query)
or die("error query: ".mysql_error());
mysql_close($connect);
echo("wanna go back ....dudes click <a href=\"default.php\">here</a>"); 
include("footer.php");
?>