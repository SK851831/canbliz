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
$subject=$_POST['subject'];
$desc=$_POST['desc'];
$filename=$_FILES['homework']['name'];
$filesize=$_FILES['homework']['size'];
$filenames=$_POST['filename'];
$filetmp=$_FILES['homework']['tmp_name'];
$error=$_FILES['homework']['error'];
$result=move_uploaded_file($filetmp,"$subject/$filename");
$connect=mysql_connect('mysql.neq3.com','u734759174_sk123','SK12345','u734759174_12345')
or die('Error connection_aborted');
$db=mysql_select_db('u734759174_12345', $connect)
or die("count");
$query="INSERT INTO santhosh (id,subject,description,filename,file)".
"VALUES (0,'$subject','$desc','$filenames','$filename')";
$result2=mysql_query($query)
or die("error query: ".mysql_error());
mysql_close($connect);
echo("wanna go back ....admin<a href=\"admin.php\">here</a>"); 
?>