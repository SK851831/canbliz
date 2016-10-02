<?php
$connect=mysql_connect('mysql.neq3.com','u734759174_sk123','SK12345','u734759174_12345')
or die('Error connection_aborted');
$db=mysql_select_db('u734759174_12345', $connect)
or die("count");
$query="SELECT * FROM santhosh";
$result=mysql_query($query)
or die("error query: ".mysql_error());
$count=0;
while($row=mysql_fetch_array($result))
{
if($row['subject']==$name2)
{
$file[$count]=$row['file'];
$filename[$count]=$row['filename'];
$desc[$count]=$row['description'];
$count++;
}
}
mysql_close($connect);
?>