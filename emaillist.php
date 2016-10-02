<?php
$email=$_GET['email'];
$connect=mysql_connect('mysql.neq3.com','u734759174_sk123','SK12345','u734759174_12345')
or die('Error connection_aborted');
$db=mysql_select_db('u734759174_12345', $connect)
or die("count");
$query="SELECT * FROM email";
$result=mysql_query($query)
or die("error query: ".mysql_error());
$flag="0";
while($row=mysql_fetch_array($result))
{
if($row['email']==$email)
{
$flag="1";
echo "<h2>Your email is already registered...Wanna go back ...click <a href=\"default.php\"> here</h2>";
}
}
if($flag=="0")
{
$query="INSERT INTO email (id,email) VALUES (0,'$email')";
$result=mysql_query($query)
or die("error query: ".mysql_error());
echo "<h2>Your email is registered...Wanna go back ...click <a href=\"default.php\"> here</h2>";
}
mysql_close($connect);
?>