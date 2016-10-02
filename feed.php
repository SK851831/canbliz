<?php
$username='mass';
$password='ajith';
if(!isset($_SERVER['PHP_AUTH_USER'])||!isset($_SERVER['PHP_AUTH_PW'])||
$_SERVER['PHP_AUTH_USER']!=$username||$_SERVER['PHP_AUTH_PW']!=$password)
// The user name/password are incorrect so send the authentication headers
{header('HTTP/1.1 401 Unauthorized');
header('WWW-Authenticate: Basic realm="canbliz2"');
exit('<h2>Canbliz</h2>Sorry, you must enter a valid user name and password to ' .
'access this page.'.'would you like to visit home page..<a href="default.php">CLICK HERE</a>');
}
?>
<?php
$name="[feedback list]";
include("header3.php");
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
echo "$email : $feedback <br />";
}
mysql_close($connect);
echo "</div>";
include("footer.php");
?>