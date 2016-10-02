<?php
$name="canbliz";
include("header.php");
?>
<p>
Welcome to the Canbliz,the official website of C.S.E. 
Department of S.V.C.E......
Enjoy your stay here for a time while we keep updating....
By this time,we assure that you can blitz at this moment in canbliz.....
<br />.
<br />.
<br />.
<br />.
This website is a common interface for Cs department that tells abt the day-to-day update in a full fledged ......
<br />.
<br />.
<br />.
<br />
</p>
<?php
include("subject.php");
?>
<p><h2>Select one of the subject for subject details along with uploaded notes:</h2>
<form method="get" action="subject2.php">
<fieldset><legend><h1>Choose your subject:</h1></legend>
<select name="subject00cool">
<?php
for($i=0;$i<8;$i++)
{
echo"<option value=$subcode[$i]>$subject[$i]</option>\n";
}
?>
</select>
<br />
<br />
<input type="submit" value="visit" />
</fieldset>
</form>
<br />
<br />
<?php
include("feedback.php");
include("footer.php");
?>