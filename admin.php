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
$name="[login]";
include("header3.php");
include("subject.php");
?>
<form action="cool.php" enctype="multipart/form-data" method="post">
<fieldset>
<legend>info</legend>
Enter the info::
<input type="file" name="homework" value="" /><br />
<input type="hidden" name="MAX_FILE_SIZE" value="5242880" /><br />
Give a cool name::<input type="text" name="filename" value=""  /><br />
</fieldset>
<fieldset>
<legend>subject</legend>
<?php 
for($i=0;$i<8;$i++)
{
echo"<input type=\"radio\" name=\"subject\" value=\"$subject[$i]\" />$subject[$i]<br />\n";
}
?>
description::<br />
<textarea name="desc" cols="50" rows="6"></textarea>
<input type="reset" value="clear" />
<input type="submit" value="submit" />
</fieldset>

</form>
</body>
</html>