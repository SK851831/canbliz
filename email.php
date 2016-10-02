<?php

$connect=mysql_connect('mysql.neq3.com','u734759174_sk123','SK12345','u734759174_12345')
or die('Error connection_aborted');
$db=mysql_select_db('u734759174_12345', $connect)
or die("count");
$query="SELECT * FROM email";
$result=mysql_query($query)
or die("error query: ".mysql_error());
$count=0;
while($row=mysql_fetch_array($result))
{
$email[$count]=$row['email'];
$count++;
}
mysql_close($connect);
$count--;
while($count>=0)
{
echo "$email[$count]<br />";
$count--;
}
?>