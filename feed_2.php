<?php
$name="feedback list";
include("header2.php");
$connect=mysql_connect('mysql.neq3.com','u734759174_sk123','SK12345','u734759174_12345')
or die('Error connection_aborted');
$db=mysql_select_db('u734759174_12345', $connect)
or die("count");
$query="SELECT * FROM feedback";
$result=mysql_query($query)
or die("error query: ".mysql_error());
while($row=mysql_fetch_array($result))
{
$email=$row['email'];
$feedback=$row['feedback'];
echo "$email : $feedback<br />";
}
mysql_close($connect);
?>